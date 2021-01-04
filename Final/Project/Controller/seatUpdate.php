<?php
include '../Model/db.php';
$id = $_GET['id'];
header('location: ../View/seats.php');
SeatUpdate($id);



?>