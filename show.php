<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
    
	echo "<table border='solid black 1px'> <tr> <td> Product NAME : {$row['pname']} </td> </tr> </table> ";
	echo "<table border='solid black 1px'> <tr> <td> Category : {$row['cat']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Product Price: {$row['price']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Expiry Date : {$row['expdate']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Product ID : {$row['idno']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Supplier NAME : {$row['supp']} </td> </tr>  </table>";
	echo "<table border='solid black 1px'> <tr> <td> Quantity : {$row['quant']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Supplier address : {$row['supad']} </td> </tr> </table>";
	echo "<table border='solid black 1px'> <tr> <td> Product Image : {$row['img']} </td> </tr> </table>";
	
	
	echo "<br>";	
    echo "<br>";	
    
	
	} 
}
else {
  echo "0 results";
}
$conn->close();
?>