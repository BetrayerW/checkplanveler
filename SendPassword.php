<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
<?php
	require_once("connection.php");
	$strSQL = "SELECT * FROM user WHERE username = '".trim($_POST['username'])."' 
	OR email = '".trim($_POST['email'])."' ";
	$objQuery = mysqli_query($strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
             echo "<script>alert('Not found Username and Email');</script>";
             echo "<script>window.history.back()</script>";
	}
	else
	{
			echo "Your password send successful.<br>Send to mail : ".$_POST["email"];		

			$strTo = $objResult["email"];
			$strSubject = "Your Account information username and password.";
			$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
			$strHeader .= "From: webmaster@thaicreate.com\nReply-To: webmaster@thaicreate.com";
			$strMessage = "";
			$strMessage .= "Welcome : ".$objResult["firstname"]."<br>";
			$strMessage .= "Username : ".$objResult["username"]."<br>";
			$strMessage .= "Password : ".$objResult["password"]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "ThaiCreate.Com<br>";
			$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader); 

	}
	mysql_close($link_identifier = null);
?>
</body>
</html>