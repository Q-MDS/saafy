<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive CSS Grid</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>res/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/main.css">
</head>
<body>
    <div style="position: relative; width: 100%; background: red;">
		
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

</body>
</html>
