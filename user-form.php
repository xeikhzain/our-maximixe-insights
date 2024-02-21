<?php
include 'config.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert user data into tbl_users
    $sqlquery = "INSERT INTO tbl_users (`name`, `email`, `address`) VALUES ('$name', '$email', '$address')";
    if ($conn->query($sqlquery)) {
        echo 'User data inserted successfully';
        
        // Get the user ID of the last inserted user
        $userid = $conn->insert_id;

        // Insert order data into tbl_orders
        $orderId = $_POST['orderId']; // Assuming you have this value available
        $message = $_POST['message']; // Assuming you have this value available

        $sqlquery = "INSERT INTO tbl_orders (`user_id`, `user_order`, `message`, `order_date`) VALUES ('$userid', '$orderId', '$message', NOW())";
        if ($conn->query($sqlquery)) {
            echo 'Order data inserted successfully';
        } else {
            echo 'Error inserting order data: ' . $conn->error;
        }
    } else {
        echo 'Error inserting user data: ' . $conn->error;
    }
}
?>
