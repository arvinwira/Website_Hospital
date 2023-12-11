<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<header class="header">
<a href="admin.php" class="logo"> <i class="fas fa-user"></i> <b>Admin</b> </a>
<nav class="navbar">
    <a href="admin.php">Dokter</a>
    <a href="admin.php">Ruang Rawat Inap</a>
    <a href="admin.php">Janji Temu</a>
</nav>
</header>
<section class="appointment" id="appointment">
<h1 class="heading"> <span>Tambah Data Dokter</span> </h1>  
<div class="row">
<?php
    $conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');

    if(isset($_POST['submit'])){

       $nama = ($_POST['nama']);
       $spesialisasi = ($_POST['spesialisasi']);
       $telepon = ($_POST['telepon']);
       $email =  $_POST['email'];
       $dokter = mysqli_query($conn, "INSERT INTO `dokter`(nama, spesialisasi, email) VALUES('$nama','$spesialisasi','$email')") or die('query failed');
       header('location:admin.php');

    }
?>

<form action = "" method="POST">
 
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="box" required>
   
    <input type="text" name="spesialisasi" id="spesialisasi" placeholder="Masukkan Spesialisasi" class="box" required>
   
    <input type="number" name="telepon" id="telepon" placeholder="Masukkan Telepon" class="box" required>
    
    <input type="email" name="email" id="email" placeholder="Masukkan Email" class="box" required>
    <input type="submit" name="submit" value="Tambah Data"class="btn">
</form>
</div>
</section>
</body>
</html>