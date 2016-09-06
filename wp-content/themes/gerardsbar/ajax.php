<?php

require_once ('../../../env.php');
require_once ('vendor/autoload.php');
function checkLength ($parametro){
	if(strlen($parametro)>0){ return true; }
	return false;
}
function formOne(){
	$to = 'clarens@lifeware.com.au';
	$website_name = 'GerardsBar';
	$contact_names = $_GET['First_Name'] ." ".$_GET['Last_Name'] ;
	$c_email= $_GET['Email'];
	$enquiry = $_GET['Enquiry'];

	$from = 'website@gerardsbar.com.au';
	$generic_subject = "Contact Message from ".$website_name;

	$merge_vars_build = array(
		array(
			'name' => 'CWEBSITENAME',
			'content' => $website_name
		),
		array(
			'name' => 'CDETAILS',
			'content' => $contact_names
		),
		array(
			'name' => 'CEMAIL',
			'content' => $c_email
		),
		array(
			'name' => 'CMESSAGE' ,
			'content' => $enquiry
		),
	);



	//Specific to this site
	$extras  = "";



	if ($_GET['reservation'] == "true"){
		$extras .= "<h2 style='color:white!important;text-align: center'>Reservation Information</h2>";
		if( checkLength($_GET['Contact_Number']) ){
			$contact_number = 	array(
				'name' => 'CPHONENUMBER',
				'content'=>$_GET['Contact_Number']
			);
			array_push($merge_vars_build , $contact_number  );
		}
		//Additional info
		if( checkLength($_GET['Number_of_Guests']) ){
			$extras .= "<h4 style='color:#f7f7f7!important;'>Number of Guests:  <span style='color:white;font-weight: normal;'>".$_GET['Number_of_Guests']."</span></h4>";
		}
		if( checkLength($_GET['Reservation_Date']) ) {
			$extras .= "<h4 style='color:#f7f7f7!important;'>Reservation Date: <span style='color:white;font-weight: normal;'>".$_GET['Reservation_Date']."</span></h4>";
		}

		if( checkLength($_GET['Reservation_Time']) ) {
			$extras .= "<h4 style='color:#f7f7f7!important;'>Reservation Date: <span style='color:white;font-weight: normal;'>".$_GET['Reservation_Time']."</span></h4>";
		}
		if( checkLength($_GET['Reservation_Requests']) ) {
			$extras .= "<h4 style='color:#f7f7f7!important;'>Reservation Date: <span style='color:white;font-weight: normal;'>".$_GET['Reservation_Requests']."</span></h4>";
		}
	}


	if ($_GET['Subscribed'] == "true"){

		$extras .= "<h4 style='color:#f7f7f7!important;'>Subscription Requested:  <span style='color:white;font-weight: normal;'> YES</span></h4>";
	}

	/*check if $extras contains some characters*/
	if( checkLength($extras) ) {
		array_push($merge_vars_build , array('name'=> 'CEXTRAS', 'content'=>$extras));
	}

	try {
		$mandrill = new Mandrill(MANDRILL_KEY);
		$template_name = 'lifewarecontact';
		$template_content = array(
			array()
		);
		$message = array(
			'subject' => $generic_subject,
			'from_email' => $from,
			'from_name' => $website_name,
			'to' => array(
				array(
					'email' => $to,
					'name' => $website_name,
					'type' => 'to'
				)
			),
			'headers' => array('Reply-To' => 'message.reply@example.com'),
			'important' => false,
			'track_opens' => null,
			'track_clicks' => null,
			'auto_text' => null,
			'auto_html' => null,
			'inline_css' => null,
			'url_strip_qs' => null,
			'preserve_recipients' => null,
			'view_content_link' => null,
			'bcc_address' => 'clarens@lifeware.com.au',
			'tracking_domain' => null,
			'signing_domain' => null,
			'return_path_domain' => null,
			'merge' => true,
			'merge_language' => 'mailchimp',
			'global_merge_vars' => $merge_vars_build,
			'merge_vars' => array(),
			'attachments' => array(),
			'images' => array()
		);
		$async = false;
		$ip_pool = 'Main Pool';
		$send_at = '';
		$result = $mandrill->messages->sendTemplate($template_name, $template_content, $message, $async, $ip_pool, $send_at);
//		print_r($result);
		echo 'Message Sent!';

	} catch(Mandrill_Error $e) {

		echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();

		// A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
		throw $e;
	}




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
