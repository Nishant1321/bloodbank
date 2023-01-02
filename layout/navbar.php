 <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Blood Bank</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li class="<?php
                        if (isset($setHomeActive)) {
                            echo $setHomeActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="../index.php">Home</a></li>
                        <li class="<?php
                        if (isset($setDonorActive)) {
                            echo $setDonorActive;
                        } else {
                            echo '';
                        }
                        ?>"><a href="../dregister.php"></a></li>
                    
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</br></br>