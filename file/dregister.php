<?php 
session_start();
if (isset($_SESSION['rid'])) {
  header("location:donorview.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Register"; ?>
<?php require '../_header.php'; ?>
<body>

    <div class="container cont">

    <?php require '../message.php'; ?>

    <div class="tab-pane container active" id="donor">

<form action="../file/dregreg.php" method="post" enctype="multipart/form-data">


      <div class="col justify-card-center">
        <div class="col-md-9">
          <div class="card rounded">
    <div class="panel panel-default">
            <div class="panel-heading">
                <div class="col-md-4">
                    <img src="../register.jpg" class="img img-responsive">
                </div><h3>
                <p>Join our community and reach out your hands for the others in need. Just by registering below you will make an agreement
                    with us that you are ready to donate and will be available whenever we will need you.</p>               
</h3></div>
            <div class="panel-body">
                <form method="post" action="../index.php" class="form-horizontal">
                   <br> <div class="form-group">
                        <label class="col-md-4 form-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" name="dname" class="form-control" placeholder="Full Name" required="true">
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">Email</label>
                        <div class="col-md-8">
                            <input type="email" required="true" class="form-control" name="demail" placeholder="Email" >
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">D.O.B</label>
                        <div class="col-md-8">
                            <input type="date" required="true" class="form-control" name="ddob" >
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">Gender</label>
                        <div class="col-md-8">
                            <input type="radio" value="Male" checked="true" class="radio-inline" name="dgender" >Male
                            <input type="radio" value="Female" class="radio-inline" name="dgender" >Female
                        </div>
                    </div><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">Blood Group</label>
                        <div class="col-md-8">
                            <select name="dbg" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">Address</label>
                        <div class="col-md-8">
                            <textarea required="true" minlength="5" class="form-control" name="daddress" 
                                      rows="6" placeholder="Please fill out your complete address."></textarea>
                        </div>
                    </div><br><br><br><br><br><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">City</label>
                        <div class="col-md-8">
                            <input type="text" required="true" class="form-control" name="dcity" >
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4">Mobile</label>
                        <div class="col-md-8">
                            <input type="number" required="true" class="form-control" name="dmobile" >
                        </div>
                    </div><br><br>
                    <div class="form-group">
                        <label class="form-label col-md-4"></label>
                        <div class="col-md-8">
                            <button class="btn btn-success" name="dsubmit" >Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
</div>
</div>
</div>
</div>
</form></div>
<?php require '../footer.php' ?>
</body>
</html>
<?php } ?>