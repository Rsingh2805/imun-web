<?php 
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;

ob_start();
$mail->isSMTP();
$mail->SMTPDebug = 1;
$mail->Debugoutput = 'html';


// $mail->Host = "server47.hostingraja.in";
// $mail->Port =465;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'ssl';
// $mail->Username = "no-reply@staro.in";
// $mail->Password = "y~QdpUB5F3e";

// $mail->Host = "mail.staro.in";
// $mail->Port =587;
// $mail->SMTPAuth = true;
// $mail->Username = "no-reply@staro.in";
// $mail->Password = "y~QdpUB5F3e";

$mail->Host = "smtp.gmail.com";
$mail->Port =587;
$mail->SMTPAuth = true;

$mail->Username = "imun2221@gmail.com";
 $mail->Password = ")(*&^%$#@!";


$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
//Set the SMTP port number - likely to be 25, 465 or 587
if (isset($_POST['submit']) && $_POST['userEmail']!="" && $_POST['userName']!=""   ) {
  # code...
}
//Set who the message is to be sent from
$mail->setFrom($_POST['userEmail'], $_POST['userName']);
//Set an alternative reply-to address
$mail->addReplyTo($_POST['userEmail'], $_POST['userName']);
//Set who the message is to be sent to 
$mail->addAddress('vbhansari@gmail.com', 'Contact Form');
 //Set the subject line 
 $mail->Subject = $_POST['userSub'];
  //Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
 $mail->msgHTML('<b>NAME : </b>'.$_POST['userName'].'<br><b>EMAIL : </b>'.$_POST['userEmail'].'<br><b>Subject : </b>'.$_POST['userSub'].'<br><b>Message : </b>'.$_POST['content']);
 //Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if  (!$mail->send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
    echo "Message sent!";
  }

header('location:index.php');

     ?>