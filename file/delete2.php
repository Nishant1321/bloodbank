<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from bloodinfo2 where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one blood sample.";
	header("location:../bloodinfo2.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../bloodinfo2.php?error=".$error );
    }
    mysqli_close($conn);
?>