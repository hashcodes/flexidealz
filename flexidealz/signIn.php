<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<head>
	<?php include 'fragments/headTag.php';?>
</head>
<body>
	<div class="header">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="images/flexideals.png" class="img-responsive" alt="Flexi Dealz" /></a>
			<div class="menu">
				<a class="toggleMenu" href="javascript:void(0);">
				<img src="images/nav_icon.png" alt="" data-toggle="modal" data-target="#myModal" /> </a>
				<ul class="nav" id="nav">
					<li class="current"><a href="index.php">Home</a></li>
					<li class="current"><a href="about.html">About Us</a></li>
					<!-- <li><a href="services.html">Services</a></li> -->
					<li><a href="contact.html">Contact Us</a></li>
 				</ul>
				<script type="text/javascript" src="js/responsive-nav.js"></script>
			</div>
		</div>
	</div>
<!-- 
   <div class="about">
		<div class="container">
			<section class="title-section img-responsive">
				<h1 class="title-header">About Us</h1>
			</section>
		</div>
   </div>
 -->
<div class="about_content"><!-- style="background-image: url('images/bg.jpg');"  -->
      <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
              <div class="panel-heading">
                  <div class="panel-title">Sign In</div>
                  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
              </div>     

      <div style="padding-top:30px" class="panel-body" >
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
              <form id="loginform" class="form-horizontal" role="form">
                  <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                 </div>
                 <div style="margin-bottom: 25px" class="input-group">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                 </div>
                 <div class="input-group">
                           <div class="checkbox">
                             <label>
                               <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                             </label>
                           </div>
                         </div>
                      <div style="margin-top:10px" class="form-group">
                         <!-- Button -->
                          <div class="col-sm-12 controls">
                           <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                           <!-- <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a> -->
                          </div>
                     </div>
                      <div class="form-group">
                         <div class="col-md-12 control">
                             <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                 Don't have an account! 
                             <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                                </div>
                            </div>
                        </div>    
                    </form>     
                 </div>                     
            </div>  
     </div>
<div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
         <div class="panel panel-info">
             <div class="panel-heading">
                 <div class="panel-title">Sign Up</div>
                 <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
             </div>  
             <div class="panel-body" >
                 <form id="signupform" class="form-horizontal" role="form">
                     
                     <div id="signupalert" style="display:none" class="alert alert-danger">
                         <p>Error:</p>
                         <span></span>
                     </div>
                        
                     <div class="form-group">
                         <label for="email" class="col-md-3 control-label">Email</label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" name="email" placeholder="Email Address">
                         </div>
                     </div>
                         
                     <div class="form-group">
                         <label for="firstname" class="col-md-3 control-label">First Name</label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" name="firstname" placeholder="First Name">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="lastname" class="col-md-3 control-label">Last Name</label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="password" class="col-md-3 control-label">Password</label>
                         <div class="col-md-9">
                             <input type="password" class="form-control" name="passwd" placeholder="Password">
                         </div>
                     </div>
                         
                     <div class="form-group">
                         <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" name="icode" placeholder="">
                         </div>
                     </div>

                     <div class="form-group">
                         <!-- Button -->                                        
                         <div class="col-md-offset-3 col-md-9">
                             <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                             <span style="margin-left:8px;">or</span>  
                         </div>
                     </div>
                     
                     <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                           <div class="col-md-offset-3 col-md-9">
                               <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                           </div>                                           
                    </div>
                </form>
             </div>
          </div>
  	  </div> 
 	</div> 
 </div>
</div>
	<!-- <div class="highlight-info">
  <div class="overlay spacer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-smile-o fa-5x"></i>
          <h4>120+ Happy Clients</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-check-square-o fa-5x"></i>
          <h4>600+ Projects Completed</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-trophy fa-5x"></i>
          <h4>25 Awards Won</h4>
        </div>
        <div class="col-sm-3 col-xs-6"> <i class="fa fa-map-marker fa-5x"></i>
          <h4>3 Offices</h4>
        </div>
      </div>
    </div>
  </div>
</div> -->
	<!-- <div class="testimonial-area">
  <div class="testimonial-solid">
    <div class="container">
      <h2>Client Testimonials</h2>
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""> <a href="#"></a> </li>
          <li data-target="#carousel-example-generic" data-slide-to="3" class=""> <a href="#"></a> </li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Jane Doe -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- John Smith -</strong></p>
          </div>
          <div class="item">
            <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation."</p>
            <p><strong>- Linda Smith -</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
    
 	<!-- FOOTER -->   
 	<?php include 'fragments/footer.php';?>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
</body>
</html>