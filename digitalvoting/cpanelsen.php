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
          <a href="cpanelsen.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cpanelpm.php"><span class="subFont"><strong>Prime-minister Panel</strong></span></a></li>
            <li><a href="cpanelgov.php"><span class="subFont"><strong>Governor Panel.</strong></span></a></li>
            <li><a href="cpanel.php"><span class="subFont"><strong>Presidents Panel.</strong></span></a></li>
            <li><a href="cpanelmp.php"><span class="subFont"><strong>Member of Parliament Panel.</strong></span></a></li>
           <!-- <li><a href="voterspage.html"><span class="subFont"><strong>Voters</strong></span></a></li>-->
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <p class="normalFont">This is Senate Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $AW=0;
              $NN=0;
              $LP=0;
              $EB=0;
              $AE=0;
              $CI=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Addison Willow
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='AW'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_senetor'])
                      $AW++;
                  }

                  $aw_value= $AW*10;

                  echo "<strong>Addison Willow</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$aw_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sr_value."%'>
                      <span class='sr-only'>AW</span>
                    </div>
                  </div>
                  ";
                }

                // Natalie Naom
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='NN'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_senetor'])
                      $NN++;
                  }


                  $nn_value= $NN*10;

                  echo "<strong>Natalie Naom</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$nn_value."%'>
                      <span class='sr-only'>NN</span>
                    </div>
                  </div>
                  ";
                }

                //Lucy Paisley
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='LP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_senetor'])
                      $LP++;
                  }


                  $lp_value= $LP*10;

                  echo "<strong>Lucy Paisley</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$lp_value."%'>
                      <span class='sr-only'>LP</span>
                    </div>
                  </div>
                  ";
                }

                // Eliana Brooklyn
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='EB'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_senetor'])
                      $EB++;
                  }


                  $eb_value= $EB*10;

                  echo "<strong>Eliana Brooklyn</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$eb_value."%'>
                      <span class='sr-only'>EB</span>
                    </div>
                  </div>
                  ";
                }
                
                 //Aubret Elen
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='AE'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_senetor'])
                       $AE++;
                   }
 
                   $ae_value= $AE*10;
 
                   echo "<strong>Aubret Elen</strong><br>";
                   echo "
                   <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ae_value."%'>
                      <span class='sr-only'>AE</span>
                    </div>
                   </div>
                   ";
                 }
 
                 // Clarer Iyen
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_senetor='CI'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_senetor'])
                       $CI++;
                   }
 
 
                   $ci_value= $CI*10;
 
                   echo "<strong>Clarer Iyen</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ci_value."%'>
                       <span class='sr-only'>CI</span>
                     </div>
                   </div>
                   ";
                 }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users_vote";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_senetor'])
                      $total++;
                  }


                  $tptal= $total*10;

                  echo "<strong>Total Number of Votes</strong><br>";
                  echo "
                  <div class='text-primary'>
                    <h3 class='normalFont'>VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>
<hr>
<!--<footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
            <p class="copyright me-auto">&#169;     Copyright 2021 - Blackshadow Electral Commission</p>
            </div>

          </div>
        </div>
</footer>-->
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
