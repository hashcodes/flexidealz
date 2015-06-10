<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "flexi2xl";
$password = "Y4^0I+v9y1U1";
$dbname = "flexi2xl_flexidealz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT firmname FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["firmname "]. "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>