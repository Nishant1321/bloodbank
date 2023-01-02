<?php
session_start();
require '../file/connection.php';



?>

<html>

  <head>
    <title> Online Blood Bank Order System </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="../order/css/css/COD.css">
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
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/bloodbank/">Home</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          

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


<?php
}
?>


        </div>

      </div>
    </nav>



        <div class="container">
          <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering at Blood Bank The ordering process is now complete.</h2>
<h2 class="text-center"> Take Screen Shot On This Order Number In Your Device</h2>

<?php 
  $num1 = rand(100000,999999); 
  $num2 = rand(100000,999999); 
  $num3 = rand(100000,999999);
  $number = $num1.$num2.$num3;
?>

<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;"><?php echo "$number"; ?></span> </h3>

        </body>

</html>