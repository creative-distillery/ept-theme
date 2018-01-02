<?php
include "../../../wp-load.php";
	 if($_POST){
	 include dirname(__DIR__) . '/stripe-php/init.php';

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_4j4fVuQUb518lzBpieDs3sx7");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create a charge: this will charge the user's card
try {
  $charge = \Stripe\Charge::create(array(
    "amount" => 75000, // Amount in cents
    "currency" => "usd",
    "source" => $token,
    "description" => "Trust Purchase"
    ));
    $name = $_POST["answer1"];
		$address = $_POST["answer2"];
		$marital = $_POST["answer3"];
		$email = $_POST["answer4"];
		$phone = $_POST["answer5"];

		$to = 'rohit@creativedistillery.com';
		$subject = 'Getting Started Submission: ' . $name;
		$body = '<span style="color:dimgray">Name:</span> ' . $name . '<br /><br />' .
		'<span style="color:dimgray">Address:</span> ' . $address . '<br /><br />' .
		'<span style="color:dimgray">Marital Status:</span> ' . $marital . '<br /><br />' .
		'<span style="color:dimgray">Email:</span> ' . $email . '<br /><br />' .
		'<span style="color:dimgray">Phone:</span> ' . $phone . '<br /><br />';

$headers = array('Content-Type: text/html; charset=UTF-8');
wp_mail( $to, $subject, $body, $headers );
session_start();
$_SESSION['email'] = $email;
$_SESSION['answer3'] = $marital;
header( 'Location: https://www.embryotrust.com/confirmation' ) ;
} catch(\Stripe\Error\Card $e) {

session_start();
$_SESSION['error'] = "<p class='card-error'>" . $e->getMessage() . "<br/>The payment did not go through. Click <a href='http://embryotrust.com/get-started/'>here</a> to return to the form.</p>";
header( 'Location: https://www.embryotrust.com/payment-error') ;
}

?>

<?php




}
?>
