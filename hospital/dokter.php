<?php

$conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter</title>

  
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
<section class="doctors" id="doctors">

<h1 class="heading"> Dokter <span>Kami</span> </h1>

<table class="table1">
    <tr>
        <th>nama</th>
        <th>spesialisasi</th>
        <th>email</th>
    </tr>
<?php
$sql = "SELECT * FROM dokter";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["nama"]."</td><td>".$row["spesialisasi"]."</td><td>".$row["email"]."</td></tr>";
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