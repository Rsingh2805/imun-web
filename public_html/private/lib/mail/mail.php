<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//exit(dirname(__FILE__));
require_once dirname(__FILE__) . '/../../config.php';
require_once dirname(__FILE__) . '/../../../vendor/autoload.php';

require dirname(__FILE__) . '/../pdf/pdf.php';

function output_log($text){
    if(!isset($logger)){
        $logger = fopen(dirname(__FILE__).'/mail.log', "a+");
    }
    fwrite($logger, $text);
}

function end_log(){
    if(isset($logger)){
        fclose($logger);
        unset($logger);
    }
    unset($logger);
}

function configure_PHPMailer(){
    fopen(dirname(__FILE__).'/mail.log', "w");
    $mail = new PHPMailer;
     $mail->isSMTP();
    $mail->SMTPDebug = CONFIG['smtp']['debug']; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->Debugoutput = function($str, $level){
        output_log($str);
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

function registeredSuccessfullyMail($email, $fullname, $registration_id){
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = "Thank you for Registration!";

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/mail.html'));
    $html = str_replace("CONSTANTVAR2",$registration_id, $html);
    $message = $mail->msgHTML($html, dirname(__FILE__));

    $mail->AltBody = '';
    if(!$mail->send()){
        file_put_contents(dirname(__FILE__).'/email-error.log', "Failed\n".$mail->ErrorInfo);
        return $mail->ErrorInfo;
    }else{
        return "Success";
    }
}

function applicationAcceptedMail($email, $fullname, $nationality){
    output_log("Application accepted was called");
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = ' (IMPORTANT) IMUN Application Decision ';

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/acceptance.html'));
    $message = $mail->msgHTML($html, dirname(__FILE__));
    // $message = $mail->msgHTML('<img src="/register/reg-unnamed.jpg">', dirname(__FILE__));
    $mail->addStringAttachment(getLOAPdf($fullname, $nationality), 'loa.pdf');
        $mail->addAttachment(dirname(__FILE__).'/../../../imun_china.pdf');
    if(!$mail->send()){
        output_log($mail->ErrorInfo);
        end_log();
        return false;
    }else{
        output_log("Mail sent successfully");
        end_log();
        return true;
    }
}

function applicationRejectedMail($email, $fullname){
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = ' (IMPORTANT) IMUN Application Announcement ';

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/rejection.html'));
    $message = $mail->msgHTML($html, dirname(__FILE__));
    if(!$mail->send()){
        return false;
    }else{
        return true;
    }
}

function paymentPendingMail($email, $fullname){
    $mail = configure_PHPMailer();
    $mail->addAddress($email, $fullname);
    $mail->Subject = 'International Model United Nations 2019 ';

//    $mail->msgHTML($html); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $html = str_replace("CONSTANTVAR1",$fullname, file_get_contents(dirname(__FILE__).'/pending.html'));
    $message = $mail->msgHTML($html, dirname(__FILE__));
    // $message = $mail->msgHTML('<img src="/register/reg-unnamed.jpg">', dirname(__FILE__));
    if(!$mail->send()){
        return false;
    }else{
        return true;
    }
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

function sendNewsLetter($emails, $message, $subject, $file){
    $mail = configure_PHPMailer();
    foreach ($emails as $email){
        $mail->addAddress($email);
    }
    $mail->Subject = "IMUN Newsletter";
    $html = str_replace("NEWSLETTERSUBJECT",$subject, file_get_contents(dirname(__FILE__).'/newsletter.html'));
    $html = str_replace("NEWSLETTERMESSAGE", $message, $html);
    $message = $mail->msgHTML($html, dirname(__FILE__));
    $mail->addAttachment('uploads/'.$file, "IMUNNewsletter.pdf");
    if(!$mail->send()){
        file_put_contents(dirname(__FILE__).'/email-error.log', "Failed\n".$mail->ErrorInfo);
        return $mail->ErrorInfo;
    }else{
        return true;
    }
}

function sendDelegateLetter($emails, $message, $subject, $file){
    $mail = configure_PHPMailer();
    foreach ($emails as $email){
        $mail->addAddress($email);
    }
    output_log("Mail is " + json_encode($emails));
    output_log("Message is "+$message);
    output_log("Subject is "+$subject);
    output_log("File is "+$file);
    $mail->Subject = "IMUN Newsletter";
    $html = str_replace("NEWSLETTERSUBJECT",$subject, file_get_contents(dirname(__FILE__).'/delegates_mail.html'));
    $html = str_replace("NEWSLETTERMESSAGE", $message, $html);
    $mail->msgHTML($html, dirname(__FILE__));
    $mail->addAttachment('uploads/'.$file, "attachment.pdf");
    if(!$mail->send()){
        file_put_contents(dirname(__FILE__).'/email-error.log', "Failed\n".$mail->ErrorInfo);
        return $mail->ErrorInfo;
    }else{
        return true;
    }
}