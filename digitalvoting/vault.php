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

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <p class="normalFont"><strong> Prove Your Authencity of being correct voter.</strong></p>
          </div>
          
          <form action="saveVoter.php" method="POST">
          <div class="form-group">
            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName" pattern="[A-Za-z]" title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Voter's Registered ID :</label><br>
            <input type="number" name="voterID" placeholder="Enter Your Voter Uniquie ID" class="form-control" required><br>

            <label>Voter's Password. :</label><br>
            <input id="id1" type="password" name="voterPassword"  placeholder="Enter Your Voter Uniquie password" class="form-control" required/><br>
            
            <h3 class="normalFont">Selet Any One of Them,</h3>
            <div class="radio">
              <label for="">
                <input type="radio" name="selectedGender" value="Male"> <strong>Male</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedGender" value="Female"> <strong>Female</strong> 
              </label><br>
              
              <label for="">
                <input type="radio" name="selectedGender" value="Transgender"> <strong>Transgender</strong>
              </label><br>
              <br>
              <hr>
              <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>