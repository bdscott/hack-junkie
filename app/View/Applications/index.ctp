<div class="container">
  <div class="grid">
    <header class="unit span-grid">
		<h2>hackjunkie</h2>
    </header>
		<div class="unit span-grid">
			<?php if($is_organizer){ ?>
			<h3>5 Applications submitted <a href="#">Export as csv</a></h3>
			<?php } else { ?>
			<h3>Your applications</h3>
			<?php }?>
			
			<table width="100%">
				<?php foreach($applications as $index=>$application){
					
						if(!$is_organizer){
					
							$start_date = new DateTime($application['Competition']['event_start']);
							$start_date = $start_date->format('M. d');
							$end_date = new DateTime($application['Competition']['event_end']);
							$end_date = $end_date->format('M. d');
					
					 ?>
				<?php if($index % 2 == 0){ ?>
				<tr style="background: #dedede;">
				<?php } else { ?>
				<tr>
				<?php } ?>
					<td><?php echo $application['Competition']['name']; ?></td>
					<td><?php echo $start_date . ' - ' . $end_date; ?></td>
					<td><?php echo $application['Competition']['city'] . ', ' . $application['Competition']['state']; ?></td>
					<td class="application-status"><?php echo $application['Application']['status']; ?></td>
				</tr>
				<?php 	} else {  ?>
				<tr>
					<td><?php echo $application['Application']['first_name'] . ' ' . $application['Application']['last_name']; ?></td>
					<td><?php echo $application['Application']['school'] . ' (' . $application['Application']['grad_year'] . ')'; ?></td>
					<td><?php echo $this->Html->link('Github', $application['Application']['github_url']); ?></td>
					<td><?php echo $this->Html->link('LinkedIn', $application['Application']['linkedin_url']); ?></td>
					<td><?php echo $this->Html->link('Review App', array('controller' => 'applications', 'action' => 'view', $application['Application']['id'])); ?></td>
				</tr>
				<?php 	} 
					  }	 ?>
			</table>
		</div>
		<br>
		<?php //echo $this->Html->link("Logout", array("controller" => "hackers", "action" => "logout"));?>
		
		<footer class="unit span-grid">
			<?php echo $this->Html->link('Sign out', array('controller' => 'hackers', 'action' => 'logout')); ?>
		</footer>
  </div>
</div>