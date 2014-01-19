<div class="container" id="application">
  <div class="grid">
    <header class="unit span-grid">
		<img src="<?php echo $this->webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
		<h2>Set a password</h2>
		<p class="instruction">Setting a password allows you to return to this application at a later time and easily apply to other hackjunkie events.</p>
    </header>
	<form method="post" class="unit span-grid">
		<input type="password" name="password" value="password" placeholder="Password"/>
		<input type="password" name="password" value="password" placeholder="Password (again)"/>
		<input type="submit" value="Save password"/>
  	</form>

  </div>
</div>