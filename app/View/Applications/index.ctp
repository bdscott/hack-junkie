<<<<<<< HEAD
<div class="container">
=======
<?php session_start();?>
<div class="container" id="application">
>>>>>>> 43b5838f61e1401a031efcf1e8083769801decec
  <div class="grid">
    <header class="unit span-grid">
		<h1>hackjunkie</h1>
		<?php echo $this->Html->link("Logout" ,array("controller" => "hackers", "action" => "logout"));?>
    </header>
			
<<<<<<< HEAD
		<div class="unit span-grid">
			<h3>You're logged in!</h3>
		</div>		
=======
		<fieldset step-number="3" class="unit one-of-two">
			<h3>Welcome <?php echo $_SESSION['hackerUsername'];?></h3>
		</fieldset>
		<br>
		<?php echo $this->Html->link("Logout" ,array("controller" => "hackers", "action" => "logout"));?>
>>>>>>> 43b5838f61e1401a031efcf1e8083769801decec

  </div>
</div>