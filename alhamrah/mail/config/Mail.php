<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../../vendor/autoload.php';

class Mail
{
    private $mail;

    private $username, $password;

    public function __construct(){
        $this->mail = new PHPMailer(true);
    }

    public function config($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    public function configMail(){

        //Server settings
        $this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $this->mail->isSMTP();                                            // Set mailer to use SMTP
        $this->mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = $this->username;                     // SMTP username
        $this->mail->Password   = $this->password;                               // SMTP password
        $this->mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port       = 587;                                    // TCP port to connect to
        $this->mail->isHTML(true);                                  // Set email format to HTML
    }


    public function send($history){
        try{
            $this->configMail();

            //Recipients
            $this->mail->setFrom($history['from']);
            $this->mail->addAddress($history['to']);     // Add a recipient

            // $this->mail->addAddress('ellen@example.com');               // Name is optional
            // $this->mail->addReplyTo('info@example.com', 'Information');
            // $this->mail->addCC('cc@example.com');
            // $this->mail->addBCC('bcc@example.com');
        
            // Attachments
            // $this->mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $this->mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $this->mail->Subject = $history['subject'];
            $this->mail->Body    = $history['body'];
            // $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $this->mail->send();
            return 1;
            // echo 'Message has been sent';

        } catch (Exception $e) {
            return 0;
            // echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }

    }
}



?>