<?php
if(isset($_POST['bcregister'])){
	require 'connection.php';
	$bcname=$_POST['bcname'];
	$bcemail=$_POST['bcemail'];
	$bcpassword=$_POST['bcpassword'];
	$bcphone=$_POST['bcphone'];
	$bccity=$_POST['bccity'];
	
	
	$check_email = mysqli_query($conn, "SELECT bcemail FROM bloodcenters where bcemail = '$bcemail' ");
	if(mysqli_num_rows($check_email) > 0){
    $error= 'Email Already exists. Please try another Email.';
    header( "location:../register.php?error=".$error );
}else{
	$sql = "INSERT INTO bloodcenters (bcname, bcemail, bcpassword, bcphone, bccity)
	VALUES ('$bcname','$bcemail', '$bcpassword', '$bcphone', '$bccity')";
	if ($conn->query($sql) === TRUE) {
		$msg = "You have successfully registered. Please, login to continue.";
		header( "location:../login.php?msg=".$msg);
	} else {
		$error = "Error: " . $sql . "<br>" . $conn->error;
        header( "location:../register.php?error=".$error );
	}
	$conn->close();
}
}
?>