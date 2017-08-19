<?php

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$email =$_POST['email'];
$jasa =$_POST['jasa'];
$name =$_POST['name'];
$message=$_POST['message'];
if(!isset($email)){
	$email="";
}

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'albertantonio88@gmail.com';                 // SMTP username
$mail->Password = 'Assasinz88';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

// $mail->SMTPDebug = 1;

$mail->setFrom('from@example.com', 'Web DVM');
$mail->addAddress('albertantonio88@gmail.com', 'Albert Antonio');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($email, $name);

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Ada yang tertarik dengan DVM!';
$mail->Body    = 'Ada yang tertarik dengan jasa <ul> ';
foreach($jasa as $jasa_i){
	$mail->Body = $mail->Body."<li>".$jasa_i."</li>";
}
$mail->Body = $mail->Body.' </ul><br>Atas nama: '.$name.'. <br><br> Segera hubungi dia! Berikut yang dia sampaikan:<br><br><br>'.$message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

// header("Location: index.php");

?>