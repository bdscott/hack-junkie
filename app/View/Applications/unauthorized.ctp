<?php session_start();?>
<div class="container" id="application">
  <div class="grid">
    <header class="unit span-grid">
		<img src="<?php echo $this->webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
    </header>

		<fieldset step-number="1" class="unit one-of-two">
			
		<br>
		<?php echo $this->Html->link("Logout" ,array("controller" => "hackers", "action" => "logout"));?>

  </div>
</div>