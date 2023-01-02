<?php
session_start();
    require 'connection.php';
    if(isset($_POST['bclogin'])){
    $bcemail=$_POST['bcemail'];
    $bcpassword=$_POST['bcpassword'];
    $sql="select * from bloodcenters where bcemail='$bcemail' and bcpassword='$bcpassword'";
    $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($result);
    if($rows_fetched==0){
        $error= "Wrong email or password. Please try again.";
        header( "location:../login.php?error=".$error);
    }else{
        $row=mysqli_fetch_array($result);
        $_SESSION['bcemail']=$row['bcemail'];
        $_SESSION['bcname']=$row['cbname'];
        $_SESSION['bcid']=$row['id'];
        $msg= $_SESSION['bcname'].' have logged in.';
        header( "location:../bloodrequest2.php?msg=".$msg);
    } 
  }
?>