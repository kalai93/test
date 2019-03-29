<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }
    
    public function send(){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
       // $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Mailer = "smtp";


        $mail->Host     = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kalaiarasi.thanajeyan@gmail.com';
        $mail->Password = 'alliswellkalai';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 587;
        
        $mail->setFrom('ikalaiarasi.thanajeyan@gmail.com', 'CodexWorld');
       // $mail->addReplyTo('kalaiarasi.thanajeyan@gmail.com', 'CodexWorld');
        
        // Add a recipient
        $mail->addAddress('kalaiarasi.thanajeyan@gmail.com');
        
        // Add cc or bcc 
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Send Email via SMTP using PHPMailer in CodeIgniter';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
}