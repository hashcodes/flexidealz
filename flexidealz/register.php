<?php
 session_start();
 session_destroy();
 session_start();
 
 require("config.php");
 use DB\MySQL\Query as query;
 
if($_GET["email"] && $_GET["firstname"] && $_GET["lastname"] && $_GET["passwd"] )
{
	if($_GET["passwd"]==$_GET["confirm-passwd"])
	{
      $sql = "insert into user (firstName,lastName,email,password)values('$_GET[firstname]','$_GET[lastname]','$_GET[email]','$_GET[passwd]')";
      $result = new query($sql);  		
      print "<h1>you have registered sucessfully</h1>";
      print "<a href='index.php'>go to login page</a>";
	}
	else print "passwords doesnt match";
}
else print"invaild input data";

?>