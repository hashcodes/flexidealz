<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Your Ad | Grow Your Business Online With Us</title>
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
    <h3>Update your ad</h3>  
  </div> 
  <div class="featured_content" id="feature">
  <div class="container">
      <div class="row">
       <div class="col-sm-3">
         <!--Sidebar content-->
         <?php include 'fragments/leftAside.php';?>
       </div>	 
       <div class="col-sm-9">
          <!--Body content-->
          <?php 
		 	require("config.php");
			use DB\MySQL\Query as query;
			
			if(isset($_POST['submit'])){
			  $users = new query("select * from advertise where bizid = ".$_POST['bizID'].";");
  		      $all_users = $users->fetch();
  		     
  		   foreach ($all_users as $user):
	  	?>
	  	    
		 <form class="form-horizontal" action="listAdds.php" method="POST" name="updateAd" id="updateAd">
		   <input type="hidden" id="bizId" name="bizId" value="<?php print $user['bizid'] ?>">
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Business Name</label>
		        <div class="col-xs-10">
		            <input type="text" id="businessName" name="businessName" class="form-control" placeholder="Enter your bisiness name." required="required" value="<?php print $user['businessName'] ?>">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Name</label>
		        <div class="col-xs-10">
		            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required="required" value="<?php print $user['name'] ?>">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Contact</label>
		        <div class="col-xs-10">
		            <input type="text" id="contactNo" name="contactNo" class="form-control" placeholder="Enter your contacts" required="required" value="<?php print $user['contactNo'] ?>">
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Email</label>
		        <div class="col-xs-10">
		            <input type="text" id="emailId" name="emailId" class="form-control" placeholder="Enter your email ids" value="<?php print $user['emailId'] ?>">
		            <!-- <span class="help-block">Please enter a valid email address</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Image</label>
		        <div class="col-xs-10">
		            <input type="text" id="imagePath"  name="imagePath" class="form-control" placeholder="Enter your image name" value="<?php print $user['imagePath'] ?>">
		            <!-- <span class="help-block">Please enter a valid email address</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Address</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="address" name="address" placeholder="Enter your address here"><?php print $user['address'] ?></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Services</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="services" name="services" placeholder="Enter your services here"><?php print $user['services'] ?></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Prducts</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="products" name="products" placeholder="Enter your products here"><?php print $user['products'] ?></textarea>
		            <!-- <span class="help-block">Username is available</span> -->
		        </div>
		    </div>
		    <div class="form-group has-success">
		        <label class="col-xs-2 control-label" for="inputSuccess">Description</label>
		        <div class="col-xs-10">
		            <textarea rows="5" class="form-control" id="description" name="description" placeholder="Enter your description here"><?php print $user['description'] ?></textarea>
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
  				<button type="submit" id="submit" name="submit" class="btn btn-primary">Update changes</button>
  				<a href="/listAdds.php" class="btn btn-danger">Cancel</a>
  			   </div>
			</div>	
		 </form>
		 <?php 			 
			endforeach;
			}
		?>
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