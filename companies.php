<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact us</title>
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
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="infrastructure.php">Infrastructure</a></li>
        <li><a href="faculty.php">Faculty</a></li>
        <li  class="active adu"><a href="placements.php">Placements</a></li>
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

<div class="container">
  <div class="row">
    <div class="col-sm-9">
     <table class="table table-striped companytable">
    <thead>
      <tr>
        <th>Sl. No.</th>
        <th>Company Name</th>
        <th>Number of students placed</th>
      </tr>
    </thead>
    <tbody>
      <tr class="companyrow">
        <td>1</td>
        <td>Accenture</td>
        <td>90</td>
      </tr>
      <tr class="companyrow">
        <td>2</td>
        <td>Infosys</td>
        <td>43</td>
      </tr>
      <tr class="companyrow">
        <td>3</td>
        <td>Cognizant</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>4</td>
        <td>Bridgei2i</td>
        <td>1</td>
      </tr>
       <tr class="companyrow">
        <td>5</td>
        <td>EY</td>
        <td>5</td>
      </tr>
       <tr class="companyrow">
        <td>6</td>
        <td>Mahindra Comviva</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>7</td>
        <td>Zycus</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>8</td>
        <td>Oracle</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>9</td>
        <td>TCS</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>10</td>
        <td>LNT</td>
        <td>20</td>
      </tr>
       <tr class="companyrow">
        <td>11</td>
        <td>Kalerya</td>
        <td>20</td>
      </tr>
      <tr class="companyrow">
        <td>12</td>
        <td>Value Labs</td>
        <td>20</td>
      </tr>
      <tr class="companyrow">
        <td>13</td>
        <td>All State</td>
        <td>20</td>
      </tr>
      <tr class="companyrow">
        <td>14</td>
        <td>42 Gears</td>
        <td>20</td>
      </tr>
    </tbody>
  </table>
    </div>
  </div>
</div>


<!-- FOOTER -->

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
