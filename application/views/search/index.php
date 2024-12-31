<style>
	.result-card {
		display: grid;
		grid-template-columns: 250px 1fr;
		column-gap: 15px;
		background: #fff;
		box-shadow: 0 0 8px #D0D0D0;
		padding: 15px;
		margin-bottom: 15px;
		font-size: 1.5rem;
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
	/* Slider */
	.slider-container {
        width: 100%;
        max-width: 400px;
        margin: 0px auto;
        text-align: left;
    }

    input[type="range"] {
        -webkit-appearance: none;
        width: 100%;
        height: 8px;
        background: #ddd;
        outline: none;
        opacity: 0.7;
        transition: opacity .2s;
    }

    input[type="range"]:hover {
        opacity: 1;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        background: #635BFF;
        cursor: pointer;
        border-radius: 50%;
    }

    input[type="range"]::-moz-range-thumb {
        width: 20px;
        height: 20px;
        background: #635BFF;
        cursor: pointer;
        border-radius: 50%;
    }
</style>
<div class="container" style="padding-bottom: 120px;">
	<div class="row" style="text-align: right; padding-top: 30px; padding-bottom: 15px;">
		<div>23 Results</div>
	</div>
	<div class="row">
		<div class="one-all-container">
			<!-- Filter layout -->
			<div style="display: flex; flex-direction: column; row-gap:10px">
				<div style="font-size: 2rem; padding-bottom: 10px; border-bottom: 1px solid #2b2b2b1A">Filter</div>
				<div class="slider-container">
					<label for="priceRange" style="font-size: 1.6rem; font-weight: 400">Call out fee: R<span id="priceValue">0</span></label>
					<input type="range" id="priceRange" name="priceRange" min="0" max="1000" value="0" step="1" oninput="updatePriceValue(this.value)">
				</div>
				<div style="background: #2b2b2b1a; height: 1px; margin-top: 25px;">&nbsp;</div>
				<div style="font-size: 1.6rem;">Reviews</div>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					<div><img src="<?php echo base_url(); ?>res/images/filter_review_all.svg" alt="Reviews any" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/filter_review_3.svg" alt="Reviews any" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/filter_review_4.svg" alt="Reviews any" style="display: block" /></div>
					<div><img src="<?php echo base_url(); ?>res/images/filter_review_5.svg" alt="Reviews any" style="display: block" /></div>
				</div>
				<div style="background: #2b2b2b1a; height: 1px; margin-top: 10px;">&nbsp;</div>
				<div style="font-size: 1.6rem;">Company status</div>
				<div style="display: flex; align-items: center; column-gap: 5px;">
					<div><input type="checkbox" id="filter_status_verified"></div>
					<div>Verified</div>
				</div>
				<div style="display: flex; align-items: center; column-gap: 5px; margin-top: -5px;">
					<div><input type="checkbox" id="filter_status_verified"></div>
					<div>Unverified</div>
				</div>
			</div>
			<!-- Search results -->
			 <div>
				<?php
				for ($i = 0; $i < 10; $i++) 
				{
					$id = $i + 1;
				?>
				<div class="result-card" style="cursor: pointer" onclick="SEARCH.viewResult(<?php echo $id; ?>)">
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
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('components/newsletter'); ?>
<script>
    function updatePriceValue(value) {
        document.getElementById('priceValue').textContent = value;
    }
</script>
