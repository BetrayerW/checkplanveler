<?php
$mailto = "0904283767.aa@gmail.com";
$mailSub = "Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ";
$mailMsg = "
  Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ 
  มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่
";
 
require 'vendor\autoload.php';
$mail = new PHPMailer();
$mail->IsSmtp();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->CharSet="utf-8";
$mail->ContentType="text/html";
$mail->Username = "planveler@gmail.com"; //username gmail accound
$mail->Password = "planveler1234"; //password gmail accound
$mail->SetFrom("planveler@gmail.com", "Planveler Team");
// $mail->AddReplyTo("yourmail@gmail.com", "Company name");
$mail->Subject = $mailSub;
$mail ->Body = $mailMsg;
$mail ->AddAddress($mailto);
 
if(!$mail->Send()){
  echo "Mail Not Sent";
}
else{
  echo "Mail Sent";
}
?>