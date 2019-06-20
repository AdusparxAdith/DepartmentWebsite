<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Department of Information Science</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">

<!-- JAVA SCRIPT FOR SEARCH BAR -->
 <!--  <script type="text/javascript">
    function active(){
      var searchBar = document.getElementByID('searchBar');
      if(searchBar.value == 'Search'){
        searchBar.value = ''
        searchBar.placeholder = 'Search'

      }
    }

    function inactive(){
      var searchBar = document.getElementByID('searchBar');
      if(searchBar.value == ''){
        searchBar.value = 'Search'
        searchBar.placeholder = ''

      }
    }
  </script> -->

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

                  <!-- Search Bar -->
                  <!-- <form action="search.php" method="post"> -->
                    <input type="text" class="form-control" placeholder="Search" maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive();" > <!-- value="Search" -->
                    <span class="input-group-addon">
                      <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                  <!-- </form> -->
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
        <li class="active adu"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="infrastructure.php">Infrastructure</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="placements.php">Placements</a></li>
        <!-- <li><a href="resources.php">Resources</a></li> -->
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">Profile</a></li>
        <?php if(!isset($_SESSION['usn'])) echo"<li><a href='login.php'>Log In</a></li>";?>
        <?php if(isset($_SESSION['usn'])) echo"<li><a href='logout.php'>Log out</a></li>";?>
        <!-- <li><a href="logout.php">Log out</a></li> -->
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="alert alert-dismissible" role="alert">
      <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <marquee><p style="font-family: Impact; font-size: 18pt">VTU reval results out for CBCS scheme</p></marquee>
    </div>
  </div>
</div>

<!-- CAROUSEL -->

<div class="container-fluid">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/indexslider1.jpg" alt="DSATM front view" style="width:100%; height:500px;">
      </div>

      <div class="item">
        <img src="Images/indexslider2.jpg" alt="DSATM Block" style="width:100%; height:500px;">
      </div>

      <div class="item">
        <img src="Images/indexslider3.jpg" alt="Library Block" style="width:100%; height:500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- FACTS -->

<div class="container-fluid facts">
  <div class="row">
    <div class="col-lg-3"><p style="border-right: 1px solid;"><a href="companies.php" class="afact">COMPANIES</a></p></div>
    <div class="col-lg-3"><p style="border-right: 1px solid;"><a href="placements.php" class="afact">90% PLACEMENTS</a></p></div>
    <div class="col-lg-3"><p style="border-right: 1px solid;"><a href="about.php" class="afact">NBA ACREDITATION</a></p></div>
    <div class="col-lg-3"><p style="border-right: 1px solid;"><a href="faculty.php" class="afact"> 5 PHDS </a></p></div>
  </div>
</div>

<!-- DASHBOARD -->

<div class="container-fluid dashboard">

  <div class="row">

    <div class="col-lg-4 news ">
      <div class="container-fluid section">
      <img src="Images/indexfacilities.png" width=100%>
        <div>
          <h2>Facilities</h2>
          <p>The department of Information Science and engineering has 4 fully equipped
          laboratories, namely Machine Learning Laboratory, Electronics Laboratory,
          Web Technologies Laboratory and Data Structures Laboratory. Apart from this,
          the department also has a department library dedicated to the department of
          ISE solely.  </p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 news">
      <div class="container-fluid section">
      <img src="Images/indexresources.jpg" width=100%>
        <div>
          <h2>Resources</h2>
          <p>The department gives assignemnts to students which consists of the most important
          and repeatedly asked questions in VTU external examination which helps students
          to work on important topics thoroughly. The department also provides laboratory
          manuals and question banks to students every semester.</p>
        </div>
      </div>
    </div>

    <div class="col-lg-4 news">
      <div class="container-fluid section">
      <img src="Images/indexplacements.png" width=100%>
        <div>
          <h2>Placements</h2>
          <p>The placement co-ordinators of the deparment help students with placements by providing essential
          insights and inputs which help them get through the selection process easily. The department of ISE
          strives to reach 100% placements every year and hosts workshops to improve placement
          percentage every year.</p>
        </div>
      </div>
    </div>

  </div>
</div>

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
