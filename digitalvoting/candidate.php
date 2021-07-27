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
          <a href="candidate.php" class="navbar-brand headerFont text-lg"><strong>BSEC eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <span class="normalFont"><a href="admin.php" class="btn btn-success navbar-right navbar-btn"><strong>Admin Panel</strong></a></span>
        </div>
      </div>
     </nav>
    </div> 
      <!-- end of container -->
<form action="saveVote.php" method="POST">
<div class="container" style="padding:80px; width:88%;">
    <div class="page-header">
            <h2 class="specialHead">Select any one of them at each category.</h2>
          </div>
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
         
          
          <div class="form-group">
            <div class="radio">
            <table class="table caption-top">
                <caption><strong>Presidential Candidates:</strong></caption>
                <thead>
                  <tr>
                    <th scope="col">Party/Candidate symbol</th>
                    <th scope="col">Candidate Photo and name</th>
                    <th scope="col">Deputy's Name</th>
                    <th scope="col">Voters Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="image/apple.jpg" alt=""></th>
                    <td><img src="image/president1.jpg" alt="">Smith Row</td>
                    <td>Emmah Oliver</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="SR">
                      </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/avacado.jpeg" alt=""></th>
                    <td><img src="image/president2.jpg" alt="">Johnson Walles</td>
                    <td>Ava Charlotte</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="JW">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/banana.jpg" alt=""></th>
                    <td><img src="image/president3.jpg" alt="">Williams Adrows</td>
                    <td>Sophia Amelia</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="WA">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/blackberry.jpg" alt=""></th>
                    <td><img src="image/president4.jpg" alt="">Brown Jones</td>
                    <td>Isabella Mia</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="BJ">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/goiaba.jpg" alt=""></th>
                    <td><img src="image/president5.jpg" alt="">Shennah LaRoze</td>
                    <td>Evelyn Harper</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="SL">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/mango.jpg" alt=""></th>
                    <td><img src="image/president6.jpg" alt="">Garcia Wyne</td>
                    <td>Camila Gianna</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="GW">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/orange.jpg" alt=""></th>
                    <td><img src="image/president7.jpg" alt="">Miller Davis</td>
                    <td>Abigail Luna</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="MD">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/strowberry.jpg" alt=""></th>
                    <td><img src="image/president8.jpg" alt="">Lana Ryne</td>
                    <td>Ella Elizabeth</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="LR">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/watermellon.jpg" alt=""></th>
                    <td><img src="image/president9.jpg" alt="">Larry Martinez</td>
                    <td>Sofia Emily</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate" value="LM">
                      </label></td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
           </div>

        </div>
      </div>
</div>
<div class="container" style="padding:80px; width:88%;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
         
          <div class="form-group">
            <div class="radio">
            <table class="table caption-top">
                <caption><strong>Prime-Minister Candidates:</strong></caption>
                <thead>
                  <tr>
                    <th scope="col">Party/Candidate symbol</th>
                    <th scope="col">Candidate Photo and name</th>
                    <th scope="col">Deputy's Name</th>
                    <th scope="col">Voters Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="image/apple.jpg" alt=""></th>
                    <td><img src="image/pm1.jpg" alt="">Valentina Ruby</td>
                    <td>Sophia Alice</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="VR">
                      </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/avacado.jpeg" alt=""></th>
                    <td><img src="image/pm2.jpg" alt="">Gabriella Sadie</td>
                    <td>Ariana Allison</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="GS">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/banana.jpg" alt=""></th>
                    <td><img src="image/pm3.jpg" alt="">Hailey Autumn</td>
                    <td>Nevaeh Natalia</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="HA">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/blackberry.jpg" alt=""></th>
                    <td><img src="image/pm4.jpg" alt="">Quinn Josephine</td>
                    <td>Sarah Cora</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="QJ">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/goiaba.jpg" alt=""></th>
                    <td><img src="image/pm5.jpg" alt="">Emery Samantha</td>
                    <td>Piper Leilani</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="ES">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/mango.jpg" alt=""></th>
                    <td><img src="image/pm6.jpg" alt="">Everleight Madelina</td>
                    <td>Eva Lydia</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate2" value="EM">
                      </label></td></td>
                  </tr>
                  </tbody>
              </table>
            </div>
            
           </div>

        </div>
      </div>
</div>  
<div class="container" style="padding:80px; width:88%;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          <div class="form-group">
            <div class="radio">
            <table class="table caption-top">
                <caption><strong>Governor Candidates:</strong></caption>
                <thead>
                  <tr>
                    <th scope="col">Party/Candidate symbol</th>
                    <th scope="col">Candidate Photo and name</th>
                    <th scope="col">Deputy's Name</th>
                    <th scope="col">Voters Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="image/apple.jpg" alt=""></th>
                    <td><img src="image/governor1.png" alt="">Avery Mila</td>
                    <td>Scarlett Eleanor</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="AM">
                      </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/avacado.jpeg" alt=""></th>
                    <td><img src="image/governor2.jpg" alt="">Madison Layla</td>
                    <td>Penelope Aria</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="ML">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/banana.jpg" alt=""></th>
                    <td><img src="image/governor3.jpg" alt="">Chloe Grace</td>
                    <td>Ellie Nora</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="CG">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/blackberry.jpg" alt=""></th>
                    <td><img src="image/governor5.jpg" alt="">Hazel Zoey</td>
                    <td>Riley Victoria</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="HZ">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/goiaba.jpg" alt=""></th>
                    <td><img src="image/governor6.png" alt="">Lely Aurora</td>
                    <td>Violet Nora</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="LA">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/mango.jpg" alt=""></th>
                    <td><img src="image/governor7.jpg" alt="">Hannah Emilia</td>
                    <td>Zoe Stella</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="HE">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/orange.jpg" alt=""></th>
                    <td><img src="image/governor8.jpg" alt="">Everly Isla</td>
                    <td>Leah Lillian</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate3" value="EI">
                      </label></td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
           </div>

        </div>
      </div>
</div> 
<div class="container" style="padding:80px; width:88%;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
         
          <div class="form-group">
            <div class="radio">
            <table class="table caption-top">
                <caption><strong>Senet Candidates:</strong></caption>
                <thead>
                  <tr>
                    <th scope="col">Party/Candidate symbol</th>
                    <th scope="col">Candidate Photo and name</th>
                    <th scope="col">Voters Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="image/apple.jpg" alt=""></th>
                    <td><img src="image/senetor1.jpg" alt="">Addison Willow</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="AW">
                      </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/avacado.jpeg" alt=""></th>
                    <td><img src="image/senetor2.jpg" alt="">Natalie Naom</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="NN">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/banana.jpg" alt=""></th>
                    <td><img src="image/senetor3.jpg" alt="">Lucy Paisley</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="LP">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/blackberry.jpg" alt=""></th>
                    <td><img src="image/senetor5.jpg" alt="">Eliana Brooklyn</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="EB">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/goiaba.jpg" alt=""></th>
                    <td><img src="image/senetor6.jpg" alt="">Aubret Elen</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="AE">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/mango.jpg" alt=""></th>
                    <td><img src="image/senetor7.jpg" alt="">Clarer Iyen</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate4" value="CI">
                      </label></td></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
           </div>

        </div>
      </div>
</div> 
<div class="container" style="padding:80px; width:88%;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
         
          <div class="form-group">
            <div class="radio">
            <table class="table caption-top">
                <caption><strong>Member of Parliament Candidates:</strong></caption>
                <thead>
                  <tr>
                    <th scope="col">Party/Candidate symbol</th>
                    <th scope="col">Candidate Photo and name</th>
                    <th scope="col">Voters Mark</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><img src="image/apple.jpg" alt=""></th>
                    <td><img src="image/mp1.jpg" alt="">Kinsley Audrey</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="KA">
                      </label></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/avacado.jpeg" alt=""></th>
                    <td><img src="image/mp2.jpg" alt="">Genesis Maya</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="GM">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/banana.jpg" alt=""></th>
                    <td><img src="image/mp3.jpg" alt="">Skylar Bella</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="SB">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/blackberry.jpg" alt=""></th>
                    <td><img src="image/mp4.jpg" alt="">Madelyn Aaliyah</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="MA">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/goiaba.jpg" alt=""></th>
                    <td><img src="image/mp5.jpg" alt="">Savannah Anna</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="SA">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/mango.jpg" alt=""></th>
                    <td><img src="image/mp6.jpg" alt="">Serenity Delilah</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="SD">
                      </label></td></td>
                  </tr>
                  <tr>
                    <th scope="row"><img src="image/orange.jpg" alt=""></th>
                    <td><img src="image/mp7.jpg" alt="">Kennedy Caroline</td>
                    <td><label for="">
                        <input type="radio" name="selectedCandidate5" value="KC">
                      </label></td></td>
                  </tr>
                  </tbody>
              </table>
              <br>
              <hr>
            </div>
            
           </div>

        </div>
      </div>
</div> 
<center><button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button></center>
</form>
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