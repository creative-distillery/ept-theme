<?php
/**
 * Template Name: Submission Single Template
 */
 ?>

 <?php
 include "../../../wp-load.php";
 include dirname(__DIR__) . '/stripe-php/init.php'; ?>
 <?php
 if($_POST){
 $name = $_POST["answer1"];
 $address = $_POST["answer2"];
 $marital = $_POST["answer3"];
 $email = $_POST["answer4"];
 $phone = $_POST["answer5"];

 $embryos = $_POST["answer6"];
 $facility = $_POST["answer7"];
 $gametes = $_POST["answer8"];
 $gametes_follow = $_POST["answer9"];
 $gametes_future = $_POST["answer10"];

 $trustee = $_POST["answer11"];
 $other_trustee = $_POST["answer12"];
 $upon_death = $_POST["answer13"];

 $option = $_POST["option-select"];

 if($_POST["option-select"] == "My embryos shall remain cryopreserved after my death"){
 	$option_content = 'Indefinitely or number of years? ' . $_POST["answer14"] . '<br />' . 'How many years? ' . $_POST["answer15"] . '<br />' . 'After the specified number of years have passed, I direct my Trustee to dispose, distribute, or donate my embryos in accordance with the following: ' . '<br />' . $_POST["answer16"];
 }
 else if($_POST["option-select"] == "Upon my death, I authorize the Trustee to act in accordance with the following")
 {
 	$option_content = $_POST["answer17"] . '<br />' . 'Any specific scientific or educational institutions: ' . $_POST["answer18"] . '<br />' . 'Donate some or all embryos to one or more infertile donees, at the discretion of the Trustee, for use in achieving pregnancy. ' . $_POST["answer19"] . '<br />' . 'Transfer ownership of all embryos to the following person(s) described below:' . $_POST["answer20"];
 }
 else
 {
 	$option_content = $_POST["answer21"] . '<br />' .  'In the event one or more living children enjoy an ownership interest in your embryos after your deaths, please state your wishes regarding whether such child or children may personally use the embryos to achieve pregnancy, or whether your embryos are to be maintained in storage or donated to an infertile patient for future use. ' . $_POST["answer22"] . '<br />';
 }

 $additional = $_POST["answer23"];


 $to = 'apittman@embryotrust.com';
 $subject = 'Getting Started Submission: ' . $name;
 $body = '<span style="color:dimgray">Name:</span> ' . $name . '<br /><br />' .
 		'<span style="color:dimgray">Address:</span> ' . $address . '<br /><br />' .
 		'<span style="color:dimgray">Marital Status:</span> ' . $marital . '<br /><br />' .
 		'<span style="color:dimgray">Email:</span> ' . $email . '<br /><br />' .
 		'<span style="color:dimgray">Phone:</span> ' . $phone . '<br /><br />' .
 		'<span style="color:dimgray">How many embryos currently in storage?:</span> ' . $embryos . '<br /><br />' .
 		'<span style="color:dimgray">Name and location of storage facility:</span> ' . $facility . '<br /><br />' .
 		'<span style="color:dimgray">Were donor gametes (either egg or sperm) used to create the embryos?:</span> ' . $gametes . '<br /><br />' .
 		'<span style="color:dimgray">If yes, please specify:</span> ' . $gametes_follow . '<br /><br />' .
 		'<span style="color:dimgray">Do you plan to store additional embryos in the future?</span> ' . $gametes_future . '<br /><br />' .
 		'<span style="color:dimgray">Do you agree to serve as Trustee during your lifetime?</span> ' . $trustee . '<br /><br />' .
 		'<span style="color:dimgray">If you would rather name a Trustee other than yourself to serve while you are living, please state the name address and phone number of named Trustee:</span> ' . $other_trustee . '<br /><br />' .
 		'<span style="color:dimgray">Upon your death, you may name a Successor Trustee to maintain and/or dispose of your embryos in accordance with your wishes. Please list the name, address, and phone number of your chosen Successor Trustee:</span> ' . $upon_death . '<br /><br />' .
 		'<span style="color:dimgray">Option:</span> ' . $option . '<br /><br />' .
 		$option_content . '<br /><br />' . $additional;

 $headers = array('Content-Type: text/html; charset=UTF-8');

 wp_mail( $to, $subject, $body, $headers );
 }
 ?>

 <?php get_header(); ?>
 <?php if($_POST){ ?>
 <div class="entry-content">
 	<p>Thank you for completing the questionnaire.</p>
 	<p>I will draft your trust in accordance with your wishes and submit it to you for review. At that time, we can customize any specific points via phone or email. <br> You will receive your trust document by email or postal mail, at your option, along with detailed instructions regarding the proper execution and maintenance of your trust.</p>
 </div>
 <?php } else{ ?> <div class="entry-content"><p>Uh-oh! Something went wrong!</p></div><?php } ?>
 <?php get_footer(); ?>
