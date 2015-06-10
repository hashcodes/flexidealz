 <?php 
	 	require("config.php");
		use DB\MySQL\Query as query;
		
  		$delete_add = new query("delete from Advertise where bizid = ".$_POST['bizid'].";");
 ?>
	