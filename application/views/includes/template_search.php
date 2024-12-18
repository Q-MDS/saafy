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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/main.css">
    <!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>res/css/modal_flat.css"/> -->
	<!-- <link rel="stylesheet" href="<?php //echo base_url(); ?>res/css/litepicker.css"/> -->

    <!-- Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="<?php echo base_url(); ?>res/js/main.js"></script>
    <!-- <script type="text/javascript" src="<?php //echo base_url(); ?>res/js/daypilot-modal-3.15.1.min.js"></script> -->
	<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>res/js/litepicker.js"></script> -->

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>res/images/favicon.png">
</head>

<body>
	<!-- Main content
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="app_container">
		<div style="width: 100%;"><?php $this->load->view('includes/search_bar'); ?></div>
		<div class="container-fluid p-0">
			<?php $this->load->view($main_content); ?>
		</div>
	</div>
	<!-- END: Main content -->

	<!-- Form overlay
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div id="form_overlay"></div>
	<!-- END: Form overlay -->
</body>
</html>
