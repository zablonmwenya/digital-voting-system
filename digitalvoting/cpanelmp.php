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
          <a href="cpanelmp.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cpanelpm.php"><span class="subFont"><strong>Prime-minister Panel</strong></span></a></li>
            <li><a href="cpanelgov.php"><span class="subFont"><strong>Governor Panel.</strong></span></a></li>
            <li><a href="cpanelsen.php"><span class="subFont"><strong>Senator Panel.</strong></span></a></li>
            <li><a href="cpanel.php"><span class="subFont"><strong>Presidents Panel.</strong></span></a></li>
            <li><a href="feedbackresults.php"><span class="subFont"><strong>Feedback.</strong></span></a></li> 
            <li><a href="votes.php"><span class="subFont"><strong>Voters.</strong></span></a></li>       
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <p class="normalFont">This is MP's Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $KA=0;
              $GM=0;
              $SB=0;
              $MA=0;
              $SA=0;
              $SD=0;
              $KC=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Kinsley Audrey
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='KA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_mp'])
                      $KA++;
                  }

                  $ka_value= $KA*10;

                  echo "<strong>Kinsley Audrey</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$ka_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ka_value."%'>
                      <span class='sr-only'>KA</span>
                    </div>
                  </div>
                  ";
                }

                // Genesis Maya
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='GM'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_mp'])
                      $GM++;
                  }


                  $gm_value= $GM*10;

                  echo "<strong>Genesis Maya</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$gm_value."%'>
                      <span class='sr-only'>GM</span>
                    </div>
                  </div>
                  ";
                }

                // Skylar Bella
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='SB'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_mp'])
                      $SB++;
                  }


                  $sb_value= $SB*10;

                  echo "<strong>Skylar Bella</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sb_value."%'>
                      <span class='sr-only'>SB</span>
                    </div>
                  </div>
                  ";
                }

                // Madelyn Aaliyah
                $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='MA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for_mp'])
                      $MA++;
                  }


                  $ma_value= $MA*10;

                  echo "<strong>Madelyn Aaliyah</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ma_value."%'>
                      <span class='sr-only'>MA</span>
                    </div>
                  </div>
                  ";
                }
                
                 //Savannah Anna
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='SA'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_mp'])
                       $SA++;
                   }
 
                   $sa_value= $SA*10;
 
                   echo "<strong>Savannah Anna</strong><br>";
                   echo "
                   <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sa_value."%'>
                      <span class='sr-only'>SA</span>
                    </div>
                   </div>
                   ";
                 }
 
                 // Serenity Delilah
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='SD'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_mp'])
                       $SD++;
                   }
 
 
                   $sd_value= $SD*10;
 
                   echo "<strong>Serenity Delilah</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sd_value."%'>
                       <span class='sr-only'>SD</span>
                     </div>
                   </div>
                   ";
                 }
 
                 // Kennedy Caroline
                 $sql ="SELECT * FROM tbl_users_vote WHERE voted_for_mp='KC'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for_mp'])
                       $KC++;
                   }
 
 
                   $kc_value= $kc*10;
 
                   echo "<strong>Kennedy Caroline</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$kc_value."%'>
                       <span class='sr-only'>KC</span>
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
                    if($row['voted_for_mp'])
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
