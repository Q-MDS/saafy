<style>
	/* styles.css */
/* .menu-container {
    position: relative;
    display: flex;
    align-items: center;
}

.app-button {
    cursor: pointer;
    padding: 10px 20px;
    background-color: #635BFF;
    color: white;
    border: none;
    border-radius: 5px;
    position: relative;
}*/

.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 100%;
    background-color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
    overflow: hidden;
	width: 200px;
}

.dropdown-menu.show {
    display: block;
}

.dropdown-item {
    padding: 10px 10px;
    background-color: white;
    border: none;
    text-align: left;
    width: 100%;
    cursor: pointer;
	border-bottom: 1px solid #2b2b2b1A;
	box-sizing: border-box;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
} 
</style>
<div class="menu-active-container" style="padding-top: 10px;">
	<div class="menu-item f-al p-0" onclick="MENU.home()"><img src="<?php echo base_url(); ?>res/images/logo_top.svg" alt="Responsive image"></div>
	<div class="menu-item" onclick="MENU.howItWorks()">How it works</div>
	<div class="menu-item" onclick="MENU.about()">About Us</div>
	<div class="menu-item" onclick="MENU.contact()">Contact Us</div>
	
	<div id="profile" class="flex-row" style="justify-content: flex-end; column-gap: 10px; cursor: pointer; position: relative; padding: 5px 10px;">
		<div style="width: 36px; height: 36px; border-radius: 18px;" onclick="toggleDropdown()"><img src="<?php echo base_url(); ?>res/images/profile_pic.png" alt="Profile picture"></div>
		<div onclick="toggleDropdown()">Harry Potter Jones</div>
		<div onclick="toggleDropdown()"><img src="<?php echo base_url(); ?>res/images/caret_down.svg" alt="Profile menu"></div>
		<div id="dropdownMenu" style="display: none; position: absolute; top: 100%; right: 0px; z-index: 10; width: 100%;">
			<div class="dropdown-item" onclick="ROUTER.customer_bookmarks()">Your Bookmarks</div>
			<div class="dropdown-item" onclick="ROUTER.customer_reviews()">Your Reviews</div>
			<div class="dropdown-item" onclick="ROUTER.customer_account()">Account</div>
			<div class="dropdown-item">Logout</div>
		</div>
	</div>
</div>
<script>
	function toggleDropdown() 
	{
		let profile = document.getElementById('profile');
		let dropdown = document.getElementById('dropdownMenu');
		
		if (dropdown.style.display === "block") 
		{
			profile.style.backgroundColor = 'transparent';
			dropdown.style.display = "none";
		} 
		else 
		{
			profile.style.backgroundColor = '#E0D1F1';
			profile.style.borderRadius = '5px 5px 0px 0px';
			dropdown.style.display = "block";
		}
		
		// dropdown.classList.toggle('show');
		// let login = document.getElementById('login');
		// login.style.backgroundColor = dropdown.classList.contains('show') ? '#E0D1F1' : 'transparent';
		// login.style.borderRadius = dropdown.classList.contains('show') ? '5px' : 'transparent';
	}

</script>
