<?php

require("_mc.php");

use \DrewM\MailChimp\MailChimp;

$MailChimp = new MailChimp('ff14f0f09d36eb334e4968487e36bc9c-us11');
$result = $MailChimp->post('lists/b3e4b41b5f/members', array(
                'email_address'     => $_POST["email"],
                'location'          => $_POST["location"],
                'status'            => 'subscribed'
            ));

if($result){
	$status = $result["status"];

	if($status == "subscribed"){
		echo "Great! We will keep you updated on our progress.";
	}
	else{
		echo "Oops! Something went wrong. Please try again.";
	}
}


?>
