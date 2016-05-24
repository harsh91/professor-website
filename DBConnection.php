<?php
include ("constants.php");
class DBConnection {
	public function getDBConnection() {
		$conn = new mysqli ( DB_SERVER_NAME, DB_USER_NAME, DB_PASSWORD, DB_NAME );
		mysqli_set_charset ( $conn, 'utf8mb4' );
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		return $conn;
	}
	public function closeDBConnection($conn) {
		$conn->close ();
	}
	public function printArr($arr) {
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}
}
?>