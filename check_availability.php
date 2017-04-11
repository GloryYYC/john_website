<?php
$conn = new mysqli('mysql.hostinger.co.uk','u150784719_user','cryansEvNec8','u150784719_db');
if(!empty($_POST["username"])) {
  $result = mysqli_query($conn,"SELECT count(*) FROM user_data WHERE user_name='" . $_POST["username"] . "'");
  $row = mysqli_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Username already exists.</span>";
  }else {
    $message = '<img src="img\tick.gif">';
      echo($message);
  }
}
$conn->close();
?>
