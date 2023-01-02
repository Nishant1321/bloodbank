<?php 
require 'file/connection.php'; 
session_start();
  if(!isset($_SESSION['rid']))
  {
  header('location:login.php');
  }
  else {
    $rid = $_SESSION['rid'];
    $sql = "select bloodrequest2.*, bloodcenters.* from bloodrequest2, bloodcenters where rid='$rid' && bloodrequest2.bcid=bloodcenters.id";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Sent Requests"; ?>
<?php require 'head.php'; ?>
<body>
	<?php require 'header2.php'; ?>
	<div class="container cont">

		<?php require 'message.php'; ?>

	<table class="table table-responsive table-striped rounded mb-6">
		<tr><th colspan="9" class="title">Sent requests</th></tr>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>Phone</th>
			<th>Blood Group</th>
			<th>Status</th>
			<th>Action</th>
			<th>Order</th>
		</tr>

		    <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">You have not requested yet. </b>';
            }
            ?>
            </div>

		<?php while($row = mysqli_fetch_array($result)) { ?>

		<tr>
			<td><?php echo ++$counter;?></td>
			<td><?php echo $row['bcname'];?></td>
			<td><?php echo $row['bcemail'];?></td>
			<td><?php echo $row['bccity'];?></td>
			<td><?php echo $row['bcphone'];?></td>
			<td><?php echo $row['bg'];?></td>
			
			<td><?php echo $row['status'];?></td>
			<td><?php if($row['status'] == 'Accepted'){ ?>
				
				
			<td><?php if($row['status'] == 'Accepted'){ ?> <a href="order/index.php" class="btn btn-success unabled">Order</a> <?php }
			else{ ?>
				<a href="file/accept2.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-success">Order</a>
			<?php } ?>
			</td>
				
			
			<?php }
			else{ ?>
				<a href="file/cancel2.php?reqid=<?php echo $row['reqid'];?>" class="btn btn-danger">Cancel</a>
			<?php } ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
    <?php require 'footer.php'; ?>
</body>
</html>
<?php } ?>