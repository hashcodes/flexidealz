<!DOCTYPE html>
<html lang="en">

<head>
<title>Flexi Dealz | Grow Your Business Online With Us</title>
	<?php include 'fragments/headTag.php';?>
	<style type="text/css">
		.zoom_img img{
/* 		 margin:50px;
		 height:100px;
		 width:100px;
 */		 -moz-transition:-moz-transform 0.5s ease-in; 
		 -webkit-transition:-webkit-transform 0.5s ease-in; 
		 -o-transition:-o-transform 0.5s ease-in;
		}
		.zoom_img img:hover{
		 -moz-transform:scale(1.2); 
		 -webkit-transform:scale(1.2);
		 -o-transform:scale(1.2);
		}
	</style>
</head>
<body>
<!-- HEADER -->
<?php include 'fragments/header.php';?>

<!-- <div class="banner text-center">
  <div class="container">
    <div class="banner-info">
      <h1>Flexidealz | For society From society</h1>
      <p>We providing platfporm for promoting your business online.</p>
      <a class="banner_btn" href="about.html">Read More</a> </div>
  </div>
</div>
<center> 
 	 <a href="http://goo.gl/forms/W3iPzxdEDL" title="Register here to promote your business" target="_blank" style="color : #FF4000;">
  		<img alt="" src="images/99.png" class="img-responsive">
     </a> 
    </center>
 -->
<div class="main">
  <div class="content_white" style="padding: 10px;">
	  <div class="col-sm-9">
  		<a href="fd_deool_band/index.html" target="_blank" style="float: right; margin-right: 5px;">
  			<img alt="Deool Band Marathi Movie" title="Deool Band Marathi Movie" src="images/banner_deool_band.jpg" class="img-responsive">
  		</a>
   	  </div>
  	  <div class="col-sm-3">
  		<img alt="" src="images/offer.png"  class="img-responsive">
  	  </div> 	
  </div> 
<div class="featured_content" id="feature">
 <div class="container">
  <!-- /.row -->		
  <div class="row">
   <div class="col-sm-12">
   	<div class="col-sm-9">
	 	      <?php 
				require("config.php");
				use DB\MySQL\Query as query;
		 		$users = new query("SELECT * FROM advertise ORDER BY bizid DESC");
		 		$all_users = $users->fetch();
		 		
		 	   $i = 0;
		 	   foreach ($all_users as $user):
		 	   $i++;
			  ?>
		  	    <div class="col-xs-6 col-md-3">
		  	       <div class="zoom_img">
  	 			    <a href="javascript:void(0);"> 
  	 			     <img class="img-responsive"  id="<?php print $i ?>" onclick="setModal(this);" src="images/<?php print $user['imagePath'] ?>"
                 		  alt="<?php print $user['businessName'] ?>" data-toggle="modal" data-target="#myModal" style="z-index: 99999">
                  	</a>
                   </div>	
                     
		            <div id = "inputs<?php print $i ?>" style="display: none;">
		                <input type="hidden" id="businessName" value="<?php print $user['businessName'] ?>">
		                <input type="hidden" id="name" value="<?php print $user['name']?>">
					    <input type="hidden" id="address" value="<?php print $user['address']?>">
		                <input type="hidden" id="contactNo" value="<?php print $user['contactNo'] ?>">
		                <input type="hidden" id="emailId" value="<?php print $user['emailId'] ?>"> 
		                <input type="hidden" id="service" value="<?php print $user['services']  ?>">
		            </div>
			   </div>
			   <?php if($i % 4 == 0){ ?>
		 	     <div class="clearfix"> &nbsp; </div>
		 	   <?php } ?>      
		    <?php 			 
				endforeach;
	 	   	?>	 	   	
   	  </div>
      <div class="col-sm-3">
     	<iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-143629576681012596' frameborder=0 height=250 width=300></iframe>
        <div class="clearfix"> &nbsp; </div>
     	<div data-WRID="WRID-143629617700754513" data-widgetType="featuredDeals"  data-class="affiliateAdsByFlipkart" height="250" width="300"></div><script async src="//affiliate-static.flixcart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
        <div class="clearfix"> &nbsp; </div>	
     	<div data-WRID="WRID-143629627907878536" data-widgetType="relatedProducts"  data-class="affiliateAdsByFlipkart" height="250" width="300"></div><script async src="//affiliate-static.flixcart.com/affiliate/widgets/FKAffiliateWidgets.js"></script>
      </div>
      </div>
      <!-- /.row --> 
     </div>
    <div class="row">&nbsp;</div>
    <!--  --> 
	 <div class="modal fade" id="myModal" tabindex="-1">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header"  style="background-color: #2ABB9B;">
	        <button type="button" class="close" id="close_modal" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" style="color: white;">Information</h4>
	      </div>
	      <div class="modal-body"  style="color: black;">
	        <p id="_businessName" style="text-align: center; font-weight: bold;"></p>
	        <p id="_name"></p>
	        <p id="_address"></p>
	        <p id="_contactNo"></p>
	        <p id="_emailId"></p>
	        <p id="_service"></p>
	       </div>
	       <div class="modal-footer">
	       <div class="modal-body" style="font-size: small; text-align: left;padding: 0px;">
	         When you call, don't forget to mention that you found this ad on Flexidealz.in
	       </div>
	         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	 
  </div> 
 </div>
  <!-- FOOTER -->   
 <?php include 'fragments/footer.php';?>
</div>

<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider.js"></script>
<script>
function setModal(id){
  	var div = "#inputs"+$(id).attr('id');
	
	$(div).find('input').each(function() {
    	//console.log($(this).val()+" "+$(this).attr('id'));
    	var input_id = "#_"+$(this).attr('id');
    	$(input_id).html($(this).val());
     });

	$("#_name").html("<b>Name : </b>" + $("#_name").html());
	$("#_address").html("<b>Address : </b>" + $("#_address").html());
	// $("#_contact").text().split(",")[0]
	
	var contact_array = $("#_contactNo").text().trim().split(",");
	//console.log($("#_contactNo").text());
	var a_contact;
	//console.log(contact_array.length);
 	for(var i = 0; i < contact_array.length; i++) {
	   // Trim the excess whitespace.
	   // contact_array[i] = contact_array[i].replace(/^\s*/, "").replace(/\s*$/, ""); 
		if(i >= 1){
		 a_contact = a_contact + ",<a href='tel:" + contact_array[i] + "'>" + contact_array[i] + "</a>";
		}else{
		 a_contact = "<a href='tel:" + contact_array[i] + "'>" + contact_array[i] + "</a>";	
		}
	   // Add additional code here, such as :
	   // console.log(contact_array[i]);
	}
 	
	$("#_contactNo").html("<b>Contact : </b>" + a_contact +"<br>");
	if($("#_emailId").text() != ""){
		$("#_emailId").html("<b>Email Id : </b>" + $("#_emailId").html() +"<br>");
	}
	$("#_service").html("<b>Services Offered: </b><br>" + $("#_service").html());
}
</script>
</body>
</html>