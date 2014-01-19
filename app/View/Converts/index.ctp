<div class="container" id="application">
	<div class="grid">
		<header class="unit span-grid">
			<img src="<?php echo $this -> webroot; ?>images/uploads/event-logos/1.png" width="200" class="event-logo">
			<h2>Convert Existing Data to .csv!</h2>
			<?php
			$line = array('First Name', 'Last Name', 'Gender', 'City');
			foreach ($line as $word) {
				echo $word . " ";
			}
			echo $this -> csv -> addRow($line);
			echo "<br>";
			$line = array('Adam', 'Royle', 'M', 'Brisbane');
			foreach ($line as $word) {
				echo $word . " ";
			}
			echo $this -> csv -> addRow($line);
			echo "<br>";
			$line = array('Skrimpy', 'Bopimpy', 'M', 'North Sydney');
			foreach ($line as $word) {
				echo $word . " ";
			}
			echo $this -> csv -> addRow($line);
			echo "<br>";
			$line = array('Sarah', 'Jincera"s', 'F', 'Melbourne');
			foreach ($line as $word) {
				echo $word . " ";
			}
			echo $this -> csv -> addRow($line);
			echo "<br><br>";
			echo $this->Html->link('Export to CSV', "/Subscribers.csv",array('class' => 'button', 'target' => '_blank'));
			//echo $this-> csv -> render('Subscribers.csv');
			//echo $this ->csv -> render('Subscribers.csv');
			?>
		</header>
	</div>
</div>