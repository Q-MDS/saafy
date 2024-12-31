<style>
.search-view-detail-container {
	display: grid;
	grid-template-columns: auto auto 1fr;
	align-items: center;
	column-gap: 30px;
	width: 100%;
}
@media (max-width: 945px) {
	.search-view-detail-container {
		grid-template-columns: 1fr; /* 2 columns for medium screens */
		row-gap: 24px;
	}
}

@media (max-width: 480px) {
	.search-view-detail-container {
		grid-template-columns: 1fr; /* 1 column for small screens */
		row-gap: 24px;
	}
}
.search-view-detail-desc-container {
	display: grid;
	grid-template-columns: 1fr auto;
	align-items: flex-start;
	column-gap: 30px;
	width: 100%;
}
@media (max-width: 945px) {
	.search-view-detail-desc-container {
		grid-template-columns: 1fr; /* 2 columns for medium screens */
		row-gap: 24px;
	}
}

@media (max-width: 480px) {
	.search-view-detail-desc-container {
		grid-template-columns: 1fr; /* 1 column for small screens */
		row-gap: 24px;
	}
}
</style>
<div class="container">
	<div class="row">
		<div class="search-view-container" style="padding-top: 30px;">
			<div>&nbsp;</div>
			<div class="search-view-detail-container">
				<div style="font-size: 40px; font-weight: 700;">GB Plumbing and Renovations</div>
				<!-- <div> -->
					<div id="show_verified" class="verified" style="background: #e4e4e4;">
						<div><img src="<?php echo base_url(); ?>res/images/verified_icon.svg" alt="Verified" style="display: block" /></div>
						<div>Verified</div>
					</div>
				<!-- </div> -->
				<div style="display: flex; align-items: center; justify-content: flex-end; column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/search_result_email.svg" alt="Email" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/search_result_phone.svg" alt="Contact Number" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/search_result_whatsapp.svg" alt="whatsApp" style="display: block" /></div>
				</div>
			</div>
			<div>&nbsp;</div>
		</div>
	</div>

	<div class="row">
		<div class="search-view-container" style="padding-top: 30px;">
			<div>&nbsp;</div>
			<div class="search-view-detail-desc-container">
				<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sem sem, rutrum quis elit vel, mattis efficitur lorem. Etiam faucibus, nibh ac finibus eleifend</div>
				<div style="display: flex; align-items: center; justify-content: flex-end; column-gap: 10px; border: 1px solid #ff0000; ">
					<div>X</div>
					<div>Report</div>
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>
</div>



