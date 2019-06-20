<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Infrastructure</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
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
        <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="active adu"><a href="infrastructure.php">Infrastructure</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li><a href="placements.php">Placements</a></li>
        <!-- <li><a href="resources.php">Resources</a></li> -->
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

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-6">

       <div class="container-fluid">
          <div class="row infra">

            <div class="container-fluid">
              <center><h3>Machine Learning Laboratory</h3></center>
              <img class="Photo" src="Images/mllab.jpg">
              <p> <br>Machine Learning is a science that enables machines (especially computers) to learn
              	from environments and make own decisions. At Machine Learning Laboratory (MLL),
              	we carry out research and develop different theoretical foundations for
              	machine learning such as: How machines should help in planning activities by
              	learning from environments? How machines should learn in the presence of noisy environment?
				How learning gets affected if different machine learning algorithms are trying compete instead of cooperating?
              </p>
            </div>
          </div>
      </div>

      <div class="container-fluid">
          <div class="row infra">

            <div class="container-fluid">
              <center><h3>Electronics Laboratory</h3></center>
              <img class="Photo" src="Images/electronicslab.jpg">
              <p > <br> <br>This lab facilitates ESD safe working environment equipped with microprocessor and
              	microcontroller evaluation kits, training kits, Universal I.C. programmer,
              	In-circuit debugger, SMD station, multi channel DSOs and programmable function generators,
              	 computers providing both Linux and Windows platform for programming and interfacing.

              </p>
            </div>
          </div>
      </div>


    </div>

    <div class="col-lg-6">

       <div class="container-fluid">
          <div class="row infra">

            <div class="container-fluid">
              <center><h3>Data Structures Laboratory</h3></center>
              <img class="Photo" src="Images/dslab.jpg">
              <p > <br> <br>Data Structures laboratory is spatial and well equipped with the latest HP systems.
               It provides a wide approach in C programming and enables to apply knowledge in File Structures and Software Testing. <br>
                The lab is used to train the students to improve their programming knowledge and make experiments to get familiar with the Core Courses.
              </p>
            </div>
          </div>
      </div>

      <div class="container-fluid">
          <div class="row infra">

            <div class="container-fluid">
              <center><h3>Web Technologies Laboratory</h3></center>
              <img class="Photo" src="Images/weblab.jpg">
              <p > <br><br>Web Technology is the methods by which computers communicate with each other through the use of markup languages and multimedia packages. In the past few decades, web technology has undergone a dramatic transition due to which it is very necessary to have a dedicated lab.
              	The lab has latest HP computes with all essential softwares like phpmyadmin to run local server and program websites.
              </p>
            </div>
          </div>
      </div>


    </div>

<!--     <div class="col-lg-6 morephotos">
      <div class="container-fluid">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
      </div>
      <div class="container-fluid">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
      </div>
       <div class="container-fluid">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
        <img class="thumbnail Photo" src="http://c1.staticflickr.com/9/8450/8026519634_f33f3724ea_b.jpg">
      </div>
    </div> -->

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
