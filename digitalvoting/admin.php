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
  	 <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
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
     </nav>
     
      <!-- end of container -->
      <div class="container" style="padding-top:150px;">
    	<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-4" style="border:2px solid gray;padding:50px;">
    			
    			<div class="page-header">
    				<h2 class="specialHead">Authentication</h2>
    			</div>
          <form action="authentication.php" method="POST">
      			<div class="form-group">
      				<label for="">Username</label><br>
      				<input type="text" name="adminUserName" placeholder="Enter Admin's UserName" class="form-control" required><br>

      				<label for="">Password</label><br>
      				<input type="password" name="adminPassword" class="form-control" placeholder="Enter Admin's Password" required><br>

      				<button type="submit" class="btn btn-block span btn-primary "><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</button>

              <label id="error"></label>
      			</div>

          </form>
          <br>

    		</div>
    		<div class="col-sm-4"></div>
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