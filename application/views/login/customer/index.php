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
		<div class="fs20 fw400" style="padding-top: 50px;">Email</div>
		<div><input type="text" style="width: 100%" placeholder="Email" /></div>
		<div class="fs20 fw400" style="padding-top: 25px;">Password</div>
		<div><input type="text" style="width: 100%" placeholder="Password" /></div>
		<div class="flex-row" style="justify-content: space-between; margin-top: 30px;">
			<div><input type="checkbox"/> Remember me</div>
			<div style="cursor: pointer" onclick="ROUTER.forgot_customer()">Forgot password?</div>
		</div>
		<div class="app-button" style="margin-top: 25px;">Log in</div>
		<div style="margin-top: 25px; text-align: center">Don’t have an account? <u>Sign up</u></div>
	</div>
</div>
