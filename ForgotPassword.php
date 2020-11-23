<?php
session_start();
include_once("connection.php");
if(isset($_POST['submit']))
{
    $user_id = $_POST['username'];
    $result = mysqli_query($conn,"SELECT * FROM user where username='" . $_POST['username'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['username'];
	$email_id=$row['useremail'];
	$password=$row['userpassword'];
	if($username==$fetch_username) {
				$to = $useremail;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: planveler@gmail.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>username:</td><td><input type='text' name='usernaeme'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>