<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Your Business Here | Grow Your Business Online With Us</title>
	<?php include 'fragments/headTag.php';?>
</head>
<body>
<!-- HEADER -->
<?php include 'fragments/header.php';?>
<!-- <div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>Lorem ipsum dolor sit amet</h1>
      <p>Lorem ipsum dolor sit amet, facilisis egestas sodales non luctus,<br>
        sem quas potenti malesuada vel phasellus.</p>
      <a class="banner_btn" href="about.html">Read More</a> </div>
  </div>
</div>
 -->
<div class="main">
 <div class="content_white">
  <h3>Add Your Business</h3>  
 </div> 
 <div class="featured_content" id="feature">
  <div class="container">
      <div class="row">
       <div class="col-sm-2">
         <!--Sidebar content-->
         <?php include 'fragments/leftAside.php';?>
       </div>
       <div class="col-sm-10">
          <!--Body content-->
		 <form class="form-horizontal" action="listAdds.php" method="POST" name="saveBusiness" id="saveBusiness">
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Business Name</label>
		        <div class="col-xs-10">
		            <input type="text" id="businessName" name="businessName" class="form-control" placeholder="Enter your bisiness name." required="required">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Name</label>
		        <div class="col-xs-10">
		            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required="required">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Contact</label>
		        <div class="col-xs-10">
		            <input type="text" id="contactNo" name="contactNo" class="form-control" placeholder="Enter your contacts" required="required">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Email</label>
		        <div class="col-xs-10">
		            <input type="email" id="emailId" name="emailId" class="form-control" placeholder="Enter your email ids">
		            <!-- <span class="help-block">Please enter a valid email address</span> -->
		        </div>
		    </div><!--has-error  -->
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Image</label>
		        <div class="col-xs-10">
		            <input type="text" id="imagePath"  name="imagePath" class="form-control" placeholder="Enter your image name">
		            <!-- <span class="help-block">Please enter a valid email address</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Address</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="address" name="address" placeholder="Enter your address here"></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Services</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="services" name="services" placeholder="Enter your services here"></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Prducts</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="products" name="products" placeholder="Enter your products here"></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Description</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="description" name="description" placeholder="Enter your description here"></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <!-- <div class="form-group">
        		<div class="col-xs-offset-2 col-xs-10">
            		<button type="submit" class="btn btn-primary">Save</button>
        		</div>
        	 </div> -->
        	 <div class="form-group">
        	   <div class="col-xs-offset-2 col-xs-10">
  				<button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
  				<button type="button" class="btn">Cancel</button>
  			   </div>
			</div>	
		 </form>
        </div>
     </div>
   </div>
</div>
</div>
<!-- FOOTER -->   
 <?php include 'fragments/footer.php';?>
 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider.js"></script>

</body>
</html>