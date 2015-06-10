<!DOCTYPE html>
<html lang="en">

<head>
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
<!-- <div class="content_white">
  <h2>Featured Services</h2>
  <center><img alt="" src="images/99.png" class="img-responsive"></center>
 </div> -->
  <center><a href="http://goo.gl/forms/W3iPzxdEDL" title="Register here to promote your business" target="_blank" style="color : #FF4000"><img alt="" src="images/99.png" class="img-responsive"></a></center>
  <br>
<div class="featured_content" id="feature">
  <div class="container">
     <?php 
		require("config.php");
		use DB\MySQL\Query as query;
 		$users = new query("select * from Advertise");
 		$all_users = $users->fetch();
 		
 	  $i = 0;
 	  foreach ($all_users as $user):
 	   $i++;
	 ?>
	<?php if($i % 4 == 0){ ?>
 	 	<!-- /.row -->		
 	    <div class="row">
 	    <?php } ?>
 	    
		<div class="col-xs-6 col-md-3">
            <a href="javascript:void(0);">
                <img class="img-responsive" id="<?php print $i ?>" onclick="setModal(this);" src="images/<?php print $user['imagePath'] ?>" alt="<?php print $user['businessName'] ?>" data-toggle="modal" data-target="#myModal">
            </a>
            <div id = "inputs<?php print $i ?>" style="display: none;">
                <input type="hidden" id="businessName" value="<?php print $user['businessName'] ?>">
                <input type="hidden" id="name" value="<?php print $user['name']?>">
			    <input type="hidden" id="address" value="<?php print $user[' address']?>">
                <input type="hidden" id="contactNo" value="<?php print $user['contactNo'] ?>">
                <input type="hidden" id="emailId" value="<?php print $user['emailId'] ?>"> 
                <input type="hidden" id="service" value="<?php print $user['services']  ?>">
            </div>
	     </div>
		<?php if($i % 4 == 0){ ?>
 	 	<!-- /.row -->		
 	    </div>
 	    <div class="row">&nbsp;</div>
 	    <?php } ?>     
   <?php 			 
		endforeach;
   	?>
    <div class="row">&nbsp;</div>
   </div>   
   <div class="row">&nbsp;</div>
</div> 
 
 <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #2ABB9B;">
        <button type="button" class="close" id="close_modal" data-dismiss="modal" aria-hidden="true">×</button>
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
	
	var contact_array = $("#_contactNo").text().split(",");
	//console.log($("#_contactNo").text());
	var a_contact;
	console.log(contact_array.length);
 	for(var i = 0; i < contact_array.length; i++) {
	   // Trim the excess whitespace.
	   // contact_array[i] = contact_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
		a_contact = "<a href='tel:" + contact_array[i] + "'>" + contact_array[i] + "</a>";
		a_contact = a_contact + ",<a href='tel:" + contact_array[i] + "'>" + contact_array[i] + "</a>";
	   // Add additional code here, such as:
	   // console.log(contact_array[i]);
	}
 	
	$("#_contactNo").html("<b>Contact : </b>" + a_contact +"<br>");
	if($("#_emailId").text() != ""){
		$("#_emailId").html("<b>Email Id : </b>" + $("#_emailId").html() +"<br>");
	}
	$("#_service").html("<b>Services Offered: </b><br>" + $("#_service").html());
}

$(document).keypress(function(e) { 
    if (e.keyCode == 28) { 
        $('#modal').modal('toggle');
        //or
        //window.close();
    } 
});
</script>
</body>
</html>