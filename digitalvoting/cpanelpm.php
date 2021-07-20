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
          <a href="cpanelpm.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cpanel.php"><span class="subFont"><strong>Presidents Panel</strong></span></a></li>
            <li><a href="cpanelgov.php"><span class="subFont"><strong>Governor Panel.</strong></span></a></li>
            <li><a href="cpanelsen.php"><span class="subFont"><strong>Senator Panel.</strong></span></a></li>
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
            <p class="normalFont">This is Prime-minister Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $VR=0;
              $GS=0;
              $HA=0;
              $QJ=0;
              $ES=0;
              $EM=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Valentina Ruby
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='VR'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_primeminister'])
                      $VR++;
                  }

                  $vr_value= $VR*10;

                  echo "<strong>Valentina Ruby</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$vr_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$vr_value."%'>
                      <span class='sr-only'>VR</span>
                    </div>
                  </div>
                  ";
                }

                // Gabriella Sadie
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='GS'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_primeminister'])
                      $GS++;
                  }


                  $gs_value= $GS*10;

                  echo "<strong>Gabriella Sadie</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$gs_value."%'>
                      <span class='sr-only'>GS</span>
                    </div>
                  </div>
                  ";
                }

                // Hailey Autumn
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='HA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_primeminister'])
                      $HA++;
                  }


                  $ha_value= $HA*10;

                  echo "<strong>Hailey Autumn</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ha_value."%'>
                      <span class='sr-only'>HA</span>
                    </div>
                  </div>
                  ";
                }

                // Quinn Josephine
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='QJ'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_primeminister'])
                      $QJ++;
                  }


                  $qj_value= $QJ*10;

                  echo "<strong>Quinn Josephine</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$qj_value."%'>
                      <span class='sr-only'>QJ</span>
                    </div>
                  </div>
                  ";
                }
                
                 //Emery Samantha
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='ES'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_primeminister'])
                       $ES++;
                   }
 
                   $es_value= $ES*10;
 
                   echo "<strong>Emery Samantha</strong><br>";
                   echo "
                   <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$es_value."%'>
                      <span class='sr-only'>SL</span>
                    </div>
                   </div>
                   ";
                 }
 
                 // Everleight Madelina
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_primeminister='EM'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_primeminister'])
                       $EM++;
                   }
 
 
                   $em_value= $EM*10;
 
                   echo "<strong>Everleight Madelina</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$em_value."%'>
                       <span class='sr-only'>EM</span>
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
                    if($row['voted_for_primeminister'])
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
