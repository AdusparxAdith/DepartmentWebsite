<?php
session_start();
// $username = $_SESSION['usn'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placement Details</title>
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

<?php
// session_start();
$username = $_SESSION['usn'];
echo "<div class='continer-fluid'>";
echo '<center><table class="placedetails">';
  $dbhost = 'localhost';
  $dbuser = 'ise';
  $dbpass = 'isedsatm';
  $result = '';

 $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 if(! $conn ) {
    die('Could not connect: ' . mysql_error());
 }
 mysqli_select_db($conn,'ise');


 if(!isset($_SESSION['usn']))
 {
   header('Location: login.php');
   echo"<center><h2>Couldn't fetch details<h2></center>";
}
else{
  $usn = $_SESSION['usn'];

  $headings = "SELECT * FROM fulldetails WHERE `COL 2`= 'USNO'";
  $query = "SELECT * FROM fulldetails WHERE `COL 2`= '$usn'";

  $studentdetails = mysqli_query($conn,$query) or die("Couldn't fetch student details");

  if(mysqli_num_rows($studentdetails)==0){
    echo"<h2><center>No records</center></h2>";
  }
  else{

  $labels = mysqli_query($conn,$headings) or die("Couln't fetch headings ");

  while($head = mysqli_fetch_array($labels, MYSQLI_ASSOC) and $row = mysqli_fetch_array($studentdetails, MYSQLI_ASSOC) ){

     for($i=2;$i<43;$i++)
        echo "<tr > <td class='rowdetail'><strong>{$head['COL '.$i]}</strong></td> <td><strong>{$row['COL '.$i]}</td></strong></tr>";

  }

  echo"</table></center>";
  echo "</div>";

  echo '<form method="post" action="placetempfinal.php" id="hiddenform" class="detailsform">',
       '<center><label for="exampleFormControlInput1">What needs to be modified?</label></center>',
       '<center><input type="text" class="form-control" placeholder="Heading : Value; Heading : Value; Heading : Value.." name="content"></center>',
       '<center><button type="submit" name="detailsbtn">Submit</button></center></form>';

       // if(isset($_POST['detailsbtn'])){
       //   $subject = "modification";
       //   $message = $_POST['content'];
       //   mail("adusparx@gmail.com", $subject, $message,"From: adusparx@gmail.com");
       // }
       // else{
       //   echo "fail";
       // }

   }
}
?>



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
