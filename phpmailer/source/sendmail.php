<?php
/* ExeOutput for PHP sendmail sample
thanks to PHPMailer

http://www.exeoutput.com 
*/

require('vendor/autoload.php');  

print ("Sending email with PHP\n");
try
{

$mail = new PHPMailer();
$mail->IsSMTP();  // Telling the class to use SMTP  

$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls"; // or ssl: check your SMTP server configuration
$mail->Host     = "smtp.zoho.eu"; // SMTP server

$mail->Username = "youraccount"; // "The account"
$mail->Password = "yourpassword"; // "The password"
$mail->Port = 587; // "The port".
$mail->From = 'info@constman.fi'; 
$mail->addAddress('info@constman.fi', 'Name of your dest'); 
$mail->isHTML(true); // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//$mail->WordWrap = 100; // "The lenght of the text."  

if(!$mail->Send()) {
  print ("Error: message not sent\n");
  print ($mail->ErrorInfo."\n");
} else {
  print ("Success: message has been sent\n");
}
}
catch (Exception $e) {
	print 'Exception detected : '.$e->getMessage()."\n";   
}

?>