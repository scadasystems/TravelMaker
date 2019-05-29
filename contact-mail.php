<?php
  // Import PHPMailer classes into the global namespace
  // These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  // Load Composer's autoloader
  require 'vendor/autoload.php';

  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  $name = $_POST['name'];
  $email = $_POST['email']
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'daelimproject0303@gmail.com';                     // SMTP username
    $mail->Password   = 'eofla!@#';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('daelimproject0303@gmail.com', 'TravelMaker');     // Add a recipient
43
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;


    $mail->send();
    echo '<script>alert("이메일을 성공적으로 보냈습니다.");</script>';
    echo '<script>window.location.href="contact.php";</script>';
  } catch (Exception $e) {
    echo '<script>alert("실패했습니다. 에러 이유: ");</script>'. $email->ErrorInfo;
  }
?>
