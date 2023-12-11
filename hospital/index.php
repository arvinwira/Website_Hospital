<?php
$conn = mysqli_connect('localhost','root','','rmh_sakit') or die('connection failed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <b>ABC Hospital</b> </a>

    <nav class="navbar">
        <a href="#home">Beranda</a>
        <a href="#about">Tentang Kami</a>
        <a href="#services">Pelayanan</a>
        <a href="dokter.php">Dokter</a>
        <a href="ruanginap.php">Ruang Rawat Inap</a>
        <a href="janjitemu.php">Janji Temu</a>
        <a href="#review">Review</a>
        <a href="#blogs">Blogs</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="home" id="home">

    <div class="image">
        <img src="image/rmhsakit.png" alt="">
    </div>

    <div class="content">
        <h3>kami menjaga hidup sehat Anda</h3>
        <p> Seseorang yang memiliki kesehatan fisik yang baik cenderung memiliki fungsi dan proses tubuh yang bekerja pada puncaknya.</p>
        <a href="janjitemu.php" class="btn"> buat janji <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>Dokter professional</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>Pasien yang puas</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>Fasilitas kamar</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>Rumah sakit tersedia</p>
    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>Tentang</span> Kami </h1>

    <div class="row">

        <div class="image">
            <img src="image/cross.png" alt="">
        </div>

        <div class="content">
            <h3>Nikmati Pengobatan Berkualitas Terbaik di Dunia</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> Layanan <span>Kami</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>periksa gratis</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>Ambulans 24/7</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Dokter professional</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>Obat</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>Fasilitas Kamar</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Perawatan lanjutan</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> Pelajari lebih lanjut <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="review" id="review">
    
    <h1 class="heading"> Review <span> Klien </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/kobe.jpg" alt="">
            <h3> Arvin </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Mantap</p>
        </div>

        <div class="box">
            <img src="image/ronalgoat.jpg" alt="">
            <h3> Gybran </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">nyaman</p>
        </div>

        <div class="box">
            <img src="image/lefoto.jpg" alt="">
            <h3> Farrel </h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">masterclass</p>
        </div>

    </div>

</section>

<section class="blogs" id="blogs">

    <h1 class="heading"> Blog <span>kami</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by  abc </a>
                </div>
                <h3>Judul Blog</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Link Cepat</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Beranda </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Tentang Kami </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Pelayanan </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Dokter </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Janji Temu </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>Layanan</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> Perawatan Gigi </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Terapi Pijat </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Kardiologi </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Ambulans </a>
        </div>

        <div class="box">
            <h3>info janji temu</h3>
            <a href="#"> <i class="fas fa-phone"></i> +6287244642344 </a>
            <a href="#"> <i class="fas fa-phone"></i> +6281365890734 </a>
            <a href="#"> <i class="fas fa-envelope"></i> abchospital@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia </a>
        </div>

        <div class="box">
            <h3>Ikuti kami</h3>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> &copy; 2023 ABC Hospital. </div>

</section>

<script src="js/script.js"></script>

</body>
</html>