<div style="display: flex; flex-direction: column; width: 100%; background: #ffffff">
	<?php $this->load->view('components/intro', $data['intro_type'] = 'About'); ?>
</div>
<div style="display: flex; flex-direction: column; width: 100%; height: 100vh; background: #e5e5e5">
	<div class="container">
		<div class="row w-100">
			<div class="col-sm-6 text-center">Left col</div>
			<div class="col-sm-6 text-center">Right col</div>
		</div>
		<div class="row">
			<div class="col-12 text-center" style="background: purple; color: white">Our Purpose</div>
		</div>
		<div class="row w-100">
			<div class="col-sm-6 text-center">Easy Exploration</div>
			<div class="col-sm-6 text-center">Ease of mind</div>
		</div>
	</div>
</div>
<div style="display: flex; flex-direction: column; width: 100%; height: 100vh; background: #ffffff">
	<?php $this->load->view('components/search_cta'); ?>
	<?php $this->load->view('includes/footer'); ?>
</div>
