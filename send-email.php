<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $loca1 = $_POST['location1'];
  $loca2 = $_POST['location2'];
  $loca3 = $_POST['location3'];
  $loca4 = $_POST['location4'];
  $transport = $_POST['transport'];
  $date = $_POST['date'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $contact = $_POST['contact'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'webpaagetech@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Akshat@12345'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('webpaagetech@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('webpaagetech@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Locations : $loca1, $loca2, $loca3, $loca4,<br> No.  of Persons : $number <br> Prefered Transpot : $transport <br> Date : $date <br>Email : $email <br> Phone No. : $contact <br>Message : $message </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>

