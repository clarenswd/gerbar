<?php
function formOne(){
	$to = 'info@gerardsbar.com.au';
	//$to = 'wl@wlin.co';
	$subject = "New Message from website";
	$message = "";
	$headers = 'From: website@gerardsbar.com.au' . "\r\n" .
		'Bcc: will@lifeware.com.au' . "\r\n".
		'Reply-To: '.$_GET['email']. "\r\n" .
		'X-Mailer: PHP/' . phpversion();
	$output = '';
	foreach ($_GET as $key => $value) {
		$output .= $key . ': ' . $value . "\r\n";
		
	}
	mail($to, $subject, $output, $headers);
	echo 'Message Sent!';
}

//Check the Post variable to verify which form should be processed.
if(in_array($_GET['function'], array('formOne'))){
	//Call the appropriate function associated
	//with the form post
	$_GET['function']();
}else{
	echo 'ERROR: The Form Post was not captured!';
}

?>
