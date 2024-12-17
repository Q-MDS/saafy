<div style="display: flex; flex-direction: column; width: 100%; background: #ffffff">
	<?php $this->load->view('components/intro', $data['intro_type'] = 'Works'); ?>
</div>
<div style="display: flex; flex-direction: column; width: 100%; height: 100vh; background: #e5e5e5">
	<div class="container">
		<div class="row w-100">
			<div class="col-sm-8">Left col</div>
			<div class="col-sm-4">Right col</div>
		</div>
	</div>
</div>
<div style="display: flex; flex-direction: column; width: 100%; height: 100vh; background: #ffffff">
	<?php $this->load->view('components/newsletter'); ?>
	<?php $this->load->view('includes/footer'); ?>
</div>
