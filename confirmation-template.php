<?php
/**
 * Template Name: Confirmation Template
 */
 ?>

<?php get_header(); ?>

<?php

session_start();

if($_SESSION['answer3'] == 'Couple'){
  $link = 'http://embryotrust.com/couples-trust';
}
else if($_SESSION['answer3'] == 'Single'){
  $link = 'http://embryotrust.com/single-trust';
}
else{
  $link = '';
}



$to = $_SESSION['email'];
$subject = 'Your tailored trust';
$body = 'Your trust can be found at: ' . $link;
$headers = array('Content-Type: text/html; charset=UTF-8');
wp_mail( $to, $subject, $body, $headers );
echo '<p class="card-success">Your form has been submitted. A link to your tailored trust has been sent to the email you provided (' . $to . ').</p>';


?>

<?php get_footer(); ?>
