<?php
session_start(); 
require 'connection.php';
if(!isset($_SESSION['rid']))
{
	header('location:../login.php');
}
else {
	if(isset($_POST['request'])){
		$bcid = $_POST['bcid'];
		$rid = $_SESSION['rid'];
		$bg = $_POST['bg'];
		$check_data = mysqli_query($conn, "SELECT reqid FROM bloodrequest2 where bcid='$bcid' and rid='$rid'");
		if(mysqli_num_rows($check_data) > 0){
			$error= 'You have already requested for blood sample from this bloodcenter.';
			header( "location:../abs2.php?error=".$error );
}else{
		$sql="INSERT INTO bloodrequest2 (bg, bcid, rid) VALUES ('$bg', '$bcid', '$rid')";
		if ($conn->query($sql) === TRUE) {
			$msg = 'You have requested for blood group '.$bg.'. Our team will contact you soon.';
			header( "location:../sentrequest2.php?msg=".$msg);
		} else {
			$error = "Error: " . $sql . "<br>" . $conn->error;
            header( "location:../abs2.php?error=".$error );
		}
		$conn->close();
	}
}
}
?>