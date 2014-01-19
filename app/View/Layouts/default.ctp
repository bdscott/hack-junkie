<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->webroot; ?>js/main.js"></script>
		
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/toast.css"/>
		<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/style.css"/>
		
		<script type="text/javascript" src="//use.typekit.net/vlt1zwt.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	</head>
	<body>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

	</body>
</html>
