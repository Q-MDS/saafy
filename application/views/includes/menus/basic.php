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
    padding: 10px 20px;
    background-color: white;
    border: none;
    text-align: left;
    width: 100%;
    cursor: pointer;
}

.dropdown-item:hover {
    background-color: #f1f1f1;
} 
</style>
<div class="menu-container" style="padding-top: 10px;">
	<div class="menu-item f-al p-0" onclick="MENU.home()"><img src="<?php echo base_url(); ?>res/images/logo_top.svg" alt="Responsive image"></div>
	<div class="menu-item" onclick="MENU.howItWorks()">How it works</div>
	<div class="menu-item" onclick="MENU.about()">About Us</div>
	<div class="menu-item" onclick="MENU.contact()">Contact Us</div>
	
	<div style="position: relative; margin-right: 10px">
		<div class="menu-item" id="login" onclick="toggleDropdown()">Login</div>
		<div id="dropdownMenu" class="dropdown-menu">
			<div class="dropdown-item" style="border-bottom: 1px solid #2b2b2b1a" onclick="ROUTER.login_customer();">
				<span class="fs20 fw700">Customers</span></br>
				<span class="fs16" style="color: #858585">Log in</span>
			</div>
			<div class="dropdown-item">
			<span class="fs20 fw700">Professionals</span></br>
			<span class="fs16" style="color: #858585">Log in</span>
			</div>
		</div>
	</div>
	
	<div class="app-button">Become a Pro</div>
</div>
<script>
	function toggleDropdown() 
	{
		var dropdown = document.getElementById('dropdownMenu');
		dropdown.classList.toggle('show');
		let login = document.getElementById('login');
		login.style.backgroundColor = dropdown.classList.contains('show') ? '#E0D1F1' : 'transparent';
		login.style.borderRadius = dropdown.classList.contains('show') ? '5px' : 'transparent';
	}

	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event) {
		if (!event.target.matches('#login')) {
			var dropdowns = document.getElementsByClassName('dropdown-menu');
			for (var i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
</script>
