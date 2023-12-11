<?php

$conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Rawat Inap</title>

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header class="header">

<a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <b>ABC Hospital</b> </a>

<nav class="navbar">
    <a href="index.php">Beranda</a>
    <a href="index.php">Tentang Kami</a>
    <a href="index.php">Pelayanan</a>
    <a href="dokter.php">Dokter</a>
    <a href="ruanginap.php">Ruang Rawat Inap</a>
    <a href="janjitemu.php">Janji Temu</a>
    <a href="index.php">Review</a>
    <a href="index.php">Blogs</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="ruanginap" id="ruanginap">

    <h1 class="heading"> Ruang <span>Rawat</span> Inap  </h1>

    <table class="table2">
        <tr>
            <th>Nomor Kamar</th>
            <th>Kapasitas</th>
            <th>Status</th>
        </tr>
    <?php
    $sql = "SELECT * FROM ruang_rawat_inap";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["nomor_kamar"]."</td><td>".$row["kapasitas"]."</td><td>".$row["status"]."</td></tr>";
        }
    } 
    else {
        echo "0 results";
    }
    ?>

    </table>

</section>



</body>
</html>