<?php
include("connection.php");
session_start();
$pic=$_GET['img'];
              $rq=$_GET['place']; 
                $kl="SELECT * FROM `hotels1` WHERE hotel_name ='$rq'";
                $d=mysqli_query($con,$kl);
                if($d){
                  $detl=mysqli_fetch_assoc($d);
                }
                
$user=$_SESSION['user_name'];
$plc=$detl['place'];
$loct=$detl['location'];
$hnme=$detl['hotel_name'];

                  $instruction="INSERT INTO `bookings1`(`id`, `user_name`,`about`, `place`, `location`, `hotel_name`, `price`, `hotel_mail`) VALUES ('[value-1]','$user','$pic','$plc','$loct','$hnme','$detl[price]','$detl[mail_id]')";
$result=mysqli_query($con,$instruction);
if($result){
  echo (
    "<script>
    
    window.location.href='accountmain.php';
    </script>");
}
else{
  echo("registratin unsuccesful");
}

                
                
                
                ?>