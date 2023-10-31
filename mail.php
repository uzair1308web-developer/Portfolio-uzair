<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

include 'connection.php';

$name = $_POST['name']; 
$email = $_POST['email']; 
$message = $_POST['message'];

$sql = "INSERT INTO `contact_form` (`Name`, `Email`, `Question`) VALUES('$name', '$email', '$message')";
$result = mysqli_query($conn, $sql);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'uzairkhan7521@gmail.com';                     //SMTP username
    $mail->Password   = 'dtqcvmyazotwvbal';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom('uzairkhan7521@gmail.com', 'Uzair');

    $mail->addAddress('uzairkhan7521@gmail.com', 'UZAIR KHAN');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form ';
    $mail->Body    = "<table border='1px solid red' cellspacing='0' cellpadding='6px'>
    <tr>
        <th>Name:</th>
        <td> $_POST[name]</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td> $_POST[email]</td>
    </tr>
    <tr>
        <th>Message:</th>
        <td> $_POST[message]</td>
    </tr>
    </table>";

     
   if($mail->send()){
      echo json_encode(['status' => true, 'msg'=> 'Form submitted successfully']) ;
   }
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo json_encode(['status' => false, 'msg'=> 'Failed to submit contact form']) ;
}
?>