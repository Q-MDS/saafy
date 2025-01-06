<style>
	.search-topic {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		/* width: 140px;*/
		height: 140px; 
		row-gap: 15px;
		border: 1px solid #d9d9d9;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		font-size: 16px;
		text-align: center;
	}
	.join-card {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: center;
		padding: 50px 40px;
		border: 1px solid #d9d9d9;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}
	.join-card .title {
		font-size: 24px;
		font-weight: 600;
	}
	.pro-card {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		justify-content: center;
		padding: 50px 25px;
		border: 1px solid #d9d9d9;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	}
	.pro-card .comment {
		font-size: 24px;
		font-weight: 600;
		margin-top: 35px;
	}
	.pro-card .body {
		font-size: 16px;
		margin-top: 20px;
	}
	.pro-card .from-name {
		font-size: 16px;
		font-weight: 600;
		margin-top: 40px;
	}
	.services-btn {
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		width: 100%;
		padding-top: 20px;
		padding-bottom: 20px;
		border: 1px solid #d9d9d9;
		font-size: 2.2rem;
		color: #635BFF;
		border-radius: 30px;
		border: 1px solid #635BFF; 
	}
</style>
<div class="container" style="padding-top: 30px; padding-bottom: 30px; width: 100%">
	<div class="eight-container">
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_plumber.svg" alt="Search" style="display: block" /></div>
			<div>Plumber</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Electrician</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Gardening</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Solar Installation</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Construction</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Swimming Pool</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Carpenter</div>
		</div>	
		<div class="search-topic">
			<div><img src="<?php echo base_url(); ?>res/images/search_topic_elec.svg" alt="Search" style="display: block" /></div>
			<div>Painting</div>
		</div>	
	</div>
</div>

<div class="container" style="padding-top: 70px; width: 100%;">
	<!-- Join as customer/pro: Not logged in -->
	<div id="join_types" style="display: none">
		<div class="two-container" style="padding-bottom: 70px;">
			<div class="join-card">
				<div><img src="<?php echo base_url(); ?>res/images/join_customer.svg" alt="Search" style="display: block" /></div>
				<div class="org-button" style="margin-top: 50px;">Join as a customer</div>
				<div class="title" style="margin-top: 30px">Are you looking for reliable professionals to meet your needs?</div>
				<div style="margin-top: 30px;">
					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Easily find trusted professionals for your needs.</div>
					</div>
					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Read and leave reviews to ensure quality.</div>
					</div>
					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Favourite services for quick access later.</div>
					</div>
				</div>
				<div class="app-button" style="margin-top: 35px">Sign up as a customer</div>
			</div>
			<div class="join-card">
				<div><img src="<?php echo base_url(); ?>res/images/join_pro.svg" alt="Search" style="display: block" /></div>
				<div class="org-button" style="margin-top: 34px;">Join as a professional</div>
				<div class="title"style="margin-top: 30px">Are you a service provider looking to expand your client base?</div>
				<div style="margin-top: 30px">
					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Connect with clients actively seeking your services.</div>
					</div>

					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Boost your visibility with a dedicated business profile.</div>
					</div>
					<div class="flex-row colgap-10">
						<div><img src="<?php echo base_url(); ?>res/images/join_tick.svg" alt="Search" style="display: block" /></div>
						<div>Collect reviews to enhance your credibility.</div>
					</div>
				</div>
				<div class="app-button" style="margin-top: 35px">Learn more about joining as a Pro</div>
			</div>
		</div>
	</div>

	<!-- Customer logged in: Bookmarks -> Empty -->
	<div id="bookmarks_empty" style="display: none">
		<div class="responsive-div" style="max-width: 100%; margin-bottom: 30px;">
			<div class="flex-row" style="flex: 1; justify-content: space-between;">
				<div style="padding-top: 0px; font-size: 4rem; font-weight: 400">Your bookmarks</div>
				<div class="fs16">View All</div>
			</div>
		</div>

		<div class="responsive-div" style="max-width: 100%">
			<div class="flex-col" style="align-items: center; justify-content: center; background: #ffffff; box-shadow: 0 0 8px #D0D0D0; padding-top: 50px; padding-bottom: 50px; border-radius: 10px; flex: 1">
				<div><img src="<?php echo base_url(); ?>res/images/bookmark_med.svg" alt="Customer login" style="display: block" /></div>
				<div class="fs30" style="margin-top: 30px;">You haven’t bookmarked any services yet!</div>
				<div class="fs20" style="margin-top: 20px; text-align: center">Click the bookmark icon on services you love to save<br> them here for quick access later.</div>
			</div>
		</div>
	</div>

	<!-- Customer logged in: Bookmarks -->
	<div id="bookmarks" style="display: block">
		
		<div class="responsive-div" style="max-width: 100%; margin-bottom: 30px;">
			<div class="flex-row" style="flex: 1; justify-content: space-between;">
				<div style="padding-top: 0px; font-size: 4rem; font-weight: 400">Your bookmarks</div>
				<div class="fs16" style="cursor: pointer" onclick="ROUTER.customer_bookmarks()">View All</div>
			</div>
		</div>

	 	<div class="four-container">
			
			<!-- Card 1 -->
			<div class="bookmark-card" onclick="ROUTER.search_view();">
				<div style="position: relative;">
					<img src="<?php echo base_url(); ?>res/images/bookmark_ph1.jpg" alt="Company display picture" style="display: block; width: 100%" />
					<div style="position: absolute; top: 10px; left: 10px;">
						<div id="show_verified" class="verified">
							<div><img src="<?php echo base_url(); ?>res/images/verified_icon.svg" alt="Verified" style="display: block" /></div>
							<div>Verified</div>
						</div>
					</div>
					<div style="position: absolute; top: 10px; right: 10px;"><img src="<?php echo base_url(); ?>res/images/bookmark_sml_full.svg" alt="Company display picture" style="display: block; width: 100%" /></div>
				</div>
				<div class="title">GB Plumbing and Renovations</div>
				<div class="flex-row" style="column-gap: 10px">
					<div><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Rating" style="display: block" /></div>
					<div>4.0</div>
					<div style="color: #2b2b2b80">| 2 reviews</div>
				</div>
				<div class="category">
					<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Plumbing</div>
				</div>
				<div class="sub-title">Call-out Fee Fee: R0 - R100</div>
				<div class="description">Available for emergency services and backed by years of experience, we are your trusted partner for all your plumbing needs.</div>	
				<div class="flex-row" style="column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_email.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_phone.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_whatsapp.svg" alt="Verified" style="display: block" /></div>
				</div>
			</div>

			<!-- Card 2 -->
			<div class="bookmark-card">
				<div><img src="<?php echo base_url(); ?>res/images/bookmark_ph2.jpg" alt="Company display picture" style="display: block; width: 100%" /></div>
				<div class="title">Papa G's Building Projects</div>
				<div class="flex-row" style="column-gap: 10px">
					<div><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Rating" style="display: block" /></div>
					<div>4.0</div>
					<div style="color: #2b2b2b80">| 2 reviews</div>
				</div>
				<div class="category">
					<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Window installation</div>
				</div>
				<div class="sub-title">Call-out Fee Fee: R0 - R100</div>
				<div class="description">Available for emergency services and backed by years of experience, we are your trusted partner for all your plumbing needs.</div>	
				<div class="flex-row" style="column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_email.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_phone.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_whatsapp.svg" alt="Verified" style="display: block" /></div>
				</div>
			</div>

			<!-- Card 3 -->
			<div class="bookmark-card">
				<div><img src="<?php echo base_url(); ?>res/images/bookmark_ph3.jpg" alt="Company display picture" style="display: block; width: 100%" /></div>
				<div class="title">MA Electrical Maintenance</div>
				<div class="flex-row" style="column-gap: 10px">
					<div><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Rating" style="display: block" /></div>
					<div>4.0</div>
					<div style="color: #2b2b2b80">| 2 reviews</div>
				</div>
				<div class="category">
					<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Electrician</div>
				</div>
				<div class="sub-title">Call-out Fee Fee: R0 - R100</div>
				<div class="description">Available for emergency services and backed by years of experience, we are your trusted partner for all your plumbing needs.</div>	
				<div class="flex-row" style="column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_email.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_phone.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_whatsapp.svg" alt="Verified" style="display: block" /></div>
				</div>
			</div>

			<!-- Card 4 -->
			<div class="bookmark-card">
				<div style="position: relative;">
					<img src="<?php echo base_url(); ?>res/images/bookmark_ph4.jpg" alt="Company display picture" style="display: block; width: 100%" />
					<div style="position: absolute; top: 10px; left: 10px;">
						<div id="show_verified" class="verified">
							<div><img src="<?php echo base_url(); ?>res/images/verified_icon.svg" alt="Verified" style="display: block" /></div>
							<div>Verified</div>
						</div>
					</div>
					<div style="position: absolute; top: 10px; right: 10px;"><img src="<?php echo base_url(); ?>res/images/bookmark_sml_full.svg" alt="Company display picture" style="display: block; width: 100%" /></div>
				</div>
				<div class="title">Squeaky Clean</div>
				<div class="flex-row" style="column-gap: 10px">
					<div><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="Rating" style="display: block" /></div>
					<div>4.0</div>
					<div style="color: #2b2b2b80">| 2 reviews</div>
				</div>
				<div class="category">
					<div style="font-size: 1.3rem; font-weight: 700; padding: 5px 15px; border-radius:40px; background: #635BFF33; color: #635BFF">Cleaning</div>
				</div>
				<div class="sub-title">Call-out Fee Fee: R0 - R100</div>
				<div class="description">Available for emergency services and backed by years of experience, we are your trusted partner for all your plumbing needs.</div>	
				<div class="flex-row" style="column-gap: 10px;">
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_email.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_phone.svg" alt="Verified" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/bookmark_whatsapp.svg" alt="Verified" style="display: block" /></div>
				</div>
			</div>
	 	</div>

	</div>


	<div style="width: 100%; padding-top: 70px; padding-bottom: 50px; font-size: 4rem; font-weight: 400">What our Pros say</div>
	<div class="three-container" style="text-align: center; padding-bottom: 70px; width: 100%">
		<div class="pro-card">
			<div><img src="<?php echo base_url(); ?>res/images/iph1.png" alt="Search" style="display: block" /></div>
			<div class="comment">“An amazing service”</div>
			<div class="body">Lorem ipsum dolor sit ametolil col consectetur adipiscing lectus a nunc mauris scelerisque sed egestas.</div>
			<div class="from-name">John Carter</div>
			<div class="from-desc">Automation Pro</div>
		</div>
		<div class="pro-card">
			<div><img src="<?php echo base_url(); ?>res/images/iph1.png" alt="Search" style="display: block" /></div>
			<div class="comment">“One of a kind service”</div>
			<div class="body">Ultrices eros in cursus turpis massa tincidunt pellentesque sem nulla pharetra diam sit amet nisl suscipit adipis.</div>
			<div class="from-name">Sophie Moore</div>
			<div class="from-desc">Electrical Pro</div>
		</div>
		<div class="pro-card">
			<div><img src="<?php echo base_url(); ?>res/images/iph1.png" alt="Search" style="display: block" /></div>
			<div class="comment">“The best service”</div>
			<div class="body">Convallis posuere morbi leo urna molestie at elementum eu facilisis sapien pellentesque habitant.</div>
			<div class="from-name">Andy Smith</div>
			<div class="from-desc">Flooring Pro</div>
		</div>
	</div>

	<div style="width: 100%; padding-top: 70px; padding-bottom: 50px; font-size: 4rem; font-weight: 400">Services you may like</div>
	<div class="six-container" style="text-align: left;  padding-bottom: 70px; width: 100%; row-gap: 30px">
		<div class="services-btn">Lawn Care</div>
		<div class="services-btn">Help Moving</div>
		<div class="services-btn">Mounting</div>
		<div class="services-btn">Electrician</div>
		<div class="services-btn">Pool Maintenance</div>
		<div class="services-btn">Roof Repair</div>

		<div class="services-btn">Painting</div>
		<div class="services-btn">House Cleaning</div>
		<div class="services-btn">Renovation</div>
		<div class="services-btn">Deep Cleaning</div>
		<div class="services-btn">Landscaping</div>
		<div class="services-btn">CCTV Installation</div>
	</div>
					
</div>
<?php
	$this->load->view('components/newsletter');
?>
