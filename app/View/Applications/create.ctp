<div class="container" id="application">
  <div class="grid">
    <header class="unit span-grid">
		<img src="<?php echo $this->webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
		<h2>Apply for MHacks III</h2>
		<p class="instruction"><strong>MHacks III</strong> is using hackjunkie to handle registration and travel reimbursements. If you've used hackjunkie before, <a href="/login.html">sign in now.</a></p>
    </header>
	<form method="post" class="unit span-grid">
		<fieldset step-number="1" class="unit one-of-two">
			<h3>Who are you?</h3>
			<span class="unit span-grid">
		    	<input type="text" name="first_name" placeholder="First name"/>
			</span>
			<span class="unit span-grid">
		    	<input type="text" name="last_name" placeholder="Last name"/>
			</span>
			<span class="unit span-grid">
				<input type="text" name="school" placeholder="College or university name"/>
			</span>
			<span class="unit span-grid">
				<select name="grad-year">
					<option>Expected graduation</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
				</select>
			</span>
		</fieldset>
		<fieldset step-number="2" class="unit one-of-two">
			<h3>How can we contact you?</h3>
			<span class="unit span-grid">
				<input type="text" name="email" placeholder="School email (.edu)"/>
			</span>
			<span class="unit span-grid">
				<input type="text" name="phone" placeholder="Phone number"/>
			</span>
		</fieldset>
		<fieldset step-number="3" class="unit one-of-two">
			<h3>Where can we find your work?</h3>
			<span class="unit span-grid">
				<input type="text" name="github_url" placeholder="Github URL"/>
			</span>
			<span class="unit span-grid">
				<input type="text" name="linkedin_url" placeholder="LinkedIn URL"/>
			</span>
		</fieldset>
		<fieldset step-number="4" class="unit one-of-two">
			<h3>Where should reimbursements be sent?</h3>
			<span class="unit span-grid">
				<input type="text" name="address1" placeholder="Address"/>
			</span>
			<span class="unit span-grid">
				<input type="text" name="address2" placeholder="Address (second line)"/>
			</span>
			<span class="unit span-grid">
				<input type="text" name="city" placeholder="City"/>
			</span>
			<span class="unit span-grid">
				<select name="state">
					<option>State</option>
					<option>Alabama</option>
					<option>Arkansas</option>
				</select>
			</span>
			<span class="unit span-grid">
				<input type="text" name="zip" placeholder="Zip"/>
			</span>
		</fieldset>
		<a href="#" class="button" id="next-step">Continue</a>
		<input type="submit" value="Apply for MHacks III"/>
  	</form>

  </div>
</div>