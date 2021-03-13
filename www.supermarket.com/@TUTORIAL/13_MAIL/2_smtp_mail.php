<?php
/*
	JUST INCLUDE THIS FUNCTION IN YOUR PROJECT / DON'T EDIT ANYTHING HERE
*/

function smtpMail($mailConfig, $mailDetails, $mailReceiver)
{
	require_once 'smtpMail/swift_required.php';

	# AUTHENTICATION
	$transport = Swift_SmtpTransport::newInstance($mailConfig['host'], $mailConfig['port'])
	  ->setUsername($mailConfig['email'])
	  ->setPassword($mailConfig['pass'])
	;
	
	# CONNECTION
	$mailer = Swift_Mailer::newInstance($transport);
	
	# PREPARING THE MAIL
	$fullMessage = Swift_Message::newInstance($mailDetails['title'])
	  ->setFrom(array($mailConfig['email'] => $mailConfig['name']))
	  ->setTo($mailReceiver)
	  ->setContentType($mailConfig['type'])
	  ->setBody($mailDetails['body']);
	  #->attach(Swift_Attachment::fromPath($mailDetails['attachment']));
	  
	# SENDING THE MAIL
	$result = $mailer->send($fullMessage);
}

/*
	YOU HAVE TO EDIT THE BELOW LINES ONLY
*/

	# CONFIGURE THE MAIL SETTINGS / CHECKING FROM YOUR cPANEL
	$mailConfig['host'] = "mail.abc.com";
	$mailConfig['port'] = 25;
	$mailConfig['name'] = "PIIT Web Batch 8";
	$mailConfig['email'] = "noreply@abc.com";
	$mailConfig['pass'] = "abc123";
	$mailConfig['type'] = "text/html"; // "text/html";
	
	# PREPARE YOUR MAIL
	$mailDetails['title'] = "Password Reset Mail | SuperMarket.com";
	$mailDetails['body'] = "Dear User,".PHP_EOL.PHP_EOL."Welcome to ..., the ... for you.".PHP_EOL.PHP_EOL."Here goes your ... Details:.".PHP_EOL.PHP_EOL."Login Link: " . "" .PHP_EOL. "Username: " . "PHP User Variable" .PHP_EOL. "Password: " . "PHP Pass Variable" . PHP_EOL.PHP_EOL. "Please remember this user login details for further use." .PHP_EOL.PHP_EOL. "Please do not share your Username or Password with anyone else." .PHP_EOL.PHP_EOL. "For any kind of issue related to ... please mail at: ... ." .PHP_EOL.PHP_EOL. "... ." .PHP_EOL. "... .";
	#$mailDetails['attachment'] = "http://motaleb.net/CV_Motaleb.docx";
	
	# PREPARE YOUR RECEIVERS
	$mailReceiver = array('nirjhor.anjum@gmail.com', 'letoncse7@gmail.com');
	
	# SEND THE MAIL
	smtpMail($mailConfig, $mailDetails, $mailReceiver);

?>