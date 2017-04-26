<html>
<body>
<?php
session_start();
$conn = new mysqli('mysql.hostinger.co.uk','u150784719_user','cryansEvNec8','u150784719_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="INSERT INTO user_data (user_Name, user_Password,user_Email) VALUES('$_POST[username]','$_POST[signUpPassword]','$_POST[signUpEmail]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
      header("report.html");
    	exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>
</body>
</html>
