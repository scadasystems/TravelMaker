<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  // Load Composer's autoloader
  require_once 'vendor/autoload.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = "From: ".$_POST['email'].'<b style="color: red">&nbsp;&nbsp;<- 클릭 후, 메일 보내기</b><br /><br/>메세지 내용: <br /><pre>'.$_POST['message']."</pre>";

  $mail = new PHPMailer(); // create a new object
  $mail->IsSMTP(); // enable SMTP
  $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
  $mail->SMTPAuth = true; // authentication enabled
  $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587; // or 587
  $mail->IsHTML(true);
  $mail->Username = "daelimproject0303@gmail.com";
  $mail->Password = "eofla!@#";
  $mail->SetFrom($_POST['email'], '=?UTF-8?B?'.base64_encode($name).'?=');
  $mail->Subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
  $mail->Body = $message;
  $mail->AddAddress("daelimproject0303@gmail.com");

   if(!$mail->Send()) {
      echo '<script>alert("실패했습니다. 에러 이유: ");</script>'. $email->ErrorInfo;
   } else {
     echo '<script>alert("이메일을 성공적으로 보냈습니다.");</script>';
     echo '<script>window.location.href="contact.php";</script>';
   }
?>
