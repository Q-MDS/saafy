<div class="responsive-div">
	<div class="flex-col" style="width: 100%; padding: 50px;">
	<div style="justify-items: center; width: 100%;"><img src="<?php echo base_url(); ?>res/images/logo_login.svg" alt="Customer login" style="display: block" /></div>
		<div class="flex-row" style="align-items: center; padding-top: 30px; column-gap: 30px;">
			<div class="flex-col" style="flex: 1;">
				<div class="fs18 fw400">First Name</div>
				<div><input type="text" id="first_name" style="width: 100%" placeholder="First Name" /></div>
			</div>
			<div class="flex-col" style="flex: 1">
				<div class="fs18 fw400">Last Name</div>
				<div><input type="text" id="last_name" style="width: 100%" placeholder="Last Name" /></div>
			</div>
		</div>

		<div class="flex-row" style="align-items: center; padding-top: 10px; column-gap: 30px;">
			<div class="flex-col" style="flex: 1;">
				<div class="fs18 fw400">Email</div>
				<div><input type="text" id="first_name" style="width: 100%" placeholder="Email" /></div>
			</div>
		</div>

		<div class="flex-row" style="align-items: center; padding-top: 10px; column-gap: 30px;">
			<div class="flex-col" style="flex: 1;">
				<div class="fs18 fw400">Password</div>
				<div><input type="text" id="cred_two" style="width: 100%" placeholder="Password must be 8 characters and include at least one special symbol (like !, @, #, or $)" /></div>
			</div>
		</div>

		<div class="flex-row" style="align-items: center; padding-top: 10px; column-gap: 30px;">
			<div class="flex-col" style="flex: 1;">
				<div class="fs18 fw400">Password Confirm</div>
				<div><input type="text" id="cred_two_confirm" style="width: 100%" placeholder="Confirm Password" /></div>
			</div>
		</div>

		<div class="flex-row" style="align-items: center; padding-top: 10px; column-gap: 10px;">
			<div><input type="checkbox" id="terms"/></div>
			<div><label for="terms" style="font-weight: normal; padding: 0px; margin: 0px;">I agree to T's & C's</label></div>
		</div>

		<div class="flex-row" style="align-items: center; padding-top: 10px; column-gap: 10px;">
			<div><input type="checkbox" id="privacy"/></div>
			<div><label for="privacy" style="font-weight: normal; padding: 0px; margin: 0px;">I agree to Privacy Policy</label></div>
		</div>
		
		<div class="app-button" style="margin-top: 25px;" onclick="ROUTER.customer_signup_confirm()">Sign up</div>
		<div style="margin-top: 25px; text-align: center">Already have an account? <span style="font-style: italic; text-decoration: underline; cursor: pointer" onclick="ROUTER.customer_login()">Log in</span></div>
	</div>
</div>
