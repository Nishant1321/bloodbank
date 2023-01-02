<?php
session_start();
require '../file/connection.php';


?>

<html>

  <head>
    <title> Blood Bank Order System </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="../order/css/css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="../order/css/css/bootstrap.min.css">
  <script type="text/javascript" src="../order/js/jquery.min.js"></script>
  <script type="text/javascript" src="../order/js/bootstrap.min.js"></script>

  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="order/order.php">Home</a></li>
            

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>
         
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
         

<?php
}
?>
      </div>

      </div>
    </nav>

 <?php
$gtotal = 0;


        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        <br>

<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center">
  <a href="http://localhost/bloodbank/order/index.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to order</button></a>
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>