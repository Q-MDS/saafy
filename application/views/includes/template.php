<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    
	<!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/main.css">

	<!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script type="text/javascript" src="<?php echo base_url(); ?>res/js/main.js"></script>

	<!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>res/images/favicon.png">
</head>
<body>
    <div class="basic-container">
		
		<div style="width: 100%;">
			<div class="container">
				<?php $this->load->view($menu); ?>
			</div>
		</div>
		
		<div class="container">
			<?php $this->load->view($landing); ?>
		</div>
	</div>

	<div style="width: 100%;">
		<div class="container">
			<?php $this->load->view($main_content); ?>
		</div>
	</div>

	<!-- <div style="width: 100%;"> -->
		<div class="footer-container">
			<?php $this->load->view('includes/footer'); ?>
		</div>
	<!-- </div> -->

</body>
</html>
