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
.review-card {
	display: grid;
	grid-template-columns: 1fr;
	align-items: flex-start;
	column-gap: 30px;
	box-shadow: 0 0 8px #D0D0D0;
	border-radius: 10px;
	width: 100%;
	margin-bottom: 10px;
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
				<div style="display: flex; align-items: center; justify-content: flex-end; column-gap: 10px; cursor: pointer" onclick="CUSTOMER.get_report_business()">
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

	<!-- Services -->
	 <div id="services" style="display: block;">
		<div class="row">
			<div class="search-view-container" style="padding-top: 40px;">
				<div>&nbsp;</div>
				<div class="service-card">
					<div style="padding: 20px;"><img src="<?php echo base_url(); ?>res/images/service_placeholder_1.jpg" alt="Company service" style="display: block" /></div>
					<div style="display: flex; flex-direction: column; padding: 20px;">
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
					<div style="padding: 20px;"><img src="<?php echo base_url(); ?>res/images/service_placeholder_2.jpg" alt="Company service" style="display: block" /></div>
					<div style="display: flex; flex-direction: column; padding: 20px;">
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
					<div style="padding: 20px;"><img src="<?php echo base_url(); ?>res/images/service_placeholder_3.jpg" alt="Company service" style="display: block" /></div>
					<div style="display: flex; flex-direction: column; padding: 20px;">
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

	<!-- Reviews -->
	<div id="reviews" style="display: block;">
		<div class="row">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>
				<div class="two-container">
					<div style="font-size: 2.5rem; font-weight: 700;">Reviews</div>
					<div style="display: flex; justify-content: flex-end;">
						<div style="display: flex; align-items: center; background: #FFBD3E; border-radius: 5px; padding: 7px 10px; column-gap: 5px;">
							<div><img src="<?php echo base_url(); ?>res/images/pencil.svg" alt="Write review" style="display: block" /></div>
							<div style="font-size: 1.6rem; cursor: pointer;" onclick="SIGNUP_CUSTOMER.get_popup();">Write Review</div>
						</div>
						<div style="font-size: 1.6rem; cursor: pointer; margin-left: 10px" onclick="CUSTOMER.get_write_review();">Write Review*</div>
					</div>
				</div>
			</div>
			<div>&nbsp;</div>
		</div>

		<div class="row">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>

					<div class="review-card" style="margin-top: 10px;">
						<div class="two-container">
							<div style="display: flex; align-items: center; column-gap: 10px; padding: 20px">
								<div><img src="<?php echo base_url(); ?>res/images/review_profile_pic.png" alt="Write review" style="display: block" /></div>
								<div style="display: flex; flex-direction: column;">
									<div style="font-size: 2rem; font-weight: 700;">Nadia Baker</div>
									<div style="font-size: 1.5rem; color: #2b2b2b80;">2 days ago</div>
								</div>
							</div>
							<div style="display: flex; padding: 20px;">
								<div style="flex: 1">&nbsp;</div>
								<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Plumbing</div>
							</div>
						</div>
						<div style="height: 1px; background: #2b2b2b1A; margin: 0px 20px; margin-bottom: 10px;">&nbsp;</div>
						<div class="two-container" style="margin-top: 10px;">
							<div style="padding: 0px 20px;"><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Write review" style="display: block" /></div>
							<div style="display: flex; justify-content: flex-end; padding: 0px 20px"><img src="<?php echo base_url(); ?>res/images/review_flag.svg" alt="Write review" style="display: block" /></div>
						</div>
						<div style="padding: 20px; font-size: 1.6rem; line-height: 2.5rem; color: #1F3541">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sem sem, rutrum quis elit vel, mattis efficitur lorem. Etiam faucibus, nibh ac finibus eleifend, neque lorem rhoncus diam, nec efficitur felis dolor at nunc. Donec eget tincidunt dui, eget venenatis nisl. Duis efficitur laoreet hendrerit.</div>
					</div>

				</div>
			<div>&nbsp;</div>
		</div>

		<div class="row">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>

					<div class="review-card" style="margin-top: 10px;">
						<div class="two-container">
							<div style="display: flex; align-items: center; column-gap: 10px; padding: 20px">
								<div><img src="<?php echo base_url(); ?>res/images/review_jason.png" alt="Write review" style="display: block" /></div>
								<div style="display: flex; flex-direction: column;">
									<div style="font-size: 2rem; font-weight: 700;">Jason Reed</div>
									<div style="font-size: 1.5rem; color: #2b2b2b80;">2 days ago</div>
								</div>
							</div>
							<div style="display: flex; padding: 20px;">
								<div style="flex: 1">&nbsp;</div>
								<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Welder</div>
							</div>
						</div>
						<div style="height: 1px; background: #2b2b2b1A; margin: 0px 20px; margin-bottom: 10px;">&nbsp;</div>
						<div class="two-container" style="margin-top: 10px;">
							<div style="padding: 0px 20px;"><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Write review" style="display: block" /></div>
							<div style="display: flex; justify-content: flex-end; padding: 0px 20px"><img src="<?php echo base_url(); ?>res/images/review_flag.svg" alt="Write review" style="display: block" /></div>
						</div>
						<div style="padding: 20px; font-size: 1.6rem; line-height: 2.5rem; color: #1F3541">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sem sem, rutrum quis elit vel, mattis efficitur lorem. Etiam faucibus, nibh ac finibus eleifend, neque lorem rhoncus diam, nec efficitur felis dolor at nunc. Donec eget tincidunt dui, eget venenatis nisl. Duis efficitur laoreet hendrerit.</div>
					</div>

				</div>
			<div>&nbsp;</div>
		</div>

		<div class="row" style="padding-bottom: 50px;">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>
				<div style="display: flex; align-items: center;">
					<div style="flex: 1">&nbsp;</div>	
					<div class="app-button">Load More</div>
					<div style="flex: 1">&nbsp;</div>	
				</div>
				<div>&nbsp;</div>
			</div>
		</div>
	</div>

	<!-- Contacts -->
	<div id="contacts" style="display: block;">
		
		<div class="row">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>
				<div style="font-size: 2.5rem; font-weight: 700;">Contact</div>
				<div>&nbsp;</div>
			</div>
		</div>
		
		<div class="row" style="padding-top: 30px; padding-bottom: 100px;">
			<div class="search-view-container" style="padding-top: 0px;">
				<div>&nbsp;</div>
				<div style="box-shadow: 0 0 8px #D0D0D0; width: 100%; border-radius: 10px;">
					<div style="display: flex; flex-direction: column; padding: 20px;">
						<div class="flex-row" style="column-gap: 30px; padding-bottom: 15px;">
							<div><img src="<?php echo base_url(); ?>res/images/contact_person.svg" alt="Contact person" style="display: block" /></div>
							<div class="fs22 fw700">Godfrey Khoza</div>
						</div>
						<div class="flex-row" style="column-gap: 30px; padding-bottom: 15px;">
							<div><img src="<?php echo base_url(); ?>res/images/contact_email.svg" alt="Contact person" style="display: block" /></div>
							<div class="fs22 fw700">godfreykhoza186@gmail.com</div>
						</div>
						<div class="flex-row" style="column-gap: 30px; padding-bottom: 15px;">
							<div><img src="<?php echo base_url(); ?>res/images/contact_phone.svg" alt="Contact person" style="display: block" /></div>
							<div class="fs22 fw700">+27818415633</div>
						</div>
						<div class="fs18" style="padding-top: 10px;">Please let your pro know you found them on <span class="inline-logo"></span> ! It helps build trust and ensures you get the best experience</div>
					</div>
				</div>
				<div>&nbsp;</div>
			</div>
		</div>

	</div>
		
</div>
<?php
	$this->load->view('components/newsletter');
?>


