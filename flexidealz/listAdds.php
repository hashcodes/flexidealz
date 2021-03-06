
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
<?php

require("config.php");
use DB\MySQL\Query as query;

if(isset($_POST['submit']))
{
	$name =  $_POST['name'];
	$businessName = $_POST['businessName'];  
	$contactNo =  $_POST['contactNo'];
	$emailId = $_POST['emailId'] != null ? $_POST['emailId'] : '';
	$address = $_POST['address'] != null ? $_POST['address'] : '';
	$services = $_POST['services'] != null ? $_POST['services'] : '';
	$imagePath = $_POST['imagePath'] != null ? $_POST['imagePath'] : '';
	$products  =  $_POST['products'] != null ? $_POST['products'] : '';
	$description = $_POST['description'] != null ? $_POST['description'] : '';
	
	if($_POST['bizId'] != null && $_POST['bizId'] != ""){
	 $sql = "UPDATE advertise SET businessName = '".$businessName."', name='".$name."', contactNo='".$contactNo."', emailId='".$emailId."', imagePath='".$imagePath."', address='".$address."', services='".$services."', products='".$products."', description='".$description."' WHERE bizid=".$_POST['bizId'].";";
	}else {
	 $sql = "INSERT INTO advertise (businessName, name, contactNo, emailId, imagePath, address, services, products, description) VALUES ( '$businessName' ,'$name' ,'$contactNo', '$emailId', '$imagePath', '$address', '$services', '$products', '$description')";
	}
	$user = new query($sql);
	/* if($users == true){
      return true;
    }else{
	  return false; 	
	} */
	// businessName name contactNo emailId address services products   description
	// Enter the Code you want to execute after the form has been submitted

	// Dispaly Success or failure Message if any
}
else
{
	// Display the Form and the Submit Button
} 
?>

<div class="main">
<div class="content_white">
  <!-- <h3>List of advertises</h3> -->  
</div> 
<div class="featured_content" id="feature">
<!--   <div class="container"> -->
      <div class="row">
        <div class="col-sm-2">
         <!--Sidebar content-->
         <?php include 'fragments/leftAside.php';?>
       </div>
       <div class="col-sm-10">
          <!--Body content-->
        <div class="panel-heading">List of advertises</div> 
	        <table class="table" style="font-size: small;">
	  		 <?php 
			 /*		require("config.php");
					use DB\MySQL\Query as query;
			 */	
	  		   $users = new query("select * from advertise order by bizid desc");
					
			   $all_users = $users->fetch();
					
			   foreach ($all_users as $user):
			?>
			<tr>
			<?php 		
				print "<td>" . $user['businessName'] . "</td>";
	 			print "<td>" . $user['name'] . " </td> ";
				print "<td>" . $user['contactNo'] . "</td>  ";
				print "<td>" . $user['emailId'] . "</td>  ";
				print "<td>" . $user['address'] . "</td>  ";
				print "<td>" . $user['imagePath'] . "</td>  ";
				//print "<td>" . $user['products'] . " </td> ";
				//print "<td>" . $user['description'] . "</td>  ";
			?> 
			
			<!--  td>
			  <a href="javascript:void(0);"  data-toggle="modal" data-target="#myModal" onclick="">delete</a>
			</td-->
			<td>
			<form action="updateAd.php" method="POST">
			  <input type="hidden" name="bizID" id="bizID" value="<?php print $user['bizid'] ?>"> 	
			  <button type="submit" id="submit" name="submit" class="btn btn-primary">update</button>
		    </form>
			</td>
	 		<tr>
			<?php 			 
				endforeach;
		  	?>
		    </table>
	     </div>
     </div>
   <!-- </div> -->
</div>     
<!-- FOOTER -->   
 <?php include 'fragments/footer.php';?>
</div>
<!--  -->
 <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #2ABB9B;">
        <button type="button" class="close" id="close_modal" data-dismiss="modal" aria-hidden="true">x</button>
        <h4 class="modal-title" style="color: white;">Delete Confirmation</h4>
      </div>
      <div class="modal-body"  style="color: black;">
       	 Are you sure want to delete ?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-primary" onclick="deleteBiz();">Yes</button> 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
function deleteBiz(bizId){
	 $.ajax({url: "delete.php?bizId="+bizId, success: function(result){
		 $('#modal').modal('toggle');
	 }});
}
</script>
</body>
</html>