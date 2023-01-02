<?php 
include( "../file/connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
<a href="../bloodrequest2.php">&#8592;</a>
   
	 <?php
        // fetch Images
        $i = 1;
	
                   

        $queryGetImg = "SELECT * FROM bird_multiple_images ";
        $resultImg = $conn->query($queryGetImg);
        if ($resultImg->num_rows > 0 ){
            while ($row = $resultImg->fetch_object()){ ?>
                <div class="col-sm-3">
                    <h3>Image <?php echo $i;?></h3>
					<?php echo($row->imgName);?>
                    <div class="alb">
					<img src="<?php echo '../upload/uploads/'.$row->imgName;?>"/>
                    </div>
                </div>
           <?php $i++;
            }
        }
        ?>
