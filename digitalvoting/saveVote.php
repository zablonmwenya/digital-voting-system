<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSEC Voting</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

  </head>
<body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>BSEC eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>

      </div> 
      <!-- end of container -->
    </nav>
  </div>

    <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4 text-center" style="border:2px solid gray;padding:50px;">
    			
    			<?php

          require('config.php');

					if(isset($_POST["submit"])){
					if(isset($_POST["selectedCandidate"]) && isset($_POST["selectedCandidate2"]) && isset($_POST["selectedCandidate3"]) && isset($_POST["selectedCandidate4"]) && isset($_POST["selectedCandidate5"]))
					{
						$selection= test_input($_POST["selectedCandidate"]);
						$selection2= test_input($_POST["selectedCandidate2"]);
						$selection3= test_input($_POST["selectedCandidate3"]);
            $selection4= test_input($_POST["selectedCandidate4"]);
						$selection5= test_input($_POST["selectedCandidate5"]);
					}
				}
				else
				{
					echo "<br>All Field Recquired";
				}
				
       $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
	

        $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
        or die("Couldn't Connect to Database :");
				


				$sql= "INSERT INTO db_evoting.tbl_users_vote VALUES(null,'".$selection."','".$selection2."','".$selection3."','".$selection4."','".$selection5."');";
					

				if(mysqli_query($conn, $sql)){
					echo "<h3 class='text-info specialHead text-center'><strong> YOU'VE  SUCCESSFULLY   VOTED.</strong></h3>";
					echo "<a href='index.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
				}
				else
				{
					echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
					echo "<a href='index.php' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
				}

				
				?>

				
    			
    		</div>
    		<div class="col-sm-4"></div>
    	</div>
    </div>
<center> <footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
            <p class="copyright me-auto">&#169;     Copyright 2021 - Blackshadow Electral Commission</p>
            </div>

          </div>
        </div>
</footer></center>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
