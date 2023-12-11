<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janji Temu</title>

  
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

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>Buat Janji</span> Sekarang </h1>    

    <div class="row">

        <div class="image">
            <img src="image/red-cross.png" alt="">
        </div>

        <?php
   $conn = mysqli_connect('localhost', 'root', '', 'rmh_sakit') or die('connection failed');

   $query = mysqli_query($conn, "SELECT * FROM dokter") or die('query failed');
   $dokterList = mysqli_fetch_all($query, MYSQLI_ASSOC);
   
   if (isset($_POST['submit'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $number = $_POST['number'];
       $datetime = $_POST['datetime'];
       $dokterId = $_POST['dokter'];
   
       // Validasi waktu
       $selectedTime = strtotime($datetime);
       $minTime = strtotime('08:00');
       $maxTime = strtotime('20:00');
   
       if ($selectedTime >= $minTime && $selectedTime <= $maxTime) {
           // Waktu valid, lakukan penyimpanan data ke database
           $janjitemu = mysqli_query($conn, "INSERT INTO `form_janji`(name, email, number, date, dokter_id) VALUES('$name','$email','$number','$datetime','$dokterId')") or die('query failed');
           if ($janjitemu) {
               $message = 'Janji Temu Berhasil!';
           } else {
               $message = 'Gagal membuat janji temu';
           }
       } else {
           // Waktu tidak valid
           $message = 'Tolong pilih waktu dari jam 08:00 hingga 20:00.';
       }
   }
   ?>
   
   <form action="" method="POST">
    <?php if (isset($message)) : ?>
        <p class="message"><?php echo $message; ?></p>
    <?php endif; ?>
    <h3>Buat janji temu</h3>
    <input type="text" name="name" placeholder="Nama Anda" class="box" required>
    <input type="number" name="number" placeholder="Nomor Telepon Anda" class="box" required>
    <input type="email" name="email" placeholder="E-mail Anda" class="box" required>
    <select name="dokter" class="box" required>
        <option value="">Pilih Dokter</option>
        <?php foreach ($dokterList as $dokter) : ?>
            <option value="<?php echo $dokter['id']; ?>"><?php echo $dokter['nama'] . ' - ' . $dokter['spesialisasi']; ?></option>
        <?php endforeach; ?>
    </select>
    <?php
    // Calculate the minimum and maximum date values dynamically
    $today = date('Y-m-d');
    $minTime = strtotime('08:00');
    $maxTime = strtotime('20:00');
    $minDateTime = $today . 'T' . date('H:i', $minTime);
    $maxDateTime = $today . 'T' . date('H:i', $maxTime);
    ?>
    <input type="datetime-local" name="datetime" min="<?php echo $minDateTime; ?>" max="<?php echo $maxDateTime; ?>" class="box" required>
    <input type="submit" name="submit" value="Janji Temu Sekarang" class="btn" required>
</form>   
</div>
</section>
</body>
</html>