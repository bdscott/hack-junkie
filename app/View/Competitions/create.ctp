<div class="container" id="competition-setup">
  <div class="grid">
    <header class="unit span-grid">
		<h2>Set up your competition</h2>
		<p class="instruction">Thanks for using hackjunkie to manage your event! We think you'll really enjoy using it. To get started, tell us a bit about how your hackathon is structured.</p>
    </header>
	<?php echo $this->Form->create('Competition', array('class' => 'unit span-grid')); ?>
	
	<fieldset class="unit one-of-two">
		<h3>Basic information</h3>
		<?php echo $this->Form->input('name', array('label' => false, 'placeholder' => 'Event Name')); ?>
		<?php echo $this->Form->input('city', array('label' => false, 'placeholder' => 'City')); ?>
		<select name="state">
			<option value="none">State</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>		
		</select>
	</fieldset>
	<fieldset class="unit one-of-two">
		<h3>Competition dates</h3>
		<?php echo $this->Form->text('event_start', array('class' => 'datepicker', 'placeholder' => 'Begins on')); ?>
		<?php echo $this->Form->text('event_end', array('class' => 'datepicker', 'placeholder' => 'Ends on...')); ?>
	</fieldset>
	
	<fieldset class="unit one-of-two">
		<h3>Hacker Signup</h3>
		<span class="unit span-grid">
			<input type="radio" name="scheme" value="application">
			Interested hackers must apply for a spot
		</span>
		<span class="unit span-grid">
			<input type="radio" name="scheme" value="registration">
			Anyone may register for a spot
		</span>
	</fieldset>
	
	<fieldset class="unit one-of-two">
		<h3>Organizer Account</h3>
		<?php echo $this->Form->text('email', array('label' => false, 'placeholder' => 'Email')); ?>
		<?php echo $this->Form->password('password', array('label' => false, 'placeholder' => 'Choose a password')); ?>
	</fieldset>
	<?php echo $this->Form->submit('Create Competition'); ?>
  </div>
</div>