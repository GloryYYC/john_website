<?php
class DBController {
	private $host = "mysql.hostinger.co.uk";
	private $user = "u150784719_user";
	private $password = "cryansEvNec8";
	private $database = "u150784719_db";

	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}

	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password);
		return $conn;
	}

	function selectDB($conn) {
		mysqli_select_db($this->database,$conn);
	}

	function runQuery($query) {
		$result = mysqli_query($query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}
		if(!empty($resultset))
			return $resultset;
	}

	function numRows($query) {
		$result  = mysqli_query($query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
}
$db_handle = new DBController();
if(!empty($_POST["username"])) {
  $result = mysqli_query("SELECT count(*) FROM user_data WHERE username='" . $_POST["username"] . "'");
  $row = mysqli_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>
