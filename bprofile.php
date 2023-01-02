<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['bcid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['bcid'])){
		$id=$_SESSION['bcid'];
		$sql = "SELECT * FROM bloodcenters WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>
<?php require 'head.php';?>
<body>
	<?php require 'header2.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-sm-6 mb-5">
				<div class="card">
					<div class="media justify-content-center mt-1">
						<img src="image/bloodbank.png" alt="profile" class="rounded-circle" width="70" height="60">
					</div>
					<div class="card-body">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="text-muted font-weight-bold" class="text-muted font-weight-bold">bloodcenter Name</label>
						<input type="text" name="bcname" value="<?php echo $row['bcname']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">bloodcenter Email</label>
						<input type="email" name="bcemail" value="<?php echo $row['bcemail']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">bloodcenter Password</label>
						<input type="text" name="bcpassword" value="<?php echo $row['bcpassword']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">bloodcenter Phone Number</label>
						<input type="text" name="bcphone" value="<?php echo $row['bcphone']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">bloodcenter City</label>
						<input type="text" name="bccity" value="<?php echo $row['bccity']; ?>" class="form-control mb-3">
						<label class="text-muted font-weight-bold">bloodcenter upload</label>
						<input type="text" name="bcupload" value="<?php echo $row['bcupload']; ?>" class="form-control mb-3">
						<input type="submit" name="update" class="btn btn-block btn-primary" value="Update">
					   </form>
					</div>
					<a href="index.php" class="text-center">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>