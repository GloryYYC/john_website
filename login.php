
<?php
session_start();
$conn = new mysqli('mysql.hostinger.co.uk','u150784719_user','cryansEvNec8','u150784719_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="INSERT INTO laptop_default (monSelected, resSelected) VALUES('$_POST[monSelected]','$_POST[resSelected]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
      header("Location:laptop_post_survey(fix).html");
    	exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>
