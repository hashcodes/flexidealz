<?php
    // Get image string posted from Android App
    $base=$_REQUEST['image'];
	
	$firmname=$_REQUEST['firmname'];
	$propiter=$_REQUEST['propiter'];
	$address=$_REQUEST['address'];
	$contactno=$_REQUEST['contactno'];
	$emailid=$_REQUEST['emailid'];
	$service=$_REQUEST['service'];
	
    // Get file name posted from Android App
    $filename = $_REQUEST['filename'];
    // Decode Image
    $binary=base64_decode($base);
    header('Content-Type: bitmap; charset=utf-8');
    // Images will be saved under 'www/imgupload/uplodedimages' folder
    $file = fopen('images/'.$filename, 'wb');
    // Create File
    fwrite($file, $binary);
    fclose($file);
	
	$servername = "localhost";
    $username = "flexi2xl_fdz";
    $password = "flexiD";
    $dbname = "flexi2xl_flexi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

 $sql = "INSERT INTO registercust (firmname, propname,address,contact,email,service)
VALUES ('$firmname','$propiter','$address','$contactno','$emailid','$service')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  
?>


 