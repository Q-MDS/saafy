<div class="responsive-div" style="position: relative">
	<div class="flex-col"  style="width: 100%; padding: 35px; box-sizing: border-box; row-gap: 20px;">
		<div class="flex-row">
			<div class="fs25 fw700">Write a review</div>
		</div>
		<div style="background: #2b2b2b1A; height: 1px; margin-top: 10px; margin-bottom: 10px;"></div>
		<div class="fs18 fw700">Rate the service</div>
		<div><img src="<?php echo base_url(); ?>res/images/stars_rate.svg" alt="Rate the service" style="display: block" /></div>
		<div class="fs18 fw700">Select the service</div>
		<div style="width: 100%;"><?php echo form_dropdown('select_service', '', '', 'style="width: 100%"'); ?></div>
		<div class="fs18 fw700">Message</div>
		<div><textarea style="width: 100%; height: 250px;" placeholder="What did you like or dislike? What is this company doing well, or how can they improve? Remember to be honest, helpful, and constructive!"></textarea></div>
		<div style="background: #2b2b2b1A; height: 1px; margin-top: 10px; margin-bottom: 10px;"></div>
		<div class="flex-row" style="width: 100%; column-gap: 30px;">
			<div class="alt-button" style="flex: 1" onclick="hideFormOverlay()">Cancel</div>
			<div class="app-button" style="flex: 1">Submit</div>
		</div>
		<div style="position: absolute; top: 10px; right: 10px; cursor: pointer;" onclick="hideFormOverlay()"><img src="<?php echo base_url(); ?>res/images/close.svg" alt="Write review" style="display: block" /></div>
	</div>
	
</div>
