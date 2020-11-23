<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
<?php
    require_once("connection.php");
	$strSQL = "SELECT * FROM user WHERE username = '".trim($_POST['username'])."' 
	OR email = '".trim($_POST['email'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Not Found Username or Email!";
	}
	else
	{
			echo "Your password send successful.<br>Send to mail : ".$objResult["email"];		

			$strTo = $objResult["email"];
			$strSubject = "Your Account information username and password.";
			$strHeader = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
			$strHeader .= "From: webmaster@thaicreate.com\nReply-To: webmaster@thaicreate.com";
			$strMessage = "";
			$strMessage .= "Welcome : ".$objResult["Name"]."<br>";
			$strMessage .= "Username : ".$objResult["Username"]."<br>";
			$strMessage .= "Password : ".$objResult["Password"]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "ThaiCreate.Com<br>";
			$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader); 

	}
	mysql_close();
?>
</body>
</html>