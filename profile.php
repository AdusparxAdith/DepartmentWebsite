<?php
session_start();
// $username = $_SESSION['usn'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/customstyle.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="js/avg.js"></script>

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
        <!-- <li><a href="resources.php">Resources</a></li> -->
        <li><a href="contact.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active adu"><a href="profile.php">Profile</a></li>
        <!-- <li><a href="login.php">Log In</a></li> -->
        <?php if(isset($_SESSION['usn'])) echo"<li><a href='logout.php'>Log out</a></li>";?>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>


<!-- CONTENT HERE -->
<script type='text/javascript'>function highlight(){
  var element = document.getElementById('dayrow');
  element.classList.add('selected');

}</script>


<?php
   // session_start();

   $dbhost = 'localhost';
   $dbuser = 'ise';
   $dbpass = 'isedsatm';
   $studentname = '';

   $username = $_SESSION['usn']; // session validation
   $semester = $_SESSION['semester'];

   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   mysqli_select_db($conn,'ise');


	 if(!isset($_SESSION['usn']))
	 {
     // echo("<center><h1>Invalid Login Details</h1></center>");
     header('Location:  login.php');

		}
    else{

      $username = $_SESSION['usn'];
 		  $semester = $_SESSION['semester'];


 		 $userquery = "SELECT * FROM student_details WHERE usn ='$username' ";
 		 $userresult = mysqli_query($conn,$userquery) or die('No student details fetched');
 		 $row = mysqli_fetch_array($userresult, MYSQLI_ASSOC);

     $semester = $row['semester'];
    // $_SESSION['usn']=$username;


 			$deadline= "SELECT * FROM data WHERE semester ='$semester' ";
 			$deadlineresult = mysqli_query($conn,$deadline) or die('Couldnt fetch deadlines');

 			$IAquery = "SELECT `IA1`, `IA2`, `IA3` FROM `student_details` WHERE usn='$username' ";
 			$IAresult = mysqli_query($conn,$IAquery) or die('Couldnt fetch IA Marks');

 			$studentnamequery = "SELECT `name` FROM `student_details` WHERE usn= '$username'";
 			$studentnameresult = mysqli_query($conn,$studentnamequery) or die('Couldnt fetch name');

 			$studentname = mysqli_fetch_array($studentnameresult, MYSQLI_ASSOC);
 		 	$sname = $studentname['name'];

     echo"<div class='container-fluid'>";
         echo'<div class="row">';

           echo'<div class="container-fluid">';
             echo("<h2> Hello $sname!</h2></div>");

           echo'<div class="col-lg-10 mainsection">';
             echo'<table class="internals">';
               echo'<tr> <th>INTERNALS 1</th><th>INTERNALS 2</th><th>INTERNALS 3</th> </tr>';
                 while($IAmarks = mysqli_fetch_array($IAresult, MYSQLI_ASSOC)){
                   echo"<tr> <td>{$IAmarks['IA1']}</td> <td>{$IAmarks['IA2']}</td> <td>{$IAmarks['IA3']}</td></tr>";
                 }
               echo'</table>'; ?>

               <?php

               $IAquery = "SELECT `IA1`, `IA2`, `IA3` FROM `student_details` WHERE usn='$username' ";
               $IAresult = mysqli_query($conn,$IAquery) or die('Couldnt fetch IA Marks');
               $IAmarks = mysqli_fetch_array($IAresult, MYSQLI_ASSOC);
               $IA1 = $IAmarks['IA1'];
               $IA2 = $IAmarks['IA2'];
               $IA3 = $IAmarks['IA3'];

               ?>

               <div class="container-fluid avg">
                 <script type="text/javascript">

                   one   = <?php echo $IA1?>;
                   two   =  <?php echo $IA2?>;
                   three =  <?php echo $IA3?>;

                   avg = besttwo(one,two,three);
                   document.write("<div class='alert alert-success' role='alert'>"+"Your average is : "+avg+"</div>");

                  </script>
               </div>

               <div class="container extra">
                 <center><h2>TIMETABLE</h2></center>
                 <table class="timetable">
                   <tr><td> Day </td> <td> 9:30  </td> <td> 10:20 </td> <td> 11:10 </td> <td> 11:30  </td> <td> 12:20 </td> <td> 1:10  </td> <td> 2:00  </td> <td> 2:50 </td> <td> 3:40 </td></tr>
                 <?php
                 if ($semester == "7" ) $timetablevar = "timetable1";
                 if ($semester == "5" ) $timetablevar = "timetable2";
                 if ($semester == "3" ) $timetablevar = "timetable3";
                 $day = 'Tuesday';
                 $query = "SELECT * FROM $timetablevar";
                 $result = mysqli_query($conn,$query) or die('No student details fetched');
                 while($varr = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                    echo"<tr id='dayrow'> <td>{$varr['Day']} </td> <td>{$varr['1']} </td> <td>{$varr['2']} </td> <td>{$varr['3']} </td> <td>{$varr['4']} </td> <td>{$varr['5']} </td> <td>{$varr['6']} </td> <td>{$varr['7']} </td> <td>{$varr['8']} </td> <td>{$varr['9']} </td></tr>";
                                    if($varr['Day'] == $day) echo"<script type='text/javascript'>highlight()</script>";
                                  }
                 ?>
               </table>
               </div>





          <?php echo'</div><div class="col-lg-2 announcements">';
             echo'<div class="vladu"></div>';
               echo'<div class="container-fluid sidepane">';
                 echo"<div class='container-fluid'>";
                   echo'<h2>Important</h2>';
                     echo'<ul class="deadlinescol">';
                       while($chores = mysqli_fetch_array($deadlineresult, MYSQLI_ASSOC)){
                         echo"<li><span class='chore'>{$chores['due']}<span> : {$chores['deadline']}</li>";
                       }
                       echo'</ul><hr/>';
                       echo"<a class='detag' href='placedetails.php' target='_blank'><button type='button' class='btn btn-default detailsbutton'>Placement Details</button></a>";
                       echo"<a class='detag' href='https://drive.google.com/open?id=1Eqa8V8RXCMELBCqoIY_XjDmB1DtRMW5p' target='_blank' id='assignments'><button type='button' class='btn btn-default detailsbutton'>Assignments</button></a>";
                       echo"<a class='detag' href='https://drive.google.com/open?id=1eEdtymyv7yCIgsXXvTm-dkDvLa9LanZK' target='_blank' id='notes'><button type='button' class='btn btn-default detailsbutton'>Notes</button></a>";
                       echo"<a class='detag' href='https://drive.google.com/open?id=1UE4JPbt4SDjT-fyL2tVTFveGt7p0j1jt' target='_blank' id='resources'><button type='button' class='btn btn-default detailsbutton'>Resources</button></a>";

                 echo"</div>";
               echo'</div>';
           echo'</div>';
       echo'</div>';
 echo'</div>';
}

?>

<script>
  semester = <?php echo $semester?>;
  if(semester == 5 || semester == 6){
    document.getElementById("assignments").href="https://drive.google.com/open?id=1w215wb4XRy-EwXdumAARuqOB96Qn-FyO";
    document.getElementById("notes").href="https://drive.google.com/open?id=15-jLpVwVWoxCGs8wjXKunhEZy3WTibD8";
    document.getElementById("resources").href="https://drive.google.com/open?id=1lypbAF3mcjYXsR8I9sD0MWRnHCPeQ7gX";


  }

  else if(semester == 4 || semester == 3){
    document.getElementById("assignments").href="https://drive.google.com/open?id=1f0l6yiWja9GnKE-a9Siw1udWUHC8LxPP";
    document.getElementById("notes").href="https://drive.google.com/open?id=1ak4NXv-GSh5mfRc_e9WazvFZP6EuKH_D";
    document.getElementById("resources").href="https://drive.google.com/open?id=1BFsdMTbtSXTV-5h8FKZHYSKfyiAXD49d";
  }


</script>

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
