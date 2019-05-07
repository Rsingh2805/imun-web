<?php
require_once('db-config.php');


if(isset($_POST["id"])){
	$count = 0;
	foreach($_POST["id"] as $id){

		$count++;
		$query = "SELECT * FROM DecHanoiApp WHERE user_id ='$id'";
		$results = mysqli_query($connection, $query);
		while($row = mysqli_fetch_array($results)){
			$username = $row['full_name'];
			$to = $row['email']; 
			$from = "egypt@internationalmun.org"; 
			$subject = "IMUN 2019 Announcement"; 
			$message = '<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>
<style>
	body{
	font-family: Nunito, sans-serif;

	}
	p{
		text-align:justify;
		font-size:14px;
	}
	td{
	text-align:justify;
	font-size:14px;
	}

</style>
<body style = "background:#f9fafc;">
	<CENTER>
		<table cellspacing="0" style="background:white; width: 600px; height: 200px;border-top:4px solid #3a6fb7;padding:20px;">
			<tr>
				<img src = "http://www.internationalmun.org/images/Coloured.png" width="28%" style = "margin-left:auto;margin-right:auto;display:block;">
			</tr>
			<h3 style = "text-align:center;">IMUN 2019 Result</h3>
			<tr><td><p style = "text-align:justify;color:black;font-size:13px;"> Dear<b> ';
			$message .= $username;
			$message .= ',</b></p></td></tr>
			<tr>
				<td>
					<p style = "text-align:justify;color:black;font-size:13px;">
						Thank you for applying and showing your interest to attend IMUN 2019 in Cairo, Egypt.<br><br>

Based on your motivation letter, we are sorry to inform you that you didn\'t pass in joining International MUN 2019 in Cairo, Egypt because the selection process is highly competitive.<br>

However, you still have a chance to re-register yourself with a better motivation letter.
					</p>
				</td>
				</tr>
				<tr>
				<td>
				<CENTER>
<button style = "background:dodgerblue;color:white;border:2px solid dodgerblue;"><a href = "https://www.internationalmun.org/RegistrationForm.php" style = "color:white;">Re-Register here</a> </button>
</CENTER>
				</td>
			</tr>
			
			<tr>
			<p style = "text-align:justify;color:black;font-size:13px;">Thank you for dedicating your time and effort into this program. </p>
			
			<p>Kind regards,<br>Team IMUN</p>
			
			</tr>

			<tr>
				<td><p style = "text-align:center;color:black;font-size:14px;">Sent by <b>International Model United Nations</b></p></td>
			</tr>

		</table>

	</CENTER>
</body>
</html>' ;

			// a random hash will be necessary to send mixed content
			$separator = md5(time());

			// carriage return type (we use a PHP end of line constant)
			$eol = PHP_EOL;

			// main header
			$headers  = "From: International MUN <info@internationalmun.org>".$eol;
			$headers .= "MIME-Version: 1.0".$eol; 
			$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"";

			// no more headers after this, we start the body! //

			$body = "--".$separator.$eol;
			$body .= "Content-Transfer-Encoding: 7bit".$eol.$eol;


			// message
			$body .= "--".$separator.$eol;
			$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
			$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
			$body .= $message.$eol;

			// send message
			if(mail($to, $subject, $body, $headers)){
				//print "<p class='success'>Email Sent Successfully</p>";
				$sql = mysqli_query($connection, "UPDATE `DecHanoiApp` SET `rejected_mail`='sent' WHERE user_id='".$id."'");

			}
		}
	}
	print $count." Email sent successfully";
}
?>