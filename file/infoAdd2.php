<?php
require 'connection.php';
session_start();
if(!isset($_SESSION['bcid']))
{
	header('location:login.php');
}
else {
	if(isset($_POST['add'])){
		$bcid=$_SESSION['bcid'];
		$bg=$_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT bcid FROM bloodinfo2 where bcid='$bcid' && bg='$bg'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already added this blood sample.';
			header( "location:../bloodinfo2.php?error=".$error );
}else{
		$sql = "INSERT INTO bloodinfo2 (bg, bcid) VALUES ('$bg', '$bcid')";
		if ($conn->query($sql) === TRUE) {
			$msg = "You have added record successfully.";
			header( "location:../bloodinfo2.php?msg=".$msg );
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../bloodinfo2.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>