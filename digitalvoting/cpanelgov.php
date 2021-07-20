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
          <a href="cpanelgov.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cpanelpm.php"><span class="subFont"><strong>Prime-minister Panel</strong></span></a></li>
            <li><a href="cpanel.php"><span class="subFont"><strong>Presidents Panel.</strong></span></a></li>
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
            <p class="normalFont">This is Governor's Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $AM=0;
              $ML=0;
              $CG=0;
              $HZ=0;
              $LA=0;
              $HE=0;
              $EI=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Avery Mila
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='AM'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_governor'])
                      $AM++;
                  }

                  $am_value= $AM*10;

                  echo "<strong>Avery Mila</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$am_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sr_value."%'>
                      <span class='sr-only'>AM</span>
                    </div>
                  </div>
                  ";
                }

                // Madison Layla
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='ML'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_governor'])
                      $ML++;
                  }


                  $ml_value= $ML*10;

                  echo "<strong>Madison Layla</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ml_value."%'>
                      <span class='sr-only'>ML</span>
                    </div>
                  </div>
                  ";
                }

                // Chloe Grace
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='CG'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_governor'])
                      $CG++;
                  }


                  $cg_value= $CG*10;

                  echo "<strong>Chloe Grace</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$cg_value."%'>
                      <span class='sr-only'>CG</span>
                    </div>
                  </div>
                  ";
                }

                // Hazel Zoey
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='HZ'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_governor'])
                      $HZ++;
                  }


                  $hz_value= $HZ*10;

                  echo "<strong>Hazel Zoey</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$hz_value."%'>
                      <span class='sr-only'>HZ</span>
                    </div>
                  </div>
                  ";
                }
                
                 //Lely Aurora
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='LA'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_governor'])
                       $LA++;
                   }
 
                   $la_value= $LA*10;
 
                   echo "<strong>Lely Aurora</strong><br>";
                   echo "
                   <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$la_value."%'>
                      <span class='sr-only'>LA</span>
                    </div>
                   </div>
                   ";
                 }
 
                 // Hannah Emilia
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='HE'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_governor'])
                       $HE++;
                   }
 
 
                   $he_value= $HE*10;
 
                   echo "<strong>Hannah Emilia</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$he_value."%'>
                       <span class='sr-only'>HE</span>
                     </div>
                   </div>
                   ";
                 }
 
                 // Everly Isla
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_governor='EI'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_governor'])
                       $EI++;
                   }
 
 
                   $ei_value= $EI*10;
 
                   echo "<strong>Everly Isla</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$EI_value."%'>
                       <span class='sr-only'>EI</span>
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
                    if($row['voted_for_governor'])
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
