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
            
             <li><a href="voterspage.html"><span class="subFont"><strong>Voters</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Admin's Password</strong></span></a></li>
          
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='VR'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $VR++;
                  }

                  $vr_value= $VR*10;

                  echo "<strong>Valentina Ruby</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$Vr_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$Vr_value."%'>
                      <span class='sr-only'>VR</span>
                    </div>
                  </div>
                  ";
                }

                // Gabriella Sadie
                $sql ="SELECT * FROM tbl_users WHERE voted_for='GS'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='HA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='QJ'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='ES'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='EM'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Administration Panel.</p>
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='AM'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='ML'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='CG'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='HZ'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='LA'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='HE'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='EI'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <p class="normalFont">This is Senet Panel.</p>
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='AW'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='NN'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='LP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='EB'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='AE'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='CI'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
                       $CI++;
                   }
 
 
                   $ci_value= $CI*10;
 
                   echo "<strong>Clarer Iyen</strong><br>";
                   echo "
                   <div class='progress'>
                     <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$CI_value."%'>
                       <span class='sr-only'>CI</span>
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
  <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Administration Panel.</p>
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='KA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $KA++;
                  }

                  $ka_value= $KA*10;

                  echo "<strong>Kinsley Audrey</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$sr_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$ka_value."%'>
                      <span class='sr-only'>KA</span>
                    </div>
                  </div>
                  ";
                }

                // Genesis Maya
                $sql ="SELECT * FROM tbl_users WHERE voted_for='GM'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='SB'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                $sql ="SELECT * FROM tbl_users WHERE voted_for='MA'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='SA'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='SD'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
                 $sql ="SELECT * FROM tbl_users WHERE voted_for='KC'";
                 $result= mysqli_query($conn, $sql);
 
                 if(mysqli_num_rows($result)>0)
                 {
                   while($row= mysqli_fetch_assoc($result))
                   {
                     if($row['voted_for'])
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
<footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
            <p class="copyright me-auto">&#169;     Copyright 2021 - Blackshadow Electral Commission</p>
            </div>

          </div>
        </div>
</footer>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
