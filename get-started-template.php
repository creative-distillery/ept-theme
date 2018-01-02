<?php
/**
 * Template Name: Get Started Template
 */
 ?>


<?php get_header(); ?>
<div class="container">
  <h1 class="entry-title no-hero">Begin Your Trust</h1>
<div class="row">

  <div class="seven columns">
<div class="entry-content">


<h2>How This Works</h2>
<p>The Embryo Trust is a legal document created by Ashley W. Pittman, PLLC. The cost for this service is $750.00.</o>

<p><span style="color:#b72e95;">1.</span> Complete the questionnaire below and submit payment.</p>

<p><span style="color:#b72e95;">2.</span> You'll receive an email with a link to a more detailed questionnaire to complete by yourself or with your partner.</p>

<p><span style="color:#b72e95;">3.</span> I will draft your trust in accordance with your wishes and submit it to you for review.  At that time, we can customize any specific points via phone or email.</p>

<p><span style="color:#b72e95;">4.</span> You will receive your trust document by email or postal mail, at your option, along with detailed instructions regarding the proper execution and maintenance of your trust.</p>

	<p class="error">Please fill out all required fields.</p>
</div>
</div>
<div class="five columns">
  <div class="entry-content">
<form id="payment-form" method="post" action="https://embryotrust.com/wp-content/themes/ept/processing.php" style="text-align: center;">
  <h2>Get Started Now</h2>
	<div id="part-1" class="part-contain" style="display:block;">
<div class="question-contain" id="question1">
<p>Name</p>
<input class="answer-input" name="answer1"><br>
</div>

<div class="question-contain" id="question2">
<p>Address</p>
<input class="answer-input" name="answer2"><br>
</div>

<div class="question-contain" id="question3">
            <input id="radio-1" class="radio-custom" name="answer3" type="radio" value="Single">
            <label for="radio-1" class="radio-custom-label">Single</label>

            <input id="radio-2" class="radio-custom" name="answer3" type="radio" value="Couple">
            <label for="radio-2" class="radio-custom-label">Couple</label>
</div>

<div class="question-contain" id="question4">
<p>E-mail Address</p>
<input class="answer-input" name="answer4"><br>
</div>

<div class="question-contain" id="question5">
<p>Phone Number</p>
<input class="answer-input" name="answer5"><br>
</div>



<div class="payment-contain">
  <p style="color:#b72e95;text-shadow:none;margin:1em auto;text-align:left;">The cost of the Trust is $750.00. All form fields are required. You’ll receive further instructions at the email address you provide.</p>
      <span  class='payment-errors'></span>
      <div class="question-contain">
	      <p>Card Number</p>
      	<input class="payment answer-input" data-stripe="number"/>
      </div>
      <div class="question-contain">
	      <p>CVC/CVV</p>
      <input class="payment answer-input" data-stripe="cvc"/>
      </div>
      <div class="question-contain">
	      <p>Expiration</p>
      <input class="payment answer-input" placeholder="mm" data-stripe="exp-month"/>
      </div>
      <div class="question-contain">
      <input class="payment answer-input" placeholder="yyyy" data-stripe="exp-year"/>
      </div>
</div>
<button type="submit" id="" class="submit">Submit</button>
	</div>


</form>
</div>
</div>
</div>
</div>
<div class="success-contain" style="display:none;">
	<p>Form submitted!</p>

</div>




<!--
  <form action="" method="POST" id="payment-form">
      <span class='payment-errors'></span>
      <input data-stripe="number"/>
      <input data-stripe="cvc"/>
      <input data-stripe="exp-month"/>
      <input data-stripe="exp-year"/>
      <button type="submit">Submit Payment</button>
  </form>
-->

<?php get_footer(); ?>
