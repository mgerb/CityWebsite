<?php
	session_start();
	
	include 'pdo_connect.php';
	
	if(isset($_POST['submit']) && isset($_SESSION['username']))
	{
		
		
		$row_id = trim($_POST['row_id']);
		
		try{
		$query = "DELETE FROM announcements WHERE row_id = $row_id";
		$conn->query($query);
		}
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	
	$conn = null;

	header("location:../index.php");
	exit;

?>