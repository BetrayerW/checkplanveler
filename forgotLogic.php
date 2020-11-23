<?php  
include_once("connection.php");  
  
$email=$_POST['email'];  
  
$rs=mysql_query("select email from user where email='$email' ");  
$row=mysql_fetch_array($rs);  
$count=mysql_num_rows($rs);  
  
if(!emptyempty($count)) {  
  
$newpass=rand(10000000,99999999);  // ทำการสุ่มสร้างรหัสใหม่   
$newpass_md5=md5($newpassword);  // แปลงเป็น md5 เพื่อบันทึกลงเบส

mysql_query("update user set password ='$newpassword_md5' where email='$email' ");  // บันทึกรหัสใหม่ลงฐานข้อมูล  
  
// ส่งรหัสใหม่ให้สมาชิกทางเมล  
  
$emailadmin="planveler@gmail.com";  // เมลคนส่ง    
$sendto=$email;    
            
        $mailheaders = "From: ".$emailadmin."\n";    
        $mailheaders .= "Content-type: text/html;charset=UTF-8\n";    
        $mailheaders .= "X-Priority: 1\n";    
        $mailheaders .= "Importance: High\n";    
        $mailheaders .= "X-MSMail-Priority: High\n";    
        $mailheaders .= "X-Mailer: Mailler With PHP!\n";    
    
        $mailsubject = "รหัสผ่านใหม่";    
            
        $body = "<html>    
        <body>";    
        $body .= "รหัสผ่านใหม่ของคุณคือ ".$newpassword;    
        $body .= "</body>";    
        $body .= "</html>";               
        mail($sendto, $mailsubject, $body, $mailheaders);    
  
} else {  
   echo "incorrect Email";  
  
}  
?>  