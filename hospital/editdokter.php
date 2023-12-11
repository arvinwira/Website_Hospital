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
<h1 class="heading"> <span>Edit Data Dokter</span> </h1>  
<div class="row">
<?php
$conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');

$id = $_GET['id'];
$dokter = mysqli_query($conn, "SELECT * FROM dokter WHERE id = '$id'") or die('query failed');
$row = mysqli_fetch_array($dokter);

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $spesialisasi = $_POST['spesialisasi'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $dokter = mysqli_query($conn, "UPDATE dokter SET nama = '$nama', spesialisasi = '$spesialisasi', telepon = '$telepon', email = '$email' WHERE id = '$id'") or die('query failed');
    header('location:admin.php');
}
?>

<form action = "" method="POST">
 
    <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" class="box" value="<?php echo $row['nama']; ?>" required>
   
    <input type="text" name="spesialisasi" id="spesialisasi" placeholder="Masukkan Spesialisasi" class="box" value="<?php echo $row['spesialisasi']; ?>" required>
   
    <input type="number" name="telepon" id="telepon" placeholder="Masukkan Telepon" class="box" value ="<?php echo $row['telepon']; ?>"required>
    
    <input type="email" name="email" id="email" placeholder="Masukkan Email" class="box" value="<?php echo $row['email']; ?>" required>
    <input type="submit" name="submit" value="Edit Data"class="btn">
</form>
</div>
</section>
</body>
</html>