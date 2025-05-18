<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$email_subject = $_POST['subject'];
$message = $_POST['message'];

// Message
$email_body = "
<html>
	<head>
		<title>Nova Mensagem</title>
	</head>
	<body>
		<h1>Nova Mensagem</h1>
		<hr>
		<p>Você recebeu uma nova mensagem vinda do website OneFactory</p>
		<hr>
		<p>Nome: $name</p>
		<p>E-mail: $visitor_email</p>
		<p>Assunto: $email_subject</p>
		<p>Mensagem:</p>
		<p><pre>$message</pre></p>
	</body>
</html>
";

$email_from = "webmaster@onefactory.com.br";
$to = "contato@onefactory.com.br";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Web Master <" . $email_from . "> \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

//Send the email!
mail($to,$email_subject,$email_body, $headers);

//done. redirect to thank-you page.
header('Location: thank-you.html');

// // Function to validate against any email injection attempts
// function IsInjected($str)
// {
//   $injections = array('(\n+)',
//               '(\r+)',
//               '(\t+)',
//               '(%0A+)',
//               '(%0D+)',
//               '(%08+)',
//               '(%09+)'
//               );
//   $inject = join('|', $injections);
//   $inject = "/$inject/i";
//   if(preg_match($inject,$str))
//     {
//     return true;
//   }
//   else
//     {
//     return false;
//   }
// }
   
?> 