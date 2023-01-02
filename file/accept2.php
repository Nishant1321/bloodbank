<?php
include "connection.php";
    $reqid=$_GET['reqid'];
	$status = "Accepted";
	$sql = "update bloodrequest2 SET status = '$status' WHERE reqid = '$reqid'";
    if (mysqli_query($conn, $sql)) {
	$msg="You have accepted the request.";
	header("location:../bloodrequest2.php?msg=".$msg );
    } else {
    $error= "Error changing status: " . mysqli_error($conn);
    header("location:../bloodrequest2.php?error=".$error );
    }
    mysqli_close($conn);
?>