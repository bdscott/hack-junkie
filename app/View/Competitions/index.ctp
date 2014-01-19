<div class="container" id="application">
	<div class="grid">
		<header class="unit span-grid">

			<?php echo $this -> Form -> create("Competitions", array('action' => "upload", 'type' =>  'file')); ?>
  <fieldset>

  <?php
echo $this -> Form -> input('file', array('type' =>  'file'));
  ?>
  </fieldset>
<?php echo $this -> Form -> end(__('Submit', true)); ?>
		</header>
	</div>
</div>