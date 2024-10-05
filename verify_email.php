<?php
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require 'load.php';

//Create an instance; passing `true` enables exceptions
//
$mail = new PHPMailer(true);
$verify = rand(100000, 999999);
if (isset($_POST['verify'])){
  if ($_POST['verify_user'] == $_POST['verify']){
  $DbConn->add_request($_POST["name"], $_POST["dates"], $_POST[ "email" ], $_POST["p_no"], $_POST["dates_no"], $_POST["desc"]);
  header("Location: index.php");
  exit;
  }
}
?> 
<div hidden>
<?php
try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'darrel.kariuki@strathmore.edu';                     //SMTP username
  $mail->Password   = 'vjcs loko qjsp xzgm';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('darrel.kariuki@strathmore.edu', 'Mailer');
  $mail->addAddress($_POST['email'], $_POST['name']);     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = "Verify your email for Second date update";
  $mail->Body    = "Here is your verification code: <b>$verify</b>";
  $mail->AltBody    = "Here is your verification code: $verify";

  $mail->send();

  
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
?> 
</div>
<?php
$ObjLayouts->head("Mars form");
$ObjForms->verify_form($_POST, $verify);
$ObjLayouts->foot();
?>
