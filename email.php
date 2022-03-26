<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$fullName = $_POST['fullName'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$car_type = $_POST['car_type'];
$car_make = $_POST['carMake'];
$car_model = $_POST['carModel'];
$detail_type = $_POST['detail_radio'];

$to = 'plgunnell18@gmail.com';
$email_subject = "New Detail Request - $detail_type";

$email_body = "Name: $fullName \nEmail: $visitor_email \n
Phone: $phone\ nCar Type: $car_type\ nCar Make: $car_make\ nCar Model: $car_model\ nDetail Type: $detail_type ".

$toEmail = 'example@example.com';
$headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];


/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */

// Import PHPMailer classes into the global namespace.


// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = 'plgunnell18@gmail.com';
$senderName = 'Parker Gunnell';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient = 'plgunnell18@gmail.com';

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = 'AKIAX254IZLFWKE53HUM';

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = 'BKPcXFhLlTQxXAF6Baa6sHYdsuBIp+XuW6wKi/FOPKxf';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = 'email-smtp.us-east-1.amazonaws.com';
$port = 587;


$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail -> isSMTP();
    $mail -> setFrom($sender, $senderName);
    $mail -> Username = $usernameSmtp;
    $mail -> Password = $passwordSmtp;
    $mail -> Host = $host;
    $mail -> Port = $port;
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'tls';
    $mail -> addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

    // Specify the message recipients.
    $mail -> addAddress($recipient);
    // You can also add CC, BCC, and additional To recipients here.

    // Specify the content of the message.
    $mail -> isHTML(true);
    $mail -> Subject = $email_subject;
    $mail -> Body = $email_body;
    $mail -> Send();
    echo "Email sent!", PHP_EOL;
} catch (phpmailerException $e) {
    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}

?>