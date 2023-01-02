<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="index.php"><img src="image/favicon.jpg" width="30" height="30" class="rounded-circle">Blood Bank</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['bcid'])) { ?>

		<ul class="navbar-nav ml-auto">
        <li class="nav-item">
				<a class="nav-link btn btn-light" href="donorview.php">Donor</a>
            </li>
        <li class="nav-item">
				<a class="nav-link btn btn-light" href="order\admin\manage-category.php">Order Sample</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="bloodinfo2.php">Add blood info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodrequest2.php">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="abs2.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="bprofile.php?id=<?php echo $_SESSION['bcid']; ?>" class="nav-link btn font-weight-bold"><img src="image/bloodbank.png" width="15" height="15" class="rounded-circle"><mark><?php echo $_SESSION['bcname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest2.php">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs2.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a href="rprofile.php?id=<?php echo $_SESSION['rid']; ?>" class="nav-link btn font-weight-bold" href="#"><img src="image/user.png" width="15" height="15" class="rounded-circle"> <mark><?php echo ' '.$_SESSION['rname']; ?></mark></a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link btn btn-light" href="donor2.php">Donor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs2.php">Available blood samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php">Login</a>
            </li>
            
        </ul>
       

        <?php } ?>
       </div>
    </div>
</nav>