<?php
/**
 * Template Name: Couples Trust Template
 */
 ?>

<?php get_header(); ?>

<div class="sections-contain">
	<ul>
	<li class="active" data-part="part-1">Tell Us About Yourselves</li>
	<li data-part="part-2">Tell Us About Your Embryos</li>
	<li data-part="part-3">Tell Us How You Would Like to Structure Your Embryo Trust</li>
	<li data-part="part-4">Maintenance and Disposition Upon Death</li>
  <li data-part="part-5">Maintenance and Disposition Upon Divorce</li>
	<li data-part="part-6">Final</li>
	</ul>
</div>

	<p class="error">Please fill out all required fields.</p>

<form method="post" action="/trust-submission" style="text-align: center;">
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
            <input id="radio-1" class="radio-custom" name="answer3" type="radio" value="Married">
            <label for="radio-1" class="radio-custom-label">Married</label>

            <input id="radio-2" class="radio-custom" name="answer3" type="radio" value="Unmarried">
            <label for="radio-2" class="radio-custom-label">Unmarried</label>
</div>

<div class="question-contain" id="question4">
<p>E-mail Address</p>
<input class="answer-input" name="answer4"><br>
</div>

<div class="question-contain" id="question5">
<p>Phone Number</p>
<input class="answer-input" name="answer5"><br>
</div>

<button type="button" id="part-one-btn" class="next-btn">Next ⟶</button>
	</div>

		<div id="part-2" class="part-contain" style="display:none;">
<div class="question-contain" id="question6">
<p>How many embryos are currently in storage?</p>
<input class="answer-input" name="answer6"><br>
</div>

<div class="question-contain" id="question7">
<p>Name and location of storage facility <span class="hint" title="This helps us notify the facility about your Trust to make sure that your wishes are honored.">?</span></p>
<input class="answer-input" name="answer7"><br>
</div>

<div class="question-contain" id="question8">
<p>Were donor gametes (either egg or sperm) used to create the embryos?</p>
            <input id="radio-3" class="radio-custom" name="answer8" type="radio" value="Yes">
            <label for="radio-3" class="radio-custom-label">Yes</label>

            <input id="radio-4" class="radio-custom" name="answer8" type="radio" value="No">
            <label for="radio-4" class="radio-custom-label">No</label>
</div>

<div class="question-contain" id="question9">
<p>If yes, please specify:</p>
<input class="answer-input optional" name="answer9"><br>
</div>


<div class="question-contain" id="question10">
<p>Do you plan to store additional embryos in the future?</p>
            <input id="radio-5" class="radio-custom" name="answer10" type="radio" value="Yes">
            <label for="radio-5" class="radio-custom-label">Yes</label>

            <input id="radio-6" class="radio-custom" name="answer10" type="radio" value="No">
            <label for="radio-6" class="radio-custom-label">No</label>

            <input id="radio-7" class="radio-custom" name="answer10" type="radio" value="Uncertain">
            <label for="radio-7" class="radio-custom-label">Uncertain</label>
</div>


<button type="button" id="part-two-btn" class="next-btn">Next ⟶</button>
	</div>

		<div id="part-3" class="part-contain" style="display:none;">
			<p class="explainer" style="color:dimgray;text-align: left;">As Co-Trustees of your Embryo Trust, you maintain joint control over maintenance and disposition of your embryos while living.   The provisions of the trust may be amended at any time if both Trustees agree to the amendment in writing.</p>

<div class="question-contain" id="question11">
<p>Do you agree to serve as Co-Trustees during your lifetime?</p>
            <input id="radio-8" class="radio-custom" name="answer11" type="radio" value="Yes">
            <label for="radio-8" class="radio-custom-label">Yes</label>

            <input id="radio-9" class="radio-custom" name="answer11" type="radio" value="No">
            <label for="radio-9" class="radio-custom-label">No</label>
</div>


<div class="question-contain" id="question12">
<p>If no, please name the partner who will serve as sole Trustee:</p>
<input class="answer-input optional" name="answer12"><br>
</div>


<div class="question-contain" id="question12-2">
<p>If you would rather name a Trustee other than yourselves to serve while you are living, please state the name, address, and phone number of named Trustee.</p>
<input class="answer-input optional" name="answer12-2"><br>
</div>


<button type="button" id="part-three-btn" class="next-btn">Next ⟶</button>
	</div>


<div id="part-4" class="part-contain" style="display:none;">


<div class="question-contain" id="question13">
			<p>Upon the death of one Trustee, the surviving Trustee may continue to serve as Trustee. Please list the name, address, and phone number of your chosen Successor Trustee. (other than yourselves)</p>
			<textarea class="answer-input optional" name="answer13"></textarea><br>
			<p class="explainer" style="color:dimgray;text-align: left;">In the event an independent Trustee is serving at the death of the last partner, the independent Trustee may continue to serve unless a different Trustee is specified.</p>
</div>



<p style="font-size:1em">Upon the death of the surviving partner, please state your wishes with regard to your embryos:</p>
<!-- Option 1 -->
<div class="question-contain option-contain" id="question14">
			<p class="option-title"><strong>Option One</strong></p>
	        <input id="radio-option" class="radio-custom option" name="option-select" type="radio" value="My embryos shall remain cryopreserved after my death">
            <label for="radio-option" class="radio-custom-label option">Our embryos shall remain cryopreserved after our deaths.</label>
            <input id="radio-10" class="radio-custom sub-option" name="answer14" type="radio" value="Indefinitely" disabled>
            <label for="radio-10" class="radio-custom-label disabled">Indefinitely</label>
             <input id="radio-11" class="radio-custom sub-option" name="answer14" type="radio" value="Number of Years" disabled>
            <label for="radio-11" class="radio-custom-label disabled">Number of Years</label>

            <p class="disabled">How many years?</p>
            <input class="answer-input optional" name="answer15" disabled><br>

            <p class="disabled">After the specified number of years have passed, we direct our Trustee to dispose, distribute, or donate our embryos in accordance with the following:</p>
            <textarea class="answer-input optional" name="answer16" disabled></textarea><br>
</div>
<hr>
<!--Option 2 -->
<div class="question-contain option-contain" id="question15">
			<p class="option-title"><strong>Option Two</strong></p>
	        <input id="radio-option-2" class="radio-custom option" name="option-select" type="radio" value="Upon my death, I authorize the Trustee to act in accordance with the following" required>
            <label for="radio-option-2" class="radio-custom-label option">Upon the death of the surviving partner, we authorize the acting Trustee to act in accordance with the following</label>

            <input id="radio-12" class="radio-custom sub-option" name="answer17" value="Dispose of all embryos in accordance with the policies and procedures of the storage facility in effect at that time." type="radio" disabled>
            <label for="radio-12" class="radio-custom-label disabled">Dispose of all embryos in accordance with the policies and procedures of the storage facility in effect at that time.</label>
             <input id="radio-13" class="radio-custom sub-option" name="answer17" type="radio" value="Donate all embryos to a scientific or educational institution." disabled>
            <label for="radio-13" class="radio-custom-label disabled">Donate all embryos to a scientific or educational institution.</label>

            <p class="disabled">Please list any specific scientific or educational institutions:</p>
            <input class="answer-input optional" name="answer18" disabled><br>

            <p class="disabled">Donate some or all embryos to one or more infertile donees, at the discretion of the

Trustee, for use in achieving pregnancy.</p>
            <input class="answer-input optional" name="answer19" disabled><br>

            <p class="disabled">Transfer ownership of all embryos to the following person(s) described below:</p>
            <textarea class="answer-input optional" name="answer20" disabled></textarea><br>
</div>
	<hr>
<!--Option 3 -->
<div class="question-contain option-contain" id="question16">
			<p class="option-title"><strong>Option Three</strong></p>
	        <input id="radio-option-3" class="radio-custom option" name="option-select" type="radio" value="My embryos shall remain in storage until the occurrence of a certain event described below. At that time, I direct the Trustee to dispose, distribute, or donate my embryo in accordance with the following:">
            <label for="radio-option-3" class="radio-custom-label option">Our embryos shall remain in storage until the occurrence of a certain event described below. At that time, we direct the Trustee to dispose, distribute, or donate my embryo in accordance with the following:</label>

            <textarea class="answer-input" name="answer21" disabled></textarea><br>


            <p>In the event one or more living children enjoy an ownership interest in your embryos after your deaths, please check the box below if you do not intend that such child or children personally use the embryos to achieve pregnancy:</p>
<!--
            <input id="radio-14" class="radio-custom sub-option" name="answer22" type="radio" value="I authorize my child or children to utilize my embryos for the purpose of achieving pregnancy after my death." disabled>
            <label for="radio-14" class="radio-custom-label disabled">We authorize our child or children to utilize our embryos for the purpose of achieving pregnancy after our deaths.</label>

             <input id="radio-15" class="radio-custom sub-option" name="answer22" type="radio" value="I authorize my child or children to donate or dispose of my embryos after my death, but do not wish that such child or children attempt pregnancy using my embryos." disabled>
            <label for="radio-15" class="radio-custom-label disabled">We authorize our child or children to donate or dispose of our embryos after our deaths, but do not wish that such child or children attempt pregnancy using our embryos.</label>
-->
<input id="radio-15" class="radio-custom sub-option" name="answer22" type="radio" value="We do not wish that our child or children attempt to achieve pregnancy using our embryos." disabled>
<label for="radio-15" class="radio-custom-label disabled">We do not wish that our child or children attempt to achieve pregnancy using our embryos.</label>

</div>

<button type="button" id="part-four-btn" class="next-btn">Next ⟶</button>
	</div>

  <div id="part-5" class="part-contain optional" style="display:none;">
  <div class="question-contain" id="question18">
        <p class="explainer" style="color:dimgray;text-align: left;">If unmarried, please disregard this section.</p>
        <p>If either spouse should initiate a divorce proceeding in court, please specify the name, address, and phone number of the person(s) who shall serve as Trustee upon the finalization of the divorce:</p>
        <textarea class="answer-input optional" name="answer26"></textarea>
        <p><strong>We agree that the final divorce decree shall reflect the following:</strong></p>

                    <input id="radio-16" class="radio-custom optional" name="answer24" type="radio" value="All embryos shall become the property of [Spouse] at the time the divorce is finalized, and such ownership shall be reflected in the final divorce decree.">
                    <label for="radio-16" class="radio-custom-label">All embryos shall become the property of <input class="answer-input optional" name="answer25"> at the time the divorce is finalized, and such ownership shall be reflected in the final divorce decree.</label>

                    <input id="radio-17" class="radio-custom optional" name="answer24" type="radio" value="All embryos shall be destroyed at the time the divorce is finalized.">
                    <label for="radio-17" class="radio-custom-label">All embryos shall be destroyed at the time the divorce is finalized.</label>

                    <input id="radio-18" class="radio-custom optional" name="answer24" type="radio" value="All embryos shall be donated to one or more infertile donees, as jointly agreed upon by both spouses, within six (6) months of the final divorce decree. In the event both spouses are unable to agree, we authorize the Trustee to use its discretion in choosing such donees.">
                    <label for="radio-18" class="radio-custom-label">All embryos shall be donated to one or more infertile donees, as jointly agreed upon by both spouses, within six (6) months of the final divorce decree. In the event both spouses are unable to agree, we authorize the Trustee to use its discretion in choosing such donees.</label>

                    <input id="radio-19" class="radio-custom optional" name="answer24" type="radio" value="All embryos shall be donated to a scientific or educational institution for use in the advancement of scientific or educational endeavors.">
                    <label for="radio-19" class="radio-custom-label">All embryos shall be donated to a scientific or educational institution for use in the advancement of scientific or educational endeavors.</label>

  </div>
  <!-- Option 1 -->


  <button type="button" id="part-five-btn" class="next-btn">Next ⟶</button>
  </div>

<div id="part-6" class="part-contain" style="display:none;">
<div class="question-contain" id="question17">
<p>Storage Fees After Death</p>

<p style="color:dimgray;text-align: left;margin-bottom:1.5em;">In the event our embryos are to remain cryopreserved after our deaths, we authorize the personal

representative of our estate to distribute to the Embryo Preservation Trust a certain amount of liquid

assets, as determined by the Trustee to the best of his or her ability, for the sole purpose of payment of

storage fees during the term we have specified.</p>


<!--Divorce section here -->


            <p>Additional Requests or Wishes:</p>
            <textarea class="answer-input optional" name="answer23"></textarea><br>

<button type="submit" class="next-btn">Submit</button>
	</div>
</div>


</form>

<div class="success-contain" style="display:none;">
	<p>Form submitted!</p>

</div>



<?php get_footer(); ?>
