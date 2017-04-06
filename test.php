<html>
<body>
<?php
session_start();
$conn = new mysqli('mysql.hostinger.co.uk','u200571408_user','cryansEvNec8','u200571408_db1');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="INSERT INTO laptop_default (monSelected, resSelected, finishSelected, osSelected, cpuSelected,ramSelected,hdSelected,graphicsSelected,batterySelected,timeTaken,usr_name,monTimeTaken,resTimeTaken,finishTimeTaken,osTimeTaken,cpuTimeTaken,ramTimeTaken,hdTimeTaken,graphicsTimeTaken,batteryTimeTaken
  ,monGen,resGen,finishGen,osGen,cpuGen,ramGen,hdGen,graphicsGen,batteryGen,lowerBudget,upperBudget)
VALUES('$_POST[monSelected]','$_POST[resSelected]','$_POST[finishSelected]','$_POST[osSelected]','$_POST[cpuSelected]','$_POST[ramSelected]','$_POST[hdSelected]'
,'$_POST[graphicsSelected]','$_POST[batterySelected]','$_POST[timeTaken]','$_SESSION[usr_name]','$_POST[monTimeTaken]','$_POST[resTimeTaken]','$_POST[finishTimeTaken]',
'$_POST[osTimeTaken]','$_POST[cpuTimeTaken]','$_POST[ramTimeTaken]','$_POST[hdTimeTaken]','$_POST[graphicsTimeTaken]','$_POST[batteryTimeTaken]',
'$_POST[monGen]','$_POST[resGen]','$_POST[finishGen]','$_POST[osGen]','$_POST[cpuGen]','$_POST[ramGen]','$_POST[hdGen]'
,'$_POST[graphicsGen]','$_POST[batteryGen]','$_POST[lowerBudgetPost]','$_POST[upperBudgetPost]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
      header("Location:laptop_post_survey(fix).html");
    	exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}$conn->close();
?>
</body>
</html>
