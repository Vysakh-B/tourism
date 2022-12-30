
<?php
session_start();
include("connection.php");
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
					<li class="nav-item "><a href="includedest.php" class="nav-link">Destinations</a></li>
					<li class="nav-item"><a href="includehotel.php" class="nav-link">Hotels</a></li>
					<li class="nav-item active"><a href="bookedlist.php" class="nav-link">Bookings</a></li>
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
  <?php
echo('
<table style="width:100%"><table border ="2"> <tr>
<th style="width:40px">ID</th>
<th style="width:90px">User Name</th>
<th style="width:90px">Place</th>
<th style="width:80px">Location</th>
<th style="width:90px">Hotel Name</th>
<th style="width:110px">Hotel Mail</th>
<th style="width:60px">Price</th></tr>');
$req="SELECT * FROM `bookings1`";
 $result=mysqli_query($con,$req);
				if($result){
					if(mysqli_num_rows($result)>0){
					while($vl = mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo('<td>'.$vl['id'].'</td>');
                    echo('<td>'.$vl['user_name'].'</td>');
                    echo('<td>'.$vl['place'].'</td>');
                    echo('<td>'.$vl['location'].'</td>');
                    echo('<td>'.$vl['hotel_name'].'</td>');
                    echo('<td>'.$vl['hotel_mail'].'</td>');
                    echo('<td>'.$vl['price'].'</td>');
                    
                    }}}

?>
    
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