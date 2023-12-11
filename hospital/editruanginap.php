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
<h1 class="heading"> <span>Edit Data Ruang Inap</span> </h1>  
<div class="row">
<?php
$conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');

$id = $_GET['id'];
$ruang_rawat_inap = mysqli_query($conn, "SELECT * FROM ruang_rawat_inap WHERE id = '$id'") or die('query failed');
$row = mysqli_fetch_array($ruang_rawat_inap);

if(isset($_POST['submit'])){
    $nomor_kamar = $_POST['nomor_kamar'];
    $kapasitas = $_POST['kapasitas'];
    $status = $_POST['status'];
    $ruang_rawat_inap = mysqli_query($conn, "UPDATE ruang_rawat_inap SET nomor_kamar = '$nomor_kamar', kapasitas = '$kapasitas', status = '$status' WHERE id = '$id'") or die('query failed');
    header('location:admin.php');
}
?>

<form action = "" method="POST">
 
    <input type="text" name="nomor_kamar" id="nomor_kamar" placeholder="Masukkan Nomor Kamar" class="box" value="<?php echo $row['nomor_kamar']; ?>" required>
    <input type="text" name="kapasitas" id="kapasitas" placeholder="Masukkan Kapasitas" class="box" value="<?php echo $row['kapasitas']; ?>" required>
    <select name="status" id="status" class="box" value="<?php echo $row['status']; ?>"  required>
        <option value="Tersedia">Tersedia</option>
        <option value="Terisi">Terisi</option>
    </select>
    <input type="submit" name="submit" value="Edit Data"class="btn">
</form>
</form>
</div>
</section>
</body>
</html>