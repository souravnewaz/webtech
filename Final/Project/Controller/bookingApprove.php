<?php 
include '../Model/db.php';
$id = $_GET['id'];

BookingApprove($id);
header('location: ../View/bookings.php');

?>