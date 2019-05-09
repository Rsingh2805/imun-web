<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once dirname(__FILE__) . '/private/config.php';
require_once dirname(__FILE__).'/vendor/autoload.php';



function configure_PHPMailer(){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = CONFIG['smtp']['debug']; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Debugoutput = function($str, $level){
        file_put_contents(dirname(__FILE__).'/email-error.log', $str);
    };
    $mail->Host = CONFIG['smtp']['host']; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = CONFIG['smtp']['port']; // TLS only
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = CONFIG['smtp']['email'];
    $mail->Password = CONFIG['smtp']['pass'];
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
   
    return $mail;
}



if (isset($_POST['submit']) && $_POST['userEmail']!="" && $_POST['userName']!=""   ) {
 $mail = configure_PHPMailer();
}
//Set who the message is to be sent from
$mail->setFrom($_POST['userEmail'], $_POST['userName']);
//Set an alternative reply-to address
$mail->addReplyTo($_POST['userEmail'], $_POST['userName']);
//Set who the message is to be sent to 
$mail->addAddress('vbhansari@gmail.com', 'Contact Form');
 //Set the subject line 
 $mail->Subject = "IMUN CONTACT FORM";
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

header('location:index.php?contact-us=done');

     ?>
