<?php 
	session_start();	
	$_SESSION['id'] = $_SESSION['user_id'];
	@while(){
		$query = "SELECT * from issue where $id = $_SESSION['id]";
		$cubrid_result(result, row);

	}

 ?>