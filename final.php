<?php
$var = $_GET['Name'];
echo $var; 
$sql = "SELECT `quantity` FROM `equipment` WHERE Name=$var AND u_id=1";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$result = $conn->query($sql);  
$row = mysqli_fetch_array($result);
$val =  $row['quantity'];
$val -=1; 
if($val < 0 )
{
	echo "Out of stock ";
}
else{
$sql2 = "UPDATE `equipment` SET `quantity`=$val WHERE  Name=$var AND u_id=1";
if ($conn->query($sql2) === TRUE) {
   echo " record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
//echo $val;
$conn->close();

?>