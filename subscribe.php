<?php

  require("_mc.php");

  use \DrewM\MailChimp\MailChimp;

  $MailChimp = new MailChimp('7d446f0db3c6f9e4b5f9b6f35a587fad-us10');
  $result = $MailChimp->post('lists/02801ed82a/members', array(
    'email_address'     => $_POST['emailAdd'],
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
