<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
session_start();
 
if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
 
 
    //Load composer's autoloader
    require 'vendor/autoload.php';
 
    $mail = new PHPMailer(true);                            
    
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'xxx@gmail.com';     //Email for your gmail account
        $mail->Password = 'password'; //Password for you email account
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                 
        
        // Choose Encryption Method: TLS/SSL
        $mail->SMTPSecure = 'ssl';      
        
        // Choose Port
        $mail->Port = 465;   
        
        //Choose Recipient
        $mail->addAddress('xxx@gmail.com'); //Email Address             
        $mail->addReplyTo($email);                                
 
        //Send Email
        $mail->setFrom($email);
 
 
        //Content
        $mail->isHTML(true); 
        $mail->FromName = $name;                                 
        $mail->Subject = $subject;
        $mail->Body = $message;
 
        $mail->send();

        // Status messsage
        $_SESSION['result'] = 'The message has been sent';
	    $_SESSION['status'] = 'ok';
        } catch (Exception $e) {
        $_SESSION['result'] = 'The message could not be sent: '.$mail->ErrorInfo;
        $_SESSION['status'] = 'error';
        }
 
	header("location: index.php");
 
}

?>