<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo @$title; ?></title>
        
        <link rel="icon" href="" media="screen,projection"/>
		<!-- icon.css also includes font-face for text -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/icon.css"); ?>" media="screen,projection"/>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/materialize.min.css"); ?>" media="screen,projection"/>
		<?php
			if(@$styles) {
			foreach ($styles as $css) : ?>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url($css . '.css'); ?>" media="screen,projection"/>
		<?php endforeach; }?>
	</head>
	<body class="loaded">
		<?php 
			echo $yield; 
		?>
    </body>
    
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/materialize.min.js"); ?>"></script>
    
	<?php 
		if(@$scripts) {
		foreach ($scripts as $js) : ?>
			<script type="text/javascript" src="<?php echo base_url($js . '.js'); ?>"></script>
	<?php endforeach; }?>
</html>
