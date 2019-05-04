<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//exit(dirname(__FILE__));
require_once dirname(__FILE__).'/../../config.php';
require_once dirname(__FILE__).'/../../../vendor/autoload.php';

require dirname(__FILE__).'/../pdf/pdf.php';

function configure_PHPMailer(){
    $mail = new PHPMailer;
  // $mail->isSMTP();
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
    $mail->setFrom(CONFIG['smtp']['from'], CONFIG['smtp']['from_name']);
    //Set an alternative reply-to address
    $mail->addReplyTo(CONFIG['smtp']['from'], CONFIG['smtp']['from_name']);
    return $mail;
}

function registeredSuccessfullyMail($email, $fullname){
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = "International Model United Nations";

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/mail.html'));
    $message = $mail->msgHTML($html, dirname(__FILE__));
    $mail->addAttachment(dirname(__FILE__).'/../../../public_html/IMUN_Egypt_2019.pdf');
    $mail->addAttachment(dirname(__FILE__).'/../../../public_html/viet.pdf');
    $mail->AltBody = 'This is a plain-text message body';
    if(!$mail->send()){
        file_put_contents(dirname(__FILE__).'/email-error.log', "Failed\n".$mail->ErrorInfo);
        return $mail->ErrorInfo;
    }else{
        return "Success";
    }
}

function applicationAcceptedMail($email, $fullname, $nationality){
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = 'International Model United Nations 2019 ';

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/acceptance.html'));
    $message = $mail->msgHTML($html, dirname(__FILE__));
    // $message = $mail->msgHTML('<img src="/register/reg-unnamed.jpg">', dirname(__FILE__));
    $mail->addStringAttachment(getLOAPdf($fullname, $nationality), 'loa.pdf');
    if(!$mail->send()){
        return false;
    }else{
        return true;
    }
//    $mail = configure_PHPMailer();
//    $mail->addAddress($email, $first);
//    $mail->Subject = 'Accepted for IMUN -2019';
//    $mail->msgHTML(nl2br("Dear $first $last, \n Thank you for registering with IMUN 2019. Your application has been accepted.\nRegards, \n IMUN 2019 team")); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
//    $mail->AltBody = 'HTML messaging not supported';
//    $mail->addStringAttachment(getLOAPdf($first.' '.$last, $nationality), 'my-doc.pdf');
//// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
//    if(!$mail->send()){
//        return false;
//    }else{
//        return true;
//    }
}

function sendContact($email,$fullname,$message,$subject){
       $mail = configure_PHPMailer();
   $mail->addAddress('team@internationalmun.org', 'Contact Form');
 //Set the subject line 
 $mail->Subject = "IMUN CONTACT FORM";
  //Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
 $mail->msgHTML('<b>NAME : </b>'.$fullname.'<br><b>EMAIL : </b>'.$email.'<br><b>Subject : </b>'.$subject.'<br><b>Message : </b>'.$message);
 //Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
    if(!$mail->send()){
        file_put_contents(dirname(__FILE__).'/email-error.log', "Failed\n".$mail->ErrorInfo);
        return $mail->ErrorInfo;
    }else{
        return true;
    }
    }
