 <?php
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

$sql = "SELECT * FROM `equipment`";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
echo $row['Name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	

<table>
<thead><tr><th>Data</th></tr></thead>
<tbody>
<tr>	
<?php foreach ($row as $num) : ?> 
<td>
<?= htmlspecialchars($num) ?>

</td>
<?php endforeach ?>
</tr>
</tbody>
</table>

</body>
</html>
