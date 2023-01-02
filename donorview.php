<?php 
session_start();

require 'file/connection.php';



    $sql = "select * from donor";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Donor"; ?>
<?php require 'head.php'; ?>

<body>
    <?php require 'header2.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
        
        
        

        <table class="table table-responsive table-striped rounded mb-11">
            <tr><th colspan="9" class="title">Donor List</th></tr>
            <tr>
                <th>#</th>
                <th>Donor Name</th>
                <th>Donor Email</th>
                <th>Donor D.O.B</th>
              <th>Donor Gender</th>
                <th>Donor Blood Group</th>
                <th>Donor Address</th>
                <th>Donor City</th>
                <th>Donor Mobile Number </th>
                
                
                 
            </tr>

            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>

        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['dname'];?></td>
                <td><?php echo ($row['demail']); ?></td>
                <td><?php echo ($row['ddob']); ?></td>
                <td><?php echo ($row['dgender']); ?></td>
                <td><?php echo ($row['dbg']); ?></td>
                <td><?php echo ($row['daddress']); ?></td>
                <td><?php echo ($row['dcity']); ?></td>
                <td><?php echo ($row['dmobile']); ?></td>
                

              

              
                   

               
            </tr>

        <?php } ?>

