<?php
include '../Model/db.php';
$id = $_GET['id'];
header('location: ../View/flights.php');
DeleteFlight($id);


?>