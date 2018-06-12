<?php



//mail('parvinder.s@iapptechnologies.com','ACP Cron RUN','CRON RUNNING');



date_default_timezone_set('Europe/Oslo');

 
$day = date("l");

if($day != "friday")
{
	//die("This Script run only on Friday");
}


 
$servername = "localhost1";
$username = "root"; 
$password = "a4968;sort=";
 
require_once('/var/www/html/stripe_test/stripe/init.php');
//\Stripe\Stripe::setApiKey('sk_test_cu3R6RHgLoJe2U0SQeUE2T1K');

\Stripe\Stripe::setApiKey('sk_test_5XxNn86eOm6h9lngQjUkFwuJ');

try {
$charges_data = \Stripe\Charge::retrieve('ch_1CZyADBcgCwSh35lC5MEqDBC');
if(isset($charges_data->balance_transaction))
{
	 
	$balance_transaction = \Stripe\BalanceTransaction::retrieve($charges_data->balance_transaction);
}

$current_balance = \Stripe\Balance::retrieve();
echo "<prE>"; print_R($charges_data); 
echo "<prE>"; print_R($balance_transaction); exit;
}

//catch exception
catch(Exception $e) {
echo $e->getMessage();
}

?>
 


		 