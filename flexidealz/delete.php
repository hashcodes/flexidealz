 <?php 
	 	require("config.php");
		use DB\MySQL\Query as query;
		
  		$delete_add = new query("delete from advertise where bizid = ".$_POST['bizid'].";");
 ?>
	