<div class="container" id="application">
  <div class="grid">
    <header class="unit span-grid">
		<img src="<?php echo $this->webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
    </header>

		<fieldset step-number="1" class="unit one-of-two">
			
		<fieldset step-number="3" class="unit one-of-two">
			<h3>You're logged in!</h3>
		</fieldset>
		<br>
		<?php echo $this->Html->link("Logout" ,array("controller" => "hackers", "action" => "logout"));?>
					

  </div>
</div>