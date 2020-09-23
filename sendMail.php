<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mensaje ="
    <html> 
        <head> 
           <title>Correo VIA WEB</title> 
        </head> 
        <body>
        <p> ".$_POST['message']. "</p> 
        </body> 
    </html> 
    " ;
    
    
 /*    $headers .= "From: Miguel Angel Alvarez <pvalentinuzzi14@gmail.com>\r\n"; 
    
    
   mail("pvalentinuzzi14@gmail.com","Consulta VIA WEB",$mensaje,$headers);   
    header("location:index.php");
    
 
 
 */ 





// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '@gmail.com';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->SetFrom($email,$name);
    $mail->addAddress('@gmail.com');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($email, $name);
  //  $mail->addCC('cc@example.com');
  //  $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Consulta web: '.$_POST['name']." - Tel: ".$_POST['telefono'];
    $mail->Body    = $mensaje;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header("location:greet.php");

 


}

?>