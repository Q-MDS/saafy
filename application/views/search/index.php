<style>
	.result-card {
		display: grid;
		grid-template-columns: 250px 1fr;
		column-gap: 15px;
		background: #fff;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 15px;
		margin-bottom: 15px;
		font-size: 1.5rem
	}
	.result-card .title {
		padding-top: 10px;
		font-size: 2.5rem;
		font-weight: 700;
	}
	@media (max-width: 945px) {
		.result-card {
			grid-template-columns: 1fr; /* 2 columns for medium screens */
			row-gap: 24px;
		}
	}

	@media (max-width: 480px) {
		.result-card {
			row-gap: 24px;
			grid-template-columns: 1fr; /* 1 column for small screens */
		}
	}
	.verified {
		display: flex;
		align-items: center;
		column-gap: 10px;
		background: #f5f5f5;
		color: #2B2B2B;
		padding: 2px 10px;
		font-size: 1.4rem;
		border-radius: 5px;
	}
	.result-card-description {
		display: grid;
		grid-template-columns: 1fr 120px;
		column-gap: 35px;
		padding-top: 10px;
	}
	.multiline-ellipsis {
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Number of lines to show */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="container" style="padding-bottom: 120px;">
	<div class="row" style="text-align: right; padding-top: 30px;">
		<div>23 Results</div>
	</div>
	<div class="row">
		<div class="one-all-container">
			<!-- Filter layout -->
			<div style="display: flex; flex-direction: column; row-gap:10px">
				<div>Filter</div>
				<div>Call out fee</div>
				<div>Slider</div>
				<div>Reviews</div>
				<div>[] [] [] [] []</div>
				<div>Company status</div>
				<div>[] Verified</div>
				<div>[] Unverified</div>
				<div>Company status</div>
			</div>
			<!-- Search results -->
			 <div>
				<div class="result-card">
					<div><img src="<?php echo base_url(); ?>res/images/search_result_placeholder.jpg" alt="SAAFY Search Result Picture" style="display: block" /></div>
					<div style="display: flex; flex-direction: column;">
						<div style="display: flex; align-items: center; justify-content: space-between;">
							<div id="show_verified" class="verified">
								<div><img src="<?php echo base_url(); ?>res/images/verified_icon.svg" alt="Verified" style="display: block" /></div>
								<div>Verified</div>
							</div>
							<div style="display: flex; flex: 1; justify-content: flex-end"><img src="<?php echo base_url(); ?>res/images/bookmark.svg" alt="Bookmark" style="display: block" /></div>
						</div>
						<div class="title"> GB Plumbing and Renovations</div>
						<div style="display: flex; align-items: center; justify-content: flex-start; column-gap: 5px; padding-top: 10px;">
							<div><img src="<?php echo base_url(); ?>res/images/stars_5.svg" alt="5 Stars" style="display: block" /></div>
							<div style="color:#959595">5.0</div>
							<div style="color:#959595">|</div>
							<div style="color:#959595">24 Reviews</div>
						</div>		
						<div style=" padding-top: 10px;">Call out fee: R0 - R100</div>
						<div class="result-card-description">
							<div class="multiline-ellipsis" style="color:#959595;">GB Plumbing and Renovations is a trusted South African company specialising in high-quality plumbing services and home renovations. Known for prompt service and expert workmanship, GB Plumbing and Renovations offers a range of services, from emergency repairs and maintenance to complete bathroom and kitchen remodels</div>
							<div style="display: flex; align-items: center; justify-content: space-between;">
								<div><img src="<?php echo base_url(); ?>res/images/search_result_email.svg" alt="Email" style="display: block" /></div>
								<div><img src="<?php echo base_url(); ?>res/images/search_result_phone.svg" alt="Contact Number" style="display: block" /></div>
								<div><img src="<?php echo base_url(); ?>res/images/search_result_whatsapp.svg" alt="whatsApp" style="display: block" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="result-card">
					<div>Image</div>
					<div>Content</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('components/newsletter'); ?>
