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
.service-card {
	display: grid;
	grid-template-columns: 250px 1fr;
	align-items: flex-start;
	column-gap: 30px;
	box-shadow: 0 0 8px #D0D0D0;
	border-radius: 10px;
	width: 100%;
	padding: 20px;
	margin-bottom: 10px;
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
				<div style="max-width: 650px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sem sem, rutrum quis elit vel, mattis efficitur lorem. Etiam faucibus, nibh ac finibus eleifend</div>
				<div style="display: flex; align-items: center; justify-content: flex-end; column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/icon_report.svg" alt="Report" style="display: block" /></div>
					<div>Report</div>
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>

	<div class="row">
		<div class="search-view-container" style="padding-top: 10px;">
			<div>&nbsp;</div>
			<div class="search-view-detail-desc-container">
				<div style="display: flex; align-items: center; column-gap: 45px;">
					<div style="font-size: 1.8rem; font-weight: 700; color: #635BFF; border-bottom: 1px solid #635BFF;">Services</div>	
					<div style="font-size: 1.8rem; font-weight: 700;">Reviews</div>	
					<div style="font-size: 1.8rem; font-weight: 700;">Contacts</div>	
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>

	<div class="row">
		<div class="search-view-container" style="padding-top: 40px;">
			<div>&nbsp;</div>
			<div class="service-card">
				<div><img src="<?php echo base_url(); ?>res/images/service_placeholder_1.jpg" alt="Company service" style="display: block" /></div>
				<div style="display: flex; flex-direction: column;">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
						<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Plumbing</div>
						<div><img src="<?php echo base_url(); ?>res/images/bookmark.svg" alt="Company service" style="display: block" /></div>
					</div>
					<div style="font-size: 2.5rem; font-weight: 700;">Call-out Fee Fee: R0 - R100</div>
					<div style="font-size: 1.5rem; color: #2b2b2b80">We offer professional welding services for residential and commercial projects. Our skilled welders handle everything from custom metal fabrication to repairs, ensuring precision and durability in every job. With expertise in a range of welding techniques and materials, we deliver high-quality solutions tailored to your needs. Trust us for reliable, efficient service and exceptional craftsmanship on every project.</div>
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>

	<div class="row">
		<div class="search-view-container" style="padding-top: 0px;">
			<div>&nbsp;</div>
			<div class="service-card">
				<div><img src="<?php echo base_url(); ?>res/images/service_placeholder_2.jpg" alt="Company service" style="display: block" /></div>
				<div style="display: flex; flex-direction: column;">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
						<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Welder</div>
						<div><img src="<?php echo base_url(); ?>res/images/bookmark.svg" alt="Company service" style="display: block" /></div>
					</div>
					<div style="font-size: 2.5rem; font-weight: 700;">Call-out Fee Fee: R0 - R100</div>
					<div style="font-size: 1.5rem; color: #2b2b2b80">We offer professional welding services for residential and commercial projects. Our skilled welders handle everything from custom metal fabrication to repairs, ensuring precision and durability in every job. With expertise in a range of welding techniques and materials, we deliver high-quality solutions tailored to your needs. Trust us for reliable, efficient service and exceptional craftsmanship on every project.</div>
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>

	<div class="row">
		<div class="search-view-container" style="padding-top: 0px;">
			<div>&nbsp;</div>
			<div class="service-card">
				<div><img src="<?php echo base_url(); ?>res/images/service_placeholder_3.jpg" alt="Company service" style="display: block" /></div>
				<div style="display: flex; flex-direction: column;">
					<div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px;">
						<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Home Renovations</div>
						<div><img src="<?php echo base_url(); ?>res/images/bookmark.svg" alt="Company service" style="display: block" /></div>
					</div>
					<div style="font-size: 2.5rem; font-weight: 700;">Call-out Fee Fee: R0 - R100</div>
					<div style="font-size: 1.5rem; color: #2b2b2b80">We offer professional welding services for residential and commercial projects. Our skilled welders handle everything from custom metal fabrication to repairs, ensuring precision and durability in every job. With expertise in a range of welding techniques and materials, we deliver high-quality solutions tailored to your needs. Trust us for reliable, efficient service and exceptional craftsmanship on every project.</div>
				</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</div>
	
</div>
<?php
	$this->load->view('components/newsletter');
?>


