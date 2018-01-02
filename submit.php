<?php include '../../../../wp-load.php'; ?>
<?php
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
    "amount" => 1000, // Amount in cents
    "currency" => "usd",
    "source" => $token,
    "description" => "Example charge"
    ));
} catch(\Stripe\Error\Card $e) {
  echo '<p style="font-family: "mr-eaves-xl-sans-narrow",sans-serif; color:purple; margin: 0 auto;
    text-align: left;
    transition: 0.5s color;
    font-size: 1.8em;">card error</p>';
}

?>

<?php

$name = $_POST["answer1"];
$address = $_POST["answer2"];
$marital = $_POST["answer3"];
$email = $_POST["answer4"];
$phone = $_POST["answer5"];






$to = 'apittman@embryotrust.com';
$subject = 'Getting Started Submission: ' . $name;
$body = '<span style="color:dimgray">Name:</span> ' . $name . '<br /><br />' .
		'<span style="color:dimgray">Address:</span> ' . $address . '<br /><br />' .
		'<span style="color:dimgray">Marital Status:</span> ' . $marital . '<br /><br />' .
		'<span style="color:dimgray">Email:</span> ' . $email . '<br /><br />' .
		'<span style="color:dimgray">Phone:</span> ' . $phone . '<br /><br />';

$headers = array('Content-Type: text/html; charset=UTF-8');

wp_mail( $to, $subject, $body, $headers );


}
?>
