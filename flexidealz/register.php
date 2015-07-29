<?php
 session_start();
 session_destroy();
 session_start();
 
 require("config.php");
 use DB\MySQL\Query as query;
 
/* if($_GET["email"] && $_GET["firstname"] && $_GET["lastname"] && $_GET["passwd"] )
{
if($_GET["passwd"]==$_GET["confirm-passwd"])
	{
 */	
      $sql = "insert into contest (name,contactNo,ticketNo,imagePath)values('$_POST[name]','$_POST[contactNo]','$_POST[ticketNo]','$_POST[imagePath]')";
      $result = new query($sql);  		
      print "<h1>you have registered sucessfully</h1><a href='index.php'>go to login page</a>";
      //header("Location: contest.html?ya=done");
     // print "<a href='index.html'>go to home page</a>";
/* 	}
	else print "passwords doesnt match";
	 print"invaild input data";
/* } */ 
?>