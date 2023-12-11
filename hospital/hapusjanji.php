<?php
    $conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
    $id = $_GET['id'];
    $janjitemu = mysqli_query($conn, "DELETE FROM form_janji WHERE id = '$id'") or die('query failed');
    header('location:admin.php');
?>