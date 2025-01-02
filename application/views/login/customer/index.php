<style>
    .responsive-div {
        display: flex;
        width: 100%;
        max-width: 650px;
        margin: 0 auto;
		background: #fff;
		border-radius: 20px;
    }

    @media (max-width: 768px) {
        .responsive-div {
            width: 90%; /* Adjust the width for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .responsive-div {
            width: 90%; /* Full width for very small screens */
        }
    }
</style>
<div class="responsive-div">
    <div class="flex-col" style="width: 100%; padding: 60px 40px;">
		<div style="justify-items: center; width: 100%;"><img src="<?php echo base_url(); ?>res/images/logo_login.svg" alt="Customer login" style="display: block" /></div>
		<div class="fs22 fw400">Email</div>
		<div><input type="text" style="width: 100%" /></div>
		<div class="fs22 fw400">Password</div>
		<div><input type="text" style="width: 100%" /></div>
		<div class="flex-row" style="justify-content: space-between; margin-top: 20px;">
			<div><input type="checkbox"/> Remember me</div>
			<div><a href="#">Forgot password?</a></div>
		</div>
		<div class="app-button">Log in</div>
		<div>Don’t have an account? Sign up</div>
	</div>
</div>
