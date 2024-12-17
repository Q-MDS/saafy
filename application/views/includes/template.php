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
		<div style="position: fixed; top: 0; left: 0; width: 100%; height: 70px; margin-bottom: 10px; background: #ffffff80"><?php $this->load->view($topbar); ?></div>
		<!-- <div style="flex:1; width: 100%; background-color: var(--app-secondary); border-radius: 30px; z-index: 10;  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);"> -->
			<div>
				<?php $this->load->view($main_content); ?>
			</div>
		<!-- </div> -->
	</div>
	<!-- END: Main content -->

	<!-- Form overlay
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div id="form_overlay"></div>
	<!-- END: Form overlay -->
</body>
</html>