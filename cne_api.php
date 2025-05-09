if ($endpoint == 'groups') {
    $groups = [];
    $group_ids = [];
    // Step 1: Get all public and closed groups (no user check)
    $public_query = "SELECT group_id, group_name, group_privacy FROM groups WHERE group_privacy IN ('public', 'closed')";
    $public_result = $db->query($public_query);
    if ($public_result && $public_result->num_rows > 0) {
        while ($row = $public_result->fetch_assoc()) {
            if (!in_array($row['group_id'], $group_ids)) {
                $groups[] = $row;
                $group_ids[] = $row['group_id'];
            }
        }
    }
    // Step 2: If API key provided, add secret groups for that user
 if (!empty($api_key)) {
    $key_query = "SELECT user_id FROM users WHERE api_key = ?";
    $stmt = $db->prepare($key_query);
    $stmt->bind_param('s', $api_key);
    $stmt->execute();
    $key_result = $stmt->get_result();
    $user = $key_result->fetch_assoc();
    if (!$user) {
        die(json_encode(['error' => 'Invalid API key', 'groups' => $groups]));
    }
    $user_id = isset($_GET['user_id']) ? (int)$_GET['user_id'] : $user['user_id'];
    echo "Debug: Using user_id = $user_id\n"; // Add this
    $secret_query = "SELECT g.group_id, g.group_name, g.group_privacy FROM groups g JOIN groups_members gm ON g.group_id = gm.group_id WHERE gm.user_id = ? AND gm.approved = '1'";
    $stmt = $db->prepare($secret_query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $secret_result = $stmt->get_result();
    while ($row = $secret_result->fetch_assoc()) {
        echo "Debug: Found secret group_id = " . $row['group_id'] . "\n"; // Add this
        if (!in_array($row['group_id'], $group_ids)) {
            $groups[] = $row;
            $group_ids[] = $row['group_id'];
        }
    }
}