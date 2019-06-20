<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placements</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="charts.js">

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

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
        <li class="active adu"><a href="placements.php">Placements</a></li>
        <!-- <li><a href="resources.php">Resources</a></li> -->
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php">Profile</a></li>
        <?php if(!isset($_SESSION['usn'])) echo"<li><a href='login.php'>Log In</a></li>";?>
        <?php if(isset($_SESSION['usn'])) echo"<li><a href='logout.php'>Log out</a></li>";?>
      </ul>
    </div>

  </div>
</nav>


<!-- CONTENT HERE -->

<div class="container-fluid">
  <div class="row">

    <div class="col-sm-4">

      <div class="placementcard">
        <img src="Images/ramesh.jpg" width="200px" height="200px">
        <center><p><span class="name">Ramesh Babu</span>Placement Officer</p></center>
      </div>

    </div>
    <div class="col-sm-4">
      <div class="placementcard">
        <img src="Images/mahitha.jpg" width="200px" height="200px">
        <center><p><span class="name">Mahitha G</span>Placement co-ordinator</p></center>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="placementcard">
        <img src="Images/babu.jpg" width="200px" height="200px">
        <center><p><span class="name">Babu Kumar S</span>Placement co-ordinator</p></center>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="placementdescription"><br>
        <center>We have very experienced placement co-ordinators, Mr.Babu Kumar and Ms.Mahitha G in the department of ISE who ensure that all the students are ever ready to excel in placement activities. To ensure the same, the co-ordinators under the guidance of the placement officer organise various activities like pre-placement talks and aptitude training programs.
        <!-- Due to their co-ordinated effort with the students, Department of ISE has the highest placement percentage currently in the institution. -->
        Apart from these activities the department also has various workshops on Python, DEVOPS, CISCO Computer Networks organised every semester which will help students develop skills as well as increase their opportunities of excelling in the placement activities. <center>
      </div>

   </div>
</div>
<br> <br>
<div class="container">
    <section class="customer-logos slider">
      <div class="slide"><img src="https://www.savethechildren.org/content/dam/usa/images/graphics/accenture-rec.png/_jcr_content/renditions/cq5dam.thumbnail.360.360.png"></div>
      <div class="slide"><img src="https://www.infosys.com/careers/PublishingImages/2016/infosys-logo.png"></div>
      <div class="slide"><img src="http://www.pngpix.com/wp-content/uploads/2016/07/PNGPIX-COM-Cognizant-Logo-PNG-Transparent.png"></div>
      <div class="slide"><img src="http://mobi-wall.brothersoft.com/files/480320/o/12817080914483.jpg"></div>
      <div class="slide"><img src="http://easyjobs.md/wp-content/uploads/2016/03/bosch-logo-22.jpg"></div>
      <div class="slide"><img src="https://www.computing.co.uk/w-images/56e42485-98cd-4293-9dcf-7d793af776d3/0/jpmorganlogo-580x358.png"></div>
      <div class="slide"><img src="https://techstory.in/wp-content/uploads/2015/07/Mindtree.png"></div>
      <div class="slide"><img src="http://chiefit.me/wp-content/uploads/2018/08/Subex-Logo835x396.jpg"></div>
   </section>
  </div>


<div class="container">
    <center><canvas id="myChart"></canvas></center>
</div>

<script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let data = {
      labels: ['2015', '2016', '2017', '2018'],
      datasets: [
        {
          label: "Companies",
          data:[ 10,20,30,40],
          backgroundColor: [
            'rgba(10, 20, 30, 0.3)',
            'rgba(10, 20, 30, 0.3)',
            'rgba(10, 20, 30, 0.3)',
            'rgba(10, 20, 39, 0.3)'
          ],
          borderColor: [
            'rgba(10, 20, 30, 1)',
            'rgba(10, 20, 30, 1)',
            'rgba(10, 20, 30, 1)',
            'rgba(10, 20, 30, 1)'
          ],
          borderWidth: 1
        },
        {
          label: "Offers",
          data:[ 100,200,300,400],
          backgroundColor: [
            'rgba(50, 150, 250, 0.3)',
            'rgba(50, 150, 250, 0.3)',
            'rgba(50, 150, 250, 0.3)',
            'rgba(50, 150, 250, 0.3)'
          ],
          borderColor: [
            'rgba(50, 150, 250, 1)',
            'rgba(50, 150, 250, 1)',
            'rgba(50, 150, 250, 1)',
            'rgba(50, 150, 250, 1)'
          ],
          borderWidth: 1
        }
      ]
    };

    let options = {
      title : {
          display : true,
          position: "top",
          text: "Placement Statistics",
      },
      legend: {
        display: true,
        position: "right"
      }
    }

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data: data,
      options:options
    });

</script>
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
    <script  src="js/compcaro.js"></script>

</body>
</html>
