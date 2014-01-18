<div class="container">
  <div class="grid">
    <header class="unit span-grid">
		<h2>hackjunkie</h2>
    </header>
		<div class="unit span-grid">
			<h3>Your applications</h3>
			<table width="100%">
				<?php foreach($applications as $application){
					
					$start_date = new DateTime($application['Competition']['event_start']);
					$start_date = $start_date->format('M. d');
					$end_date = new DateTime($application['Competition']['event_end']);
					$end_date = $end_date->format('M. d');
					
					 ?>
				<tr>
					<td><?php echo $application['Competition']['name']; ?></td>
					<td><?php echo $start_date . ' - ' . $end_date; ?></td>
					<td><?php echo $application['Competition']['city'] . ', ' . $application['Competition']['state']; ?></td>
					<td class="application-status"><?php echo $application['Application']['status']; ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<br>
		<?php //echo $this->Html->link("Logout", array("controller" => "hackers", "action" => "logout"));?>

  </div>
</div>