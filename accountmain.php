<?php
session_start();
include("connection.php");
// $plc=$_GET['place'];
// $loct=$_GET['location'];
// $hnme=$_GET['h_name'];
// $hmail=$_GET['h_mail'];
// $prc=$_GET['price'];
// $img=$_GET['u'];
// $user=$_SESSION['user_name'];
// // $query="SELECT * FROM `details` WHERE name='$plc'";
// // $out=mysqli_query($con,$query);
// // if($out){
// //   $c=mysqli_fetch_assoc($out);
// // }
// // $abt=$_GET['paragraph'];
// $instruction="INSERT INTO `booking`(`id`, `user_name`,`about`, `place`, `location`, `hotel_name`, `price`, `hotel_mail`) VALUES ('[value-1]','$user','$img','$plc','$loct','$hnme','$prc','$hmail')";
// $result=mysqli_query($con,$instruction);
// if($result){
//   // echo("registration succesful");
// }
// else{
//   // echo("registratin unsuccesful");
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.php">Kerala<span>Travel Agency</span></a>
	 <?php
     echo("<h4>hello  ".$_SESSION['user_name']."</h4>");
	 ?>
     <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
         <li class="nav-item"><a href="signup.php" class="nav-link">Sign up</a></li>
         <li class="nav-item"><a href="signin.php" class="nav-link">Sign in</a></li>
					<li class="nav-item active"><a href="destination.php" class="nav-link">Destination</a></li>
         <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
         <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
     </ul>
 </div> -->
</div>
</nav>
<!-- END nav -->
<?php


?>
<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
        
					<!-- <div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Destination</span>
						<h2 class="mb-4">Tour Destination</h2>
					</div> -->
				</div>
		    <div class="row">
				<?php
$user=$_SESSION['user_name'];

        $qurry="SELECT * FROM `bookings1` WHERE user_name='$user'";
        $d=mysqli_query($con,$qurry);
        if($d){
			if(mysqli_num_rows($d)>0){
				while($all = mysqli_fetch_assoc($d)){
						//destination card
						?>
						
						<div class="col-md-4 ftco-animate">
						<div class="project-wrap">
						<?php
						echo('
							<div class="img" style="background-image: url('.$all['about'].');" alt="hggj">
                           </div>
						   ');
						   ?>
							<div class="text p-4">
                <?php
								echo('<span class="days">'.$all['location'].'</span>');
                ?>
								<?php
								echo("<h3><a href=''>".$all['place']."</a></h3>");
								// echo("<h3><a href=''>".$all['id']."</a></h3>");
								 
								echo ("<p class='location'><span class='fa fa-map-marker'></span> $all[hotel_name],$all[hotel_mail]</p>");
	// 							echo("<p>
    //   <a href='account.php'>cancel</a></p>");
	echo("<a href='deleted.php?id=$all[id]'>
	Cancel
		</a>");
	?>
	<!-- <form action="deie" method="post">
		<input type="submit" name="dlte" value="Cancel">
	</form> -->
	
                  
                  
								
					 		</div>
					 	</div>
					 </div> 
					 <?php
					//destination card
					}
					}
				}
				?>


			</div>
				
				
			</div>
		</section>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>
