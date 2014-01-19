<div class="container" id="application">
  <div class="grid">
    <header class="unit span-grid">
		<img src="<?php echo $this->webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
		<h2>Apply for MHacks III</h2>
		<p class="instruction"><strong>MHacks III</strong> is using hackjunkie to handle registration and travel reimbursements. If you've used hackjunkie before, <?php echo $this->Html->link('sign in now.', array('controller' => 'hackers', 'action' => 'login')) ?></p>
    </header>
		<!--<ul class="errors" style="list-style: none; color: red;">
		<?php 	/*foreach($errors as $error){
					echo '<li>' . $error[0] . '</li>';
				} */		
		?>
		</ul>-->
		<?php echo $this->Form->create('Application', array('class' => 'unit span-grid'));?>
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
				<select name="grad_year">
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
			<h3>Will you require travel reimbursement?</h3>
			<span class="unit one-of-two"><input type="radio" name="reimbursement_needed" value="true" />
			Yes</span>
			<span class="unit one-of-two"><input type="radio" name="reimbursement_needed" value="false" />
			No</span> 
			<!--<h3>Where should reimbursements be sent?</h3>
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
			</span>
			<span class="unit span-grid">
				<input type="text" name="zip" placeholder="Zip"/>
			</span>-->
		</fieldset>
		
		<?php if($competition['Item'] != null){ ?>
		<div id="custom-fields" class="unit span-grid">
			<?php 	foreach($competition['Item'] as $index=>$item){
				
						if($item['type'] == 'textarea'){
							echo '<h3>' . $item['text'] . '</h3>';
							echo '<textarea name="custom_field_' . $index . '" class="unit span-grid" style="margin-left: 0; height: 150px;"></textarea>';
						} elseif($item['type'] == 'text'){ ?>
							<span class="unit span-grid">
								<h3><?php echo $item['text']; ?></h3>
						    	<input type="text" name="custom_field_<?php echo $index; ?>"/>
							</span>	
				<?php	} elseif($item['type'] == 'dropdown'){ ?>
							<h3><?php echo $item['text']; ?></h3>
							<select name="custom_field_<?php echo $index; ?>">
								<?php foreach(json_decode($item['options']) as $value=>$title){ ?>
								<option value="<?php echo $value; ?>"><?php echo $title; ?></option>
								<?php } ?>
							</select>
				<?php	}
					
					}
				?>
		</div>
		<?php } ?>
		<input type="submit" value="Apply for MHacks III"/>
  	</form>

  </div>
</div>