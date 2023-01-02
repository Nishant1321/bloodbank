<?php 
session_start();

require 'file/connection.php';

if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select bloodinfo2.*, bloodcenters.* from bloodinfo2, bloodcenters where bloodinfo2.bcid=bloodcenters.id && bccity LIKE '%$searchKey%'";
}else{
    $sql = "select bloodinfo2.*, bloodcenters.* from bloodinfo2, bloodcenters where bloodinfo2.bcid=bloodcenters.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>

<body>
    <?php require 'header2.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
        
        
        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form method="get" action="" style="margin-top:-20px; ">
            <label class="font-weight-bolder">Select Bloodcenter city</label>
               <select name="search" class="form-control">
               <option><?php echo @$_GET['search']; ?></option>
               <option value="satara">satara</option>
                <option value="karad">karad</option>
                <option value="mumbai">mumbai</option>
                <option value="pune">pune</option>
                <option value="aurangabad">aurangabad</option>
                <option value="kolhapur">kolhapur</option>
                <option value="latur">latur</option>
                <option value="thane">thane</option>
              
               </select><br>
               <a href="donor2.php" class="btn btn-info mr-4"> Reset</a>
               <input type="submit" name="submit" class="btn btn-info" value="search">
           </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-5">
            <tr><th colspan="8" class="title">Available Blood Samples</th></tr>
            <tr>
                <th>#</th>
                <th>Bloodcenter Name</th>
                <th>Bloodcenter City</th>
                <th>Bloodcenter Email</th>
              <th>Bloodcenter Phone</th>
             
            
               <th>Action</th>
                
                 
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
                <td><?php echo $row['bcname'];?></td>
                <td><?php echo ($row['bccity']); ?></td>
                <td><?php echo ($row['bcemail']); ?></td>
                <td><?php echo ($row['bcphone']); ?></td>
             
                

                <?php $bid= $row['bid'];?>
                <?php $bcid= $row['bcid'];?>
                <?php $bg= $row['bg'];?>

                <td><a href="file/dregister.php" class="btn btn-success unabled" name='btnAdd info' >Add info</a> </td>
                   

               
            </tr>

        <?php } ?>



