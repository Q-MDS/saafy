<div style="display: flex; flex-direction: column; height: 90px; background: var(--color-search_blue); padding: 10px 0px">
	<div class="container d-flex  justify-content-left align-items-center flex-1">
		<div class="row w-100">
			<div class="">Breadcrumb trail</div>
		</div>
	</div>
	
	<div class="container d-flex justify-content-left align-items-center">
		<div class="row flex-row w-100 h-100">
			<div class="col-sm-10">Plumber</div>
			<div class="col-sm-2">Gardens, WC</div>
		</div>
	</div>
</div>
<div class="container mt-4">
	<div class="row w-100">
		<div class="col-3">Filter</div>
		<div class="col-9">
			<div>Results</div>
			<div class="card">
				<h5 class="card-header">Featured</h5>
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary" onclick="NAV.search_view()">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Newsletter and footer -->
<div style="display: flex; flex-direction: column; width: 100%; height: 100vh; background: #ffffff">
	<?php $this->load->view('components/newsletter'); ?>
	<?php $this->load->view('includes/footer'); ?>
</div>
