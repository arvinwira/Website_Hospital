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
    <h1 class="heading"> <span>Tambah Data Janji</span> </h1>  
    <div class="row">
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'rmh_sakit') or die('connection failed');
        
        if (isset($_POST['submit'])) {
        
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $number = ($_POST['number']);
            $datetime = $_POST['datetime'];
            $dokter_id = $_POST['dokter'];

            $janjitemu = mysqli_query($conn, "INSERT INTO `form_janji`(name, email, number, date, dokter_id) VALUES('$name','$email','$number','$datetime', '$dokter_id')") or die('query failed');
            header('location:admin.php');
        
        }
        
        $dokter_query = mysqli_query($conn, "SELECT * FROM dokter") or die('query failed');
        $dokterList = mysqli_fetch_all($dokter_query, MYSQLI_ASSOC);
        ?>
        
        <form action="" method="POST">
            <input type="text" name="name" placeholder="nama anda" class="box">
            <input type="number" name="number" placeholder="nomor telfon anda" class="box">
            <input type="email" name="email" placeholder="e-mail anda" class="box">
            <select name="dokter" class="box">
                <option value="">Pilih Dokter</option>
                <?php foreach ($dokterList as $dokter) : ?>
                    <option value="<?php echo $dokter['id']; ?>"><?php echo $dokter['nama'] . ' - ' . $dokter['spesialisasi']; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="datetime-local" name="datetime" class="box">
            <input type="submit" name="submit" value="Tambah Data" class="btn">
        </form>
    </div>
</section>

</body>
</html>