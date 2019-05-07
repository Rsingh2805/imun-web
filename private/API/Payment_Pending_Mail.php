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
			$subject = "Only 3 days Left for Payments Deadline"; 
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
			<h3 style = "text-align:center">PAYMENT DEADLINE</h3>
			<tr><td><p style = "text-align:justify;color:black;font-size:13px;"> Dear<b> ';
			$message .= $username;
			$message .= ',</b></p></td></tr>
			<tr>
				<td>
					<p style = "text-align:justify;color:black;font-size:13px;">

						Congratulations on your selection in Final Round registrations of International MUN 2019 Cairo, Egypt.
<br><br>


Please note only <b>3 days</b> are left for your payment deadline.  You can pay the delegate fee at  <b>April 14th, 2019.</b> 

<br><br>
You can pay the delegate fee by Direct Bank Transfer, via your debit or credit card. Please check 2nd page of your acceptance letter for payment details.


<br><br>
For any questions or queries contact us at info@internationalmun.org / or through our Facebook page : https://www.facebook.com/internationalmun2018/ 

<br><br>

We do not want you to miss out on this excellent opportunity to be a part of IMUN 2019. Cairo, Egypt awaits you, youth leaders !
					  </a>

				</td>
			</tr>
				<tr>
					<td>
                    See you in Cairo !
						<br><br>
                         Sincerely,<br>
						IMUN Organising Committee </p>
				</td>
			</tr>
			<tr>
				<td>
				<p style = "text-align:center">Please ignore if already paid<p>
				<p style = "text-align:center;color:black;font-size:14px;">Sent by <b>International Model United Nations</b></p></td>
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
			//$sql = mysqli_query($connection, "UPDATE `registered` SET `pending_payment_email`='sent' WHERE registered_user_id='".$id."'"); 
				$sql = mysqli_query($connection, "UPDATE `DecHanoiApp` SET `pending_payment_mail`='sent mail' WHERE user_id='".$id."'");

			}
		}
	}
	print $count." Email sent successfully";
}

?>