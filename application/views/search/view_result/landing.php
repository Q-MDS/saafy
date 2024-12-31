<style>
.search-view-container {
	display: grid;
	grid-template-columns: 125px 1fr 125px;
	width: 100%;
	align-items: flex-start;
}
@media (max-width: 945px) {
	.search-view-container {
		grid-template-columns: 1fr; /* 2 columns for medium screens */
		row-gap: 24px;
	}
}

@media (max-width: 480px) {
	.search-view-container {
		grid-template-columns: 1fr; /* 1 column for small screens */
		row-gap: 24px;
	}
}
</style>
<div style="display: flex; flex-grow: 1; width: 100%; min-height: 125px;">
	<div class="container">
		<div class="row" style="padding: 30px 0px;">
			<!-- <div class="two-container" style="align-items: center;"> -->
				<div style="display: flex; flex-direction: column;">
					<div id="search_bread_crumbs" style="display: flex; align-items: center; font-size: 1.5rem; column-gap: 5px; color: #2b2b2b;">
						<div style="color: #AFB0BD">Home</div>
						<div>|</div>
						<div style="color: #AFB0BD">Plumber Search Results</div>
						<div>|</div>
						<div>GB Plumbing and Renovations</div>
					</div>
				</div>
		</div>

		<div class="row">
			<div class="search-view-container">
				<div>&nbsp;</div>
				<div style="position: relative">
					<img src="<?php echo base_url(); ?>res/images/search_view_placeholder.jpg" alt="Company main picture" style="display: block; max-width: 100%" />
					<div style="position: absolute; top: 17px; right: 17px">
						<div id="show_verified" class="verified">
							<div><img src="<?php echo base_url(); ?>res/images/verified_icon.svg" alt="Verified" style="display: block" /></div>
							<div>Verified</div>
						</div>
					</div>
					<div style="position: absolute; top: 50%; left: 17px">
						<img src="<?php echo base_url(); ?>res/images/slider_left_off.svg" alt="Verified" style="display: block" />
					</div>
					<div style="position: absolute; top: 50%; right: 17px">
						<img src="<?php echo base_url(); ?>res/images/slider_right_on.svg" alt="Verified" style="display: block" />
					</div>
				</div>
				<div>&nbsp;</div>
			</div>
		</div>
	</div>
</div>
