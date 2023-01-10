<?php
  include '../dbconnect.php';
  $id = $_GET['idth'];
  $deletequery = " delete from bookings where id=$id";
  $query = mysqli_query($conn,$deletequery);
  header('location:booking.php');
?>