<?php 
session_start();

require 'file/connection.php';

if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select bloodinfo2.*, bloodcenters.* from bloodinfo2, bloodcenters where bloodinfo2.bcid=bloodcenters.id && bg LIKE '%$searchKey%'";
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
            <label class="font-weight-bolder">Select Blood Group:</label>
               <select name="search" class="form-control">
               <option><?php echo @$_GET['search']; ?></option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select><br>
               <a href="abs2.php" class="btn btn-info mr-4"> Reset</a>
               <input type="submit" name="submit" class="btn btn-info" value="search">
           </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-6">
            <tr><th colspan="9" class="title">Available Blood Samples</th></tr>
            <tr>
                <th>#</th>
                
                <th>Bloodcenter Name</th>
                <th>Bloodcenter City</th>
                <th>Bloodcenter Email</th>
              <th>Bloodcenter Phone</th>
                <th>Bloodcenter</th>
                
                <th>Choose & Upload Image</th>
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
                <td><?php echo ($row['bg']); ?></td>
                
                

                <?php $bid= $row['bid'];?>
                <?php $bcid= $row['bcid'];?>
                <?php $bg= $row['bg'];?>


                    <form action="upload/upload-script.php" method="post" enctype="multipart/form-data">

                <?php if (isset($_SESSION['bcid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-info bloodcenter">Choose Image</a></td>
                <?php } else {(isset($_SESSION['rid']))  ?>
                <td> <div class="form-group">
            <div class="column">
               <div class="column">
                   <div class="column">
                       <input type="file" name="imageFile[]" required multiple class="form-control">
                   </div>
               </div></div></div>
                <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success" onclick="resetBtn()">
                    </div>
                </div>
            </div>
        </div></td>
                <?php } ?>
                
                </form>

                <form action="file/request2.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                    <input type="hidden" name="bcid" value="<?php echo $bcid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['bcid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-info bloodcenter">Request Sample</a></td>
                <?php } else {(isset($_SESSION['rid']))  ?>
                <td><input type="submit" name="request" class="btn btn-info" value="Request Sample" onmouseover="mouseOver()"></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>



        <script>

    var a = 0;

    function mouseOver(){
        
        const uploadImageBtn = document.forms['suForm']['uploadImageBtn'].value;
        const tick = document.querySelector('#check');

        if((uploadImageBtn == ""|| tick.checked == false) && a==0){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

        if((uploadImageBtn == ""|| tick.checked == false) && a==1){
        buttonMoveRight();
        a = 2;
        return false;
        } 

        if((uploadImageBtn == ""|| tick.checked == false) && a==2){
        buttonMoveLeft();
        a = 1;
        return false;
        } 

        else{

            // document.getElementById('submit-btn').click();  
            document.getElementById('submit-btn').style.cursor = 'pointer';
            return false;
        };

    };


    

    function buttonMoveLeft(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(-160%)';

    };


    function buttonMoveRight(){

        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(0%)';

    };


    function resetBtn(){
        const button = document.getElementById('submit-btn');
        button.style.transform = 'translateX(0%)';
    };


</script>




        </table>
    </div>
    <?php require 'footer.php' ?>
</body>

<script type="text/javascript">
    $('.bloodcenter').on('click', function(){
        alert("bloodcenter user can't request for blood.");
    });
</script>