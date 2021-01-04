<?php 
include '../Model/db.php';
$id = $_GET['id'];
header('location: ../View/bookings.php');
BookingProceed($id);



?>