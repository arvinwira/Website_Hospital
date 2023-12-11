<?php
    $conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
    $id = $_GET['id'];
    $ruang_rawat_inap = mysqli_query($conn, "DELETE FROM ruang_rawat_inap WHERE id = '$id'") or die('query failed');
    header('location:admin.php');
?>