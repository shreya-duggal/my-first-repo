<?php 

	require_once('init.php');
	Stripe::setApiKey('sk_test_IW4911XzDLoKPj0yD7FaC04T');
	$myCard = array('number' => '4242424242424242', 'exp_month' => 8, 'exp_year' => 2018);
	$charge = Stripe_Charge::create(array('card' => $myCard, 'amount' => 20, 'currency' => 'usd'));
	echo $charge;

?>
