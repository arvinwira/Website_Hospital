<?php
session_start();

// Cek apakah pengguna belum login, jika belum, redirect ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('location:adminlogin.php');
    exit;
}


// Logout pengguna
if (isset($_GET['logout'])) {
    session_destroy(); // Menghapus semua data session
    header('location:adminlogin.php');
    exit;
}
?>

<?php
  $conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
  $dokter = mysqli_query($conn, "SELECT * FROM dokter");
  $ruanginap = mysqli_query($conn, "SELECT * FROM ruang_rawat_inap");
  $janjitemu = mysqli_query($conn, "SELECT * FROM form_janji");
?>

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
<a href="#" class="logo"> <i class="fas fa-user"></i> <b>Admin</b> </a>
<nav class="navbar">
    <a href="#doctors">Dokter</a>
    <a href="#ruanginap">Ruang Rawat Inap</a>
    <a href="#janjitemu">Janji Temu</a>
    <a href="admin.php?logout=true">Logout</a>
</nav>
</header>

<section class="doctors" id="doctors">

<h1 class="heading"> Data <span>Dokter</span> </h1>
<a href="tambahdokter.php" class="btn">Tambah Data</a>
<table class="table1">
    <tr>
        <th>nama</th>
        <th>spesialisasi</th>
        <th>telepon</th>
        <th>email</th>
        <th>aksi</th>
    </tr>
<?php
while ($row = mysqli_fetch_array($dokter)) {
?>
    <tr>
      <td><?php echo $row['nama']; ?> </td>
      <td><?php echo $row['spesialisasi']; ?> </td>
      <td><?php echo $row['telepon']; ?> </td>
      <td><?php echo $row['email']; ?> </td>
      <td>
        <a href="editdokter.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="hapusdokter.php?id=<?php echo $row['id']; ?>">Hapus</a>
    </tr>
<?php
}
?>
</table>
</section>

<section class="ruanginap" id="ruanginap">
<h1 class="heading"> Data <span>Ruang Rawat Inap</span>  </h1>
<a href="tambahruanginap.php" class="btn">Tambah Data</a>
  <table class="table2">
    <tr>
      <th>Nomor Kamar</th>
      <th>Kapasitas</th>
      <th>Status</th>
      <th>aksi</th>
    </tr>
<?php
while ($row = mysqli_fetch_array($ruanginap)) {
?>
    <tr>
      <td><?php echo $row['nomor_kamar']; ?> </td>
      <td><?php echo $row['kapasitas']; ?> </td>
      <td><?php echo $row['status']; ?> </td>
      <td>
        <a href="editruanginap.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="hapusruanginap.php?id=<?php echo $row['id']; ?>">Hapus</a>
    </tr>
<?php
}
?>
</table>
</section>

<section class="appointment" id="appointment">
    <h1 class="heading">Data <span>Janji Temu</span></h1>
    <a href="tambahjanji.php" class="btn">Tambah Data</a>
    <table class="table1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Number</th>
            <th>Date</th>
            <th>Dokter</th>
            <th>Aksi</th>
        </tr>
        <?php
        $janjitemu_query = mysqli_query($conn, "SELECT * FROM form_janji") or die('query failed');
        while ($row = mysqli_fetch_array($janjitemu_query)) {
            $dokter_id = $row['dokter_id'];
            $dokter_query = mysqli_query($conn, "SELECT * FROM dokter WHERE id = $dokter_id");
            $dokter_data = mysqli_fetch_array($dokter_query);
            $dokter_nama = $dokter_data['nama'];
            $dokter_spesialisasi = $dokter_data['spesialisasi'];
        ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $dokter_nama . ' - ' . $dokter_spesialisasi; ?></td>
                <td>
                    <a href="editjanji.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapusjanji.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>


</body>
</html>