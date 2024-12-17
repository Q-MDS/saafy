<?php
switch ($intro_type)
{
	case "Works":
		$title = "How it Works";
		$sub_title = "Finding a good, reliable service provider should be an easy process. SAAFY was created to make the process of finding all the amazing service providers a much easier process.";
	break;
	case "About":
		$title = "Uncover Our Story";
		$sub_title = "Welcome to SAAFY, your go-to platform for convenient access to a variety of craft services. We're not just a website; we're a fresh online community celebrating skilled artisans worldwide.";
	break;
}
?>
<div style="background: #d4e3fe; flex: 3;">
	<div class="d-flex justify-content-center align-items-center"  style="height: 445px">
		<div class="container text-center d-flex flex-column justify-content-center align-items-center">
			<div class="col"><?php echo $title; ?></div>
			<div class="col"><?php echo $sub_title; ?></div>
		</div>
	</div>
</div>
