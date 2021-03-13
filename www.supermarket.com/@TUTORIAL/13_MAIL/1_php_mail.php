<?php 
$to = "nirjhor.anjum@gmail.com, mr.nirjhor@gmail.com";
$subject = "HTML Email Testing";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>Nirjhor</td>
<td>Anjum</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <saeed@nirjhor.net>' . "\r\n";
$headers .= 'Cc: superbnexus@gmail.com' . "\r\n";

mail($to, $subject, $message, $headers);
?>