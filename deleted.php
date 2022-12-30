<?php
include("connection.php");
$id = $_GET['id'];
$qry = "DELETE FROM `bookings1` WHERE id=$id";
$r = mysqli_query($con, $qry);
if ($r) {
    echo ("success");

    header("location:accountmain.php");
} else {
    echo ("fails");
}
