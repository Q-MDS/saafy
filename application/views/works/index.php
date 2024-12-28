<style>
.instruction-box {
	display: flex;
	flex-direction: column;
	row-gap: 20px;
	max-width: 500px;
	margin-bottom: 30px;
}
.instruction-box.text {
	font-size: 2.8rem;
	line-height: 3.4rem
}
</style>
<div class="container" style="padding-top: 80px; padding-bottom: 80px;">
	<div class="row">
		<div class="two-one-container">
			<div style="background: #ffffff; border-radius: 20px; box-shadow: 0 0 8px #D0D0D0;  padding: 40px">
				<div class="instruction-box">
					<div><img src="<?php echo base_url(); ?>res/images/hiw_1.svg" alt="How it works: Step 1" style="display: block" /></div>
					<div class="text">Search for the service you need on the Home page.</div>
				</div>
				<div class="instruction-box">
					<div><img src="<?php echo base_url(); ?>res/images/hiw_2.svg" alt="How it works: Step 1" style="display: block" /></div>
					<div class="text">Use the filters to select the Location, Price, Rating and Verification Status you are looking for.</div>
				</div>
				<div class="instruction-box">
					<div><img src="<?php echo base_url(); ?>res/images/hiw_3.svg" alt="How it works: Step 1" style="display: block" /></div>
					<div class="text">Browse the Pros provided and click on a option to see the full profile with reviews and photos.</div>
				</div>
				<div class="instruction-box">
					<div><img src="<?php echo base_url(); ?>res/images/hiw_4.svg" alt="How it works: Step 1" style="display: block" /></div>
					<div class="text">Select a professional you like.</div>
				</div>
				<div class="instruction-box" style="margin-bottom: 10px">
					<div><img src="<?php echo base_url(); ?>res/images/hiw_5.svg" alt="How it works: Step 1" style="display: block" /></div>
					<div class="text">Contact them and book your appointment. You can find their contact Info at the bottom of their profile.</div>
				</div>

			</div>
			<div style="display: flex; justify-content: flex-end; background: #FAEAC9; border-radius: 20px; box-shadow: 0 0 8px #D0D0D0;">
				<img src="<?php echo base_url(); ?>res/images/how_it_works_1.png" alt="How it works" style="display: block" />
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('components/newsletter'); ?>
