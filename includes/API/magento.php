<?php
/**
 * Sngine Payment API Endpoint for Magento Integration
 */

// Define API constants
define('API_VERSION', '1.0');
define('API_KEY', 'chicken-n-magento-key123#');

// Headers for API response
header('Content-Type: application/json');

// Check API authentication
if (!isset($_SERVER['HTTP_X_API_KEY']) || $_SERVER['HTTP_X_API_KEY'] !== API_KEY) {
    http_response_code(401);
    die(json_encode([
        'success' => false,
        'message' => 'Unauthorized access',
    ]));
}

// Get JSON request data
$input = file_get_contents('php://input');
$request = json_decode($input, true);

// Validate request
if (!$request || !isset($request['order_id']) || !isset($request['amount']) || !isset($request['payment_method'])) {
    http_response_code(400);
    die(json_encode([
        'success' => false,
        'message' => 'Invalid request data',
    ]));
}

// Include bootstrap (if needed)
if (file_exists('../../bootstrap.php')) {
    require_once '../../bootstrap.php';
} elseif (file_exists('/public_html/bootstrap.php')) {
    require_once '/public_html/bootstrap.php';
}

// Initialize payment based on selected method
$payment_method = $request['payment_method'];
$payment_url = '';
$success = false;
$message = '';

try {
    // Get site URL - using $_SERVER['HTTP_HOST'] if system URL isn't defined
    $site_url = isset($system['system_url']) ? $system['system_url'] : 'https://' . $_SERVER['HTTP_HOST'];
    
    // Process based on payment method
    switch ($payment_method) {
        case 'paypal':
            // Based on your paypal.php file structure
            $payment_url = $site_url . '/includes/ajax/payments/paypal.php';
            // Add parameters for Magento integration
            $payment_url .= '?handle=wallet&price=' . $request['amount'];
            $payment_url .= '&webhook_id=2C317835LE294754D';
            $payment_url .= '&magento_order_id=' . $request['order_id'];
            $payment_url .= '&return_url=' . urlencode($request['callback_url']);
            $success = true;
            break;
            
        case 'authorize':
            // Based on your authorize.php file structure
            $payment_url = $site_url . '/includes/ajax/payments/authorize.php';
            // Add parameters for Magento integration
            $payment_url .= '?handle=wallet&price=' . $request['amount'];
            $payment_url .= '&magento_order_id=' . $request['order_id'];
            $payment_url .= '&return_url=' . urlencode($request['callback_url']);
            $success = true;
            break;
            
        case 'coinbase':
            // Based on your system structure
            $payment_url = $site_url . '/includes/ajax/payments/coinbase.php';
            // Add parameters for Magento integration
            $payment_url .= '?handle=wallet&price=' . $request['amount'];
            $payment_url .= '&magento_order_id=' . $request['order_id'];
            $payment_url .= '&return_url=' . urlencode($request['callback_url']);
            $success = true;
            break;
            
        default:
            $message = "Unsupported payment method";
            break;
    }
    
    // Log the Magento order (optional)
    $db_log = [
        'magento_order_id' => $request['order_id'],
        'amount' => $request['amount'],
        'currency' => $request['currency'] ?? 'USD',
        'customer_email' => $request['customer_email'] ?? '',
        'payment_method' => $payment_method,
        'status' => 'pending',
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    // Add DB logging code here if needed
    
} catch (Exception $e) {
    $success = false;
    $message = "Error: " . $e->getMessage();
}

// Return response
echo json_encode([
    'success' => $success,
    'payment_url' => $payment_url,
    'message' => $message,
    'order_id' => $request['order_id'],
    'payment_id' => isset($payment_id) ? $payment_id : null,
]);