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
            <li><a href="cpanel.php"><span class="subFont"><strong>Presidents Panel.</strong></span></a></li>
            <li><a href="cpanelsen.php"><span class="subFont"><strong>Senator Panel.</strong></span></a></li>
            <li><a href="cpanelmp.php"><span class="subFont"><strong>Member of Parliament Panel.</strong></span></a></li>
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
            <p class="normalFont">This is Feedback Panel.</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {
                $result = mysqli_query($conn,"SELECT * FROM poll");

                echo "<table border='1' id='customers' class='table'>
                <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>feedback</th>
                </tr>";
    
                while($row = mysqli_fetch_array($result))
                {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['suggestions'] . "</td>";
                echo "<td>" . $row['feedback'] . "</td>";
                echo "</tr>";
                }
                echo "</table>"; 
                
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
