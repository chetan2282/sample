<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO product (pname,cat,price,expdate,idno,supp,quant,supad,img)
VALUES ('$_POST[pnm]','$_POST[ca]','$_POST[pr]','$_POST[exp]','$_POST[id]','$_POST[sup]','$_POST[qu]','$_POST[ad]','$_POST[im]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<br>
<br>
<a href="show.php"> GO TO VIEW ADDED PRODUCTS </a>
