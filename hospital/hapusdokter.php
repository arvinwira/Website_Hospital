<?php
    $conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
    $id = $_GET['id'];
    $dokter = mysqli_query($conn, "DELETE FROM dokter WHERE id = '$id'") or die('query failed');
    header('location:admin.php');
?>