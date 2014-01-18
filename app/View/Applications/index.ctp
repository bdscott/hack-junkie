<div class="container">
  <div class="grid">
    <header class="unit span-grid">
		<h2>hackjunkie</h2>
    </header>
		<div class="unit span-grid">
			<h3>Your applications</h3>
			<table width="100%">
				<?php foreach($applications as $application){ ?>
				<tr>
					<td>MHacks III</td>
					<td>Jan. 17-19</td>
					<td>Detroit, MI</td>
					<td class="application-status">In review</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<br>
		<?php //echo $this->Html->link("Logout", array("controller" => "hackers", "action" => "logout"));?>

  </div>
</div>