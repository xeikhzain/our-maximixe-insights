<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    
    $sqlquery = "INSERT INTO tbl_users (`name`, `email`, `address`) VALUES ('$name', '$email', '$address')";
    if ($conn->query($sqlquery)) {
        // echo 'User data inserted successfully';
        
        $userid = $conn->insert_id;
        
        $orderId = $_POST['orderId'];
        $message = $_POST['message'];
        $package = $_POST['package'];
        $price = $_POST['price'];

        $sqlquery = "INSERT INTO tbl_orders (`user_id`, `user_order`, `message`, `order_date`) VALUES ('$userid', '$orderId', '$message', NOW())";
        if ($conn->query($sqlquery)) {
            // echo 'Order data inserted successfully';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'dilsher.dahri10@gmail.com';
                $mail->Password   = 'qxmfyzsklzqmwzmk';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                $mail->setFrom('gsmamba798@gmail.com', 'Maximize Insights');
                $mail->addAddress("$email", "$name");
                
                $ccEmail = 'haroon20@gmail.com';
                $ccName = 'Haroon';
                $mail->addCC($ccEmail, $ccName);

                $mail->isHTML(true);
                $mail->Subject = 'Order Form';
                $mail->Body = "
                <table class='table' style='text-align:left;'>
                <tbody>
                    <tr>
                    <th scope='row' style='padding:10px 60px 10px 0;'>First Name:</th>
                    <td>" . $name . "</td>
                    </tr>
                    <tr>
                    <th scope='row' style='padding:10px 60px 10px 0;'>Email:</th>
                    <td>" . $email . "</td>
                    </tr>
                    <tr>
                    <th scope='row' style='padding:10px 60px 10px 0;'>Order:</th>
                    <td>" . $package . "" . $price. "</td>
                    </tr>
                    <tr>
                    <th scope='row' style='padding:10px 60px 10px 0;'>Message:</th>
                    <td>" . $message . "</td>
                    </tr>
                </tbody>
                </table>
                ";
                $mail->IsHTML(true);
            
                $mail->send();
                $_SESSION['status'] = 'Email sent successfully!';
                echo 'Email sent successfully!';
            } catch (Exception $e) {
                echo "Failed to send email. Error: {$mail->ErrorInfo}";
            }
        } else {
            echo 'Error inserting order data: ' . $conn->error;
        }
    } else {
        echo 'Error inserting user data: ' . $conn->error;
    }


    
}
?>
