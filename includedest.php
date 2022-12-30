
<?php
session_start();
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
     <a class="navbar-brand" href="admin987.php">Kerala<span>Travel Agency</span></a>
     
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>
     
<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="includedest.php" class="nav-link">Destinations</a></li>
					<li class="nav-item"><a href="includehotel.php" class="nav-link">Hotels</a></li>
					<li class="nav-item"><a href="bookedlist.php" class="nav-link">Bookings</a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
				</ul>
			</div>

 </nav>
 <!-- END nav -->
 

<section class="ftco-section ftco-no-pb contact-section mb-4">
  <div class="container">
    <div class="row d-flex contact-info">
      
</div>
</div>
</section>

<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form method="post" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="place3" placeholder="Place">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="location3" placeholder="Location">
          </div>
          <div class="form-group">
          <textarea  id="" cols="30" rows="7" class="form-control" name="about" placeholder="About"></textarea>
          </div>
          <div class="form-group">
            <textarea  id="" cols="30" rows="7" class="form-control" name="link" placeholder="Image Link"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Submit" name ="include1" class="btn btn-primary py-3 px-5">
          </div>
        </form>
        
      </div>

      
   </div>
 </div>
</section>
<?php
include("connection.php");
if(isset($_POST['include1'])){
    $pl=$_POST['place3'];
    $lc=$_POST['location3'];
    $ab=$_POST['about'];
    $lk=$_POST['link'];
    $uk="INSERT INTO `details1`(`id`, `name`, `location`, `para`, `url`) VALUES ('[value-1]','$pl','$lc','$ab','$lk')";
    $yes=mysqli_query($con,$uk);
    if($yes){
        // echo("succes");
    }
}
?>

<section class="ftco-intro ftco-section ftco-no-pt">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-12 text-center">
    <div class="img"  style="background-image: url(images/bg_2.jpg);">
     <div class="overlay"></div>
     <h2>We Are Pacific A Travel Agency</h2>
     <p>We can manage your dream building A small river named Duden flows by their place</p>
     <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
   </div>
 </div>
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