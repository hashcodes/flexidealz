<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<head>
	<?php include 'fragments/headTag.php';?>
</head>

<body>
 <!-- HEADER -->
 <?php include 'fragments/header.php';?>
	<div class="about">
		<div class="container">
			<section class="title-section">
				<h1 class="title-header">Contact Us</h1>
			</section>
		</div>
	</div>
	<div class="contact">
		<div class="container">
			<!-- <div class="row contact_top">
      <div class="col-md-4 contact_details">
        <h5>Mailing address:</h5>
        <div class="contact_address">address</div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Call us:</h5>
        <div class="contact_address"> +91 9876543210<br>
        </div>
      </div>
      <div class="col-md-4 contact_details">
        <h5>Email us:</h5>
        <div class="contact_mail"> contact@flexidealz.in</div>
      </div>
    </div> -->
			<div class="contact_bottom">
				<h3>Contact Form</h3>
				<p>Please complete the form below. We'll do everything we can to
					respond to you as quickly as possible.</p>
				<p>
					You can get to promote your business .<a
						href="http://goo.gl/forms/W3iPzxdEDL"
						title="Register here to promote your business" target="_blank"
						style="color: #FF4000">Click here to Register</a>
				</p>
				<form method="post" action="send_form_email.php"
					enctype="multipart/form-data">
					<div class="contact-to">
						<!-- onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';} -->
						<input type="text" class="text" id="name" name="name"
							required="required" placeholder="Enter your name"> <input
							type="text" class="text" id="email" name="email"
							required="required" placeholder="Enter your email / contact no."
							style="margin-left: 10px"> <input type="text"
							class="text" id="message" name="message" required="required"
							placeholder="Subject" style="margin-left: 10px">
					</div>
					<div class="text2">
						<textarea placeholder="Message:" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
					</div>
					<div>
						<input type="submit" class="submit" value="Send Message">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer_bottom">
			<div class="follow-us">
				<a class="fa fa-facebook social-icon"
					href="https://www.facebook.com/Flexidealz.in?ref=br_rs"
					target="_blank" title="facebook"></a> <a
					class="fa fa-twitter social-icon"
					href="https://twitter.com/Flexideals" title="Twitter"
					target="_blank"></a> <a class="fa fa-linkedin social-icon" href="#"
					target="_blank"></a> <a class="fa fa-google-plus social-icon"
					href="#" target="_blank"></a>
			</div>
			<div class="copy">
				<p>
					Copyright &copy; 2015 Flexi Dealz. Design by 
					<a href="termsAndConditions.html" title="Terms and Privacy">Terms and Conditions</a>				
				</p>
			</div>
		</div>
	</div>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
</body>
</html>
