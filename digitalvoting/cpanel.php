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
          <a href="cpanel.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <li><a href="cpanelpm.php"><span class="subFont"><strong>Prime-minister Panel</strong></span></a></li>
            <li><a href="cpanelgov.php"><span class="subFont"><strong>Governor Panel.</strong></span></a></li>
            <li><a href="cpanelsen.php"><span class="subFont"><strong>Senetor Panel.</strong></span></a></li>
            <li><a href="cpanelmp.php"><span class="subFont"><strong>Member of Parliament Panel.</strong></span></a></li>
            <li><a href="voterspage.html"><span class="subFont"><strong>Voters</strong></span></a></li>
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
  </nav>

  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Presidential Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $SR=0;
              $JW=0;
              $WA=0;
              $BJ=0;
              $SL=0;
              $GW=0;
              $MD=0;
              $LR=0;
              $LM=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //Smith Row
                $sql ="SELECT * FROM tbl_users WHERE voted_for='SR'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $SR++;
                  }

                  $sr_value= $SR*10;

                  echo "<strong>Smith Row</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$sr_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sr_value."%'>
                      <span class='sr-only'>SR</span>
                    </div>
                  </div>
                  ";
                }

                // Johnson Walles
                $sql ="SELECT * FROM tbl_users WHERE voted_for='JW'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $JW++;
                  }


                  $jw_value= $JW*10;

                  echo "<strong>Johnson Walles</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$jw_value."%'>
                      <span class='sr-only'>JW</span>
                    </div>
                  </div>
                  ";
                }

                // Williams Adrows
                $sql ="SELECT * FROM tbl_users WHERE voted_for='WA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $WA++;
                  }


                  $wa_value= $WA*10;

                  echo "<strong>Williams Adrows</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$wa_value."%'>
                      <span class='sr-only'>WA</span>
                    </div>
                  </div>
                  ";
                }

                // Brown Jones
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BJ'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BJ++;
                  }


                  $bj_value= $BJ*10;

                  echo "<strong>Brown Jones</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bj_value."%'>
                      <span class='sr-only'>BJ</span>
                    </div>
                  </div>
                  ";
                }
                
                 //Shennah LaRoze
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='SL'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
                       $SL++;
                   }
 
                   $sl_value= $SL*10;
 
                   echo "<strong>Shennah LaRoze</strong><br>";
                   echo "
                   <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$sl_value."%'>
                      <span class='sr-only'>SL</span>
                    </div>
                   </div>
                   ";
                 }
 
                 // Garcia Wyne
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='GW'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
                       $GW++;
                   }
 
 
                   $gw_value= $GW*10;
 
                   echo "<strong>Garcia Wyne</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$gw_value."%'>
                       <span class='sr-only'>GW</span>
                     </div>
                   </div>
                   ";
                 }
 
                 // Miller Davis
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='MD'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
                       $MD++;
                   }
 
 
                   $md_value= $MD*10;
 
                   echo "<strong>Miller Davis</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$md_value."%'>
                       <span class='sr-only'>MD</span>
                     </div>
                   </div>
                   ";
                 }
 
                 // Lana Ryne
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='LR'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
                       $LR++;
                   }
 
 
                   $lr_value= $LR*10;
 
                   echo "<strong>Lana Ryne</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$lr_value."%'>
                       <span class='sr-only'>LR</span>
                     </div>
                   </div>
                   ";
                 }

                  // Larry Martinez
                  $sql ="SELECT * FROM tbl_users WHERE voted_for='LM'";
                  $result= mysqli_query($conn, $sql);
  
                  if(mysqli_num_rows($result)>0)
                  {
                    while($row= mysqli_fetch_assoc($result))
                    {
                      if($row['voted_for'])
                        $LM++;
                    }
  
  
                    $lm_value= $LM*10;
  
                    echo "<strong>Larry Martinez</strong><br>";
                    echo "
                    <div class='progress'>
                      <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$lm_value."%'>
                        <span class='sr-only'>LM</span>
                      </div>
                    </div>
                    ";
                  }

               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
