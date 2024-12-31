<style>
	.search-bar-container {
		display: grid;
		grid-template-columns: auto 1fr auto auto; 
		column-gap: 20px;
		align-items: center;
		column-gap: 20px;
		width: 100%;
		min-height: 90px;
	}
	.search-bar {
		display: flex; 
		align-items: center; 
		justify-content: center;
		padding-left: 70px; 
		padding-right: 70px;
	}
	@media (max-width: 945px) {
		.search-bar-container {
			grid-template-columns: repeat(1, 1fr); /* 2 columns for medium screens */
			row-gap: 24px;
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.search-bar {
			padding-left: 0px;
			padding-right: 0px;
		}
	}

	@media (max-width: 480px) {
		.search-bar-container {
			grid-template-columns: repeat(1, 1fr); /* 1 column for small screens */
			row-gap: 24px;
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.search-bar {
			padding-left: 0px;
			padding-right: 0px;
		}
	}
</style>
<div class="search-bar-container">
	<div><img src="<?php echo base_url(); ?>res/images/logo_top.svg" alt="Saaafy logo"></div>
	<div class="search-bar">
		<div style="display: flex; align-items: center; justify-content: center; width: 50px; height: 59px; background: #fff; border-radius: 30px 0px 0px 30px; border: 1px solid #EAEAEA; border-right: 0px;">
			<img src="<?php echo base_url(); ?>res/images/search_outline.svg" alt="Search" style="display: block" />
		</div>
		<div style="display: flex; align-items: center; flex: 1; height: 59px; background: #fff; border: 1px solid #EAEAEA; border-left: 0px; border-right: 0px;">
			<input type="text" id="search_topic" style="border: 0px; width: 100%" placeholder="Search for a professional?" />
		</div>
		<div style="display: flex; align-items: center; width: 150px; height: 59px; background: #fff; border: 1px solid #EAEAEA; border-left: 0px; border-right: 0px;">
			<input type="text" id="search_location" style="border: 0px; width: 100%" placeholder="Location" />
		</div>
		<div style="display: flex; align-items: center; justify-content: center; width: 50px; height: 59px; background: #fff; border-radius: 0px 30px 30px 0px; border: 1px solid #EAEAEA; border-left: 0px; cursor: pointer;" onclick="SEARCH.setSearch()">
			<img src="<?php echo base_url(); ?>res/images/search_full.svg" alt="Search" style="display: block" />
		</div>
	</div>
	<div>Login</div>
	<div class="app-button">Become a Pro</div>
</div>
