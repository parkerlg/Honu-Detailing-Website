<?php
  $fullName = $_POST['fullName'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $car_type = $_POST['car_type']
  $car_make = $_POST['carMake']
  $car_model = $_POST['carModel']
  $detail_type = $_POST['detail_radio']

  $to = 'plgunnell18@gmail.com'
  $email_from = 'honudetail@test.com';
  $email_subject = "New Detail Request - $detail_type";

  $email_body = "Name: $fullName \nEmail: $visitor_email \n
  Phone: $phone \nCar Type: $car_type \nCar Make: $car_make \nCar Model: $car_model \nDetail Type: $detail_type".
  
  $toEmail = 'example@example.com';
$emailSubject = 'New email from your contant form';
$headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

$bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $email_body];
$body = join(PHP_EOL, $bodyParagraphs);

if (mail($toEmail, $emailSubject, $body, $headers)) {
    header('Location: index.html');
}
?>