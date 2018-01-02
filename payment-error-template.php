<?php
/**
 * Template Name: Payment Processing Template
 */
 ?>

<?php get_header(); ?>

<?php
      session_start();
      echo $_SESSION['error'];

      session_unset(); 
      session_destroy();
?>

<?php get_footer(); ?>
