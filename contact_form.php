<html>
<body>
<?php
$conn = new mysqli('mysql.hostinger.co.uk','u150784719_user','cryansEvNec8','u150784719_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="INSERT INTO contact_form (first_name, last_name,tel,email,comment) VALUES('$_POST[fname]','$_POST[lname]','$_POST[tel]','$_POST[email]','$_POST[comment]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
      header("Location:contact.html");
    	exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>
</body>
</html>
