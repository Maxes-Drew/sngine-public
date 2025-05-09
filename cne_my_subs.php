<?php
// /home/drew44/public_html/cne_my_subs.php
header('Content-Type: application/json');

$conn = mysqli_connect('localhost', 'drew44_drew44_user', 'Windlass1223#', 'drew44_51d2e');
if (!$conn) {
  die(json_encode(['error' => 'DB Connection Failed: ' . mysqli_connect_error()]));
}

$endpoint = $_GET['endpoint'] ?? '';
$api_key = $_GET['api_key'] ?? '';

if ($endpoint == 'groups') {
  $groups = [];
  $group_ids = [];

  // Step 1: Public and closed groups
  $public_query = "SELECT group_id, group_name, group_privacy FROM groups WHERE group_privacy IN ('public', 'closed')";
  $public_result = mysqli_query($conn, $public_query);
  if (!$public_result) {
    die(json_encode(['error' => 'Public Groups Query Failed: ' . mysqli_error($conn)]));
  }
  while ($row = mysqli_fetch_assoc($public_result)) {
    if (!in_array($row['group_id'], $group_ids)) {
      $groups[] = $row;
      $group_ids[] = $row['group_id'];
    }
  }

  // Step 2: Secret groups with API key
  if (!empty($api_key)) {
    $key_query = "SELECT user_id FROM users WHERE api_key = ?";
    $stmt = mysqli_prepare($conn, $key_query);
    if (!$stmt) {
      die(json_encode(['error' => 'Key Query Prep Failed: ' . mysqli_error($conn)]));
    }
    mysqli_stmt_bind_param($stmt, 's', $api_key);
    mysqli_stmt_execute($stmt);
    $key_result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($key_result);
    if (!$user) {
      die(json_encode(['error' => 'Invalid API key', 'groups' => $groups]));
    }

    $user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : $user['user_id'];
    
    $secret_query = "SELECT g.group_id, g.group_name, g.group_privacy 
                    FROM groups g 
                    JOIN groups_members gm ON g.group_id = gm.group_id 
                    WHERE gm.user_id = ? AND gm.approved = '1'";
    $stmt = mysqli_prepare($conn, $secret_query);
    if (!$stmt) {
      die(json_encode(['error' => 'Secret Query Prep Failed: ' . mysqli_error($conn)]));
    }
    mysqli_stmt_bind_param($stmt, 'i', $user_id);
    mysqli_stmt_execute($stmt);
    $secret_result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($secret_result)) {
      if (!in_array($row['group_id'], $group_ids)) {
        $groups[] = $row;
        $group_ids[] = $row['group_id'];
      }
    }
  }

  echo json_encode(['groups' => $groups]);
} else {
  echo json_encode(['error' => 'Invalid endpoint']);
}

mysqli_close($conn);
?>