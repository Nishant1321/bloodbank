<?php
require 'connection.php';
if(isset($_POST['dsubmit'])){
	$dname=$_POST['dname'];
	$demail=$_POST['demail'];
	$ddob=$_POST['ddob'];
    $dgender=$_POST['dgender'];
    $dbg=$_POST['dbg'];
    $daddress=$_POST['daddress'];
	$dcity=$_POST['dcity'];
    $dmobile=$_POST['dmobile'];
	$check_email = mysqli_query($conn, "SELECT demail FROM donor where demail = '$demail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../file/dregister.php?error=".$error );
}else{
	$sql = "INSERT INTO donor (dname, demail, ddob, dgender, dbg, daddress, dcity, dmobile)
	VALUES ('$dname','$demail', '$ddob', '$dgender', '$dbg', '$daddress', '$dcity', '$dmobile')";
	if ($conn->query($sql) === TRUE) {
		$msg = 'You have successfully registered for blood donation. The blood bank will contact you soon.';
		header( "location:../index.php?msg=".$msg );
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../file/dregister.php?error=".$error );
	}
	$conn->close();
}
}
?>