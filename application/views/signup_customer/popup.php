<style>
	.popup-two-container {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	align-items: flex-start;
	max-width: 800px;
	/* height: 70px; */
}
.popup-left-col {
	padding: 30px; 
	padding-right: 10px;
	max-width: 400px; 
	height: 100%; 
	background: #FFF; 
	border-radius: 20px 0px 0px 20px;
}
.popup-right-col {
	position: relative;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	padding: 30px; 
	max-width: 400px; 
	height: 100%; 
	background: #F6F9FC; 
	border-radius: 0px 20px 20px 0px;
}
@media (max-width: 945px) {
	.popup-two-container {
		grid-template-columns: 1fr; /* 2 columns for medium screens */
		row-gap: 24px;
	}
	.popup-left-col {
		border-radius: 20px 20px 0px 0px;
	}
	.popup-right-col {
		border-radius: 0px 0px 20px 20px;
	}
}

@media (max-width: 480px) {
	.popup-two-container {
		grid-template-columns: 1fr; /* 1 column for small screens */
		row-gap: 24px;
	}
	.popup-left-col {
		border-radius: 20px 20px 0px 0px;
	}
	.popup-right-col {
		border-radius: 0px 0px 20px 20px;
	}
}
</style>
<div class="popup-two-container">
	<div class="popup-left-col">
		<div><img src="<?php echo base_url(); ?>res/images/join_customer.svg" alt="Join as a customer" style="display: block" /></div>
		<div class="fs25 w700" style="padding-top: 40px;">Join as a customer</div>
		<div class="flex-row" style="flex-grow: 2; padding-top: 10px;">
			<div><img src="<?php echo base_url(); ?>res/images/purple_tick.svg" alt="Tick" style="display: block" /></div>
			<div class="fs15">Easily find trusted professionals for your needs.</div>
		</div>
		<div class="flex-row">
			<div><img src="<?php echo base_url(); ?>res/images/purple_tick.svg" alt="Tick" style="display: block" /></div>
			<div class="fs15">Read and leave reviews to ensure quality.</div>
		</div>
		<div class="flex-row">
			<div><img src="<?php echo base_url(); ?>res/images/purple_tick.svg" alt="Tick" style="display: block" /></div>
			<div class="fs15">Favourite services for quick access later.</div>
		</div>
		

	</div>
	<div class="popup-right-col">
		<div class="fs25 fw700">Create an account</div>
		<div class="fs16" style="margin-top: 15px;">Already have an account? <u>Sign in</u></div>
		<div class="app-button" style="margin-top: 30px;">Sign up as customer</div>
		<div style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="hideFormOverlay()"><img src="<?php echo base_url(); ?>res/images/close.svg" alt="Close" style="display: block" /></div>
	</div>
</div>
