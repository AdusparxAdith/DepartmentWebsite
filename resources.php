<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resources</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
  <div class="row banner">
    <a href="https://dsatm.edu.in/"><img src="Images/dsat.png" width="70px" height="50px"></a>
    <a href="https://dsatm.edu.in/"><img src="Images/ise.png" width="70px" height="50px"></a>

     <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container">
                <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </div>
     </div>

  </div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="infrastructure.php">Infrastructure</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="placements.php">Placements</a></li>
        <!-- <li class="active adu"><a href="resources.php">Resources</a></li> -->
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">Profile</a></li>
        <?php if(!isset($_SESSION['usn'])) echo"<li><a href='login.php'>Log In</a></li>";?>
        <?php if(isset($_SESSION['usn'])) echo"<li><a href='logout.php'>Log out</a></li>";?>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>


<!-- CONTENT HERE -->


<div class="container">
  <div class="row">
    <div class="col-lg-4 resources">

      <div class="container-fluid headerback" >
        <h3>ASSIGNMENTS</h3>
        <i class="fas fa-book-open fa-3x"></i>
      </div>
      <div class="container-fluid" style="background-color: #ced6e0">
        <ul class="semester">
          <li><a href="#">3rd semester</a></li>
          <li><a href="#">5th semester</a></li>
          <li><a href="#">7th semester</a></li>
        </ul>
      </div>

    </div>
    <div class="col-lg-4 resources">

      <div class="container-fluid headerback"  style="background-color: #1581C4;box-shadow:20px 20px 10px grey;">
        <h3>SYLLABUS</h3>
        <i class="fas fa-graduation-cap fa-3x"></i>
      </div>
      <div class="container-fluid" style="background-color:#ced6e0">
        <ul class="semester">
          <li><a href="#">3rd semester</a></li>
          <li><a href="#">5th semester</a></li>
          <li><a href="#">7th semester</a></li>
        </ul>
      </div>

    </div>
    <div class="col-lg-4 resources">

      <div class="container-fluid headerback">
        <h3>NOTES</h3>
        <i class="fas fa-school fa-3x"></i>
     </div>
     <div class="container-fluid" style="background-color: #ced6e0">
        <ul class="semester">
          <li><a href="#">3rd semester</a></li>
          <li><a href="#">5th semester</a></li>
          <li><a href="#">7th semester</a></li>
        </ul>
      </div>

    </div>
  </div>
</div>


<!-- CONTENT HERE -->

 <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="login.php">Sign up</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="about.php">Department Information</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="https://www.google.co.in/search?q=reviews+of+dsatm&oq=reviews+of+dsatm&aqs=chrome..69i57.7704j0j7&sourceid=chrome&ie=UTF-8#lrd=0x3bae410062278735:0xfb8a8573700363d2,1,,," target="_blank">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Information</h5>
                    <p> The department of Information Science and Engineering was accrediated by the National
                    Board of Accrediation (NBA) in May 2018 for 3 years.  </p>
                </div>
            </div>

        </div>

        <div class="second-bar">
           <div class="container">
                <h3 class="logo"><a href="https://dsatm.edu.in/">Dayananda Sagar Academy of Technology and Management</a></h3>
                <div class="social-icons">
                    <a href="https://twitter.com/DSIorganization" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/DSIorganization " class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://plus.google.com/112592840884555805844" class="google"><i class="fa fa-google-plus"></i></a>
                </div>

            </div>
            <div>© 2018 Dayananda Sagar Institutions. All Rights Reserved.</div>
        </div>

    </footer>
</body>
</html>
