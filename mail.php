<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

require_once 'filePass.php';

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  $name = test_input( $_POST['name']);
  $email =test_input($_POST['email']);
  $message = test_input($_POST['message']);

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->SMTPAuth = true;
    $mail->Username = 'duvinagechristopher1@gmail.com'; // Gmail adresse pour SMTP server
    $mail->Password = $password; // MDP Gmail
    $mail->SMTPSecure = 'tsl';
    $mail->Port = '587';

    //important!!!!
    $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
      )
  );
//  

    $mail->setFrom('duvinagechristopher1@gmail.com'); // = STMP username
    $mail->addAddress('duvinagechristopher1@gmail.com'); // Email de réception (peut etre celle du STMP)

    $mail->isHTML(true);
    $mail->Subject = 'CV en ligne DUVINAGE Christopher';
    $mail->Body = "<h3>Identité => $name </h3> 
                  <br> <h5>Mail => $email</h5>
                  <br> <p>Message => $message</p>";

    $mail->send();
    
  } catch (Exception $e){
    echo $e->getMessage();
    echo $e->getCode();
  }
}
}
?>
      