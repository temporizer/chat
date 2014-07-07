<?php 
	require_once("connect.inc.php");
	session_start();


	function getAllMessages() {
		global $dbc;
		$messages = null;
		$sql = "SELECT * FROM messages";
		$query = mysqli_query($dbc, $sql);
		$num_rows = mysqli_num_rows($query);
		
		if ($num_rows >= 1) {
			for ($i=0; $i<$num_rows; $i++) {
				$messages[] = mysqli_fetch_assoc($query);
			}
		}
		
		return $messages;
	}

 ?>