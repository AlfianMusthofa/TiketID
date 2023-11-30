<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketID | <?= $data['detail']['name'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/<?= $data['css'] ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="<?= BASEURL ?>/home">TiketID</a>
        </div>
        <div class="navlink">
            <a href="login.php">Masuk</a>
            <a href="signup.php" class="daftar">Daftar</a>
        </div>
    </section>
    <section class="hero">
        <img src="<?= BASEURL ?>/img/CardImage/<?= $data['detail']['img1'] ?>" alt="">
        <div class="box-image">
            <img src="<?= BASEURL ?>/img/cardImage/<?= $data['detail']['img2'] ?>" alt="">
            <img src="<?= BASEURL ?>/img/CardImage/<?= $data['detail']['img3'] ?>" alt="">
            <img src="<?= BASEURL ?>/img/CardImage/<?= $data['detail']['img4'] ?>" alt="">
            <img src="<?= BASEURL ?>/img/CardImage/<?= $data['detail']['img5'] ?>" alt="">
        </div>
    </section>
    <div class="nav container mx-auto">
        <a href="#info">Info Umum</a>
        <a href="#">Lokasi</a>
    </div>
    <div class="info-umum container mx-auto" id="info">
        <div class="row">
            <div class="col">
                <div class="box">
                    <p class="cate">Hotel</p>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="name">
                    <h3><?= $data['detail']['name'] ?></h3>
                </div>
                <div class="loc">
                    <div class="logo">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="loc-name">
                        <p><?= $data['detail']['address'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="price">
                    <p>Mulai dari</p>
                    <h3><?= $data['detail']['np'] ?></h3>
                </div>
                <a href="#">Pesan</a>
            </div>
        </div>
    </div>
    <div class="reg container mx-auto">
        <div class="content">
            <img src="<?= BASEURL ?>/img/icon/icon (27).png" alt="">
            <div class="box">
                <p>Sudah punya akun belum?</p>
                <p>Buat akun atau login yuk. Ada diskon dan benefit biar lebih cuan!</p>
            </div>
        </div>
        <a href="signup.php">Daftar Sekarang</a>
    </div>
    <div class="benefit container mx-auto">
        <div class="title">
            <h3>Serunya nginep disini!</h3>
        </div>
        <div class="row grid grid-cols-3 grid-rows-2 gap-y-7 gap-x-4">
            <div class="box">
                <img src="<?= BASEURL ?>/img/icon/icon (25).png" alt="">
                <div class="text">
                    <h4>Tempat bersih, Layanan keren</h4>
                    <p>91% tamu menilai kebersihan dan layanan di akomodasi ini fantastis.</p>
                </div>
            </div>
            <div class="box">
                <img src="<?= BASEURL ?>/img/icon/icon (24).png" alt="">
                <div class="text">
                    <h4>Lokasinya strategis</h4>
                    <p>Dekat dengan tempat belanja, stasiun kereta dan restoran.</p>
                </div>
            </div>
            <div class="box">
                <img src="<?= BASEURL ?>/img/icon/icon (23).png" alt="">
                <div class="text">
                    <h4>Cocok untuk perjalanan medis</h4>
                    <p>Dekat dengan fasilitas kesehatan dan disukai tamu yang melakukan perjalanan medis.</p>
                </div>
            </div>
            <div class="box">
                <img src="<?= BASEURL ?>/img/icon/icon (22).png" alt="">
                <div class="text">
                    <h4>Pas buat yang mau rileks</h4>
                    <p>Kamu bisa manjain diri dengan gym, salon & kecantikan, dan sauna.</p>
                </div>
            </div>
            <div class="box">
                <img src="<?= BASEURL ?>/img/icon/icon (21).png" alt="">
                <div class="text">
                    <h4>Ada tempat hangout seru</h4>
                    <p>Nginep disini nggak perlu takut bosan. Ada lounge dan bar buat nyantai.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fasilitas container mx-auto">
        <div class="title">
            <h3>Fasilitas Populer</h3>
        </div>
        <div class="row grid grid-cols-4">
            <div class="box">
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (6).png" alt="">
                    <p>Indonesia Care</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (8).png" alt="">
                    <p>Parkir</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (9).png" alt="">
                    <p>Lift</p>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (14).png" alt="">
                    <p>Ticket Clean</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (15).png" alt="">
                    <p>Restoran</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (11).png" alt="">
                    <p>AC</p>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (12).png" alt="">
                    <p>Kolam renang</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (13).png" alt="">
                    <p>Resepsionis 24 jam</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (10).png" alt="">
                    <p>Pusat kebugaran</p>
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (16).png" alt="">
                    <p>Wifi</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (7).png" alt="">
                    <p>Spa</p>
                </div>
                <div class="content">
                    <img src="<?= BASEURL ?>/img/icon/icon (17).png" alt="">
                    <p>Antar jemput bandara</p>
                </div>
            </div>
        </div>
    </div>
    <div class="lokasi container mx-auto">
        <div class="title">
            <h3>Lokasi</h3>
        </div>
        <div class="content mt-6">
            <?= $data["detail"]['map'] ?>
        </div>
    </div>
    <div class="tentang container mx-auto">
        <div class="title">
            <h3>Tentang</h3>
        </div>
        <div class="content">
            <h3><?= $data["detail"]['name'] ?></h3>
            <p><?= $data["detail"]['about'] ?></p>
        </div>
    </div>
    <div class="contact container mx-auto">
        <div class="box">
            <p class="title">TiketID</p>
            <div class="content">
                <div class="row">
                    <i class="fa-solid fa-comments"></i>
                    <div class="sub-row">
                        <p>WhatsApp</p>
                        <p>+62 851 5600 3476</p>
                    </div>
                </div>
                <div class="row">
                    <i class="fa-solid fa-envelope-open-text"></i>
                    <div class="sub-row">
                        <p>Email</p>
                        <p>alfian@info.id</p>
                    </div>
                </div>
                <div class="row">
                    <i class="fa-solid fa-headset"></i>
                    <div class="sub-row">
                        <p>Pusat Panggilan</p>
                        <p>+62 851 5600 3476</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <p class="title">Perusahaan</p>
            <div class="list">
                <a href="">Blog</a>
                <a href="">Karier</a>
                <a href="">Korporasi</a>
                <a href="">Afiliasi</a>
                <a href="">Blibli Tiket Reward</a>
                <a href="">Perlindungan</a>
                <a href="">Cicilan</a>
            </div>
        </div>
        <div class="box">
            <p class="title">Produk</p>
            <div class="list">
                <a href="">Pesawat</a>
                <a href="">Hotel</a>
                <a href="">Villa & Apt.</a>
                <a href="">ToDo</a>
                <a href="">Kereta Api</a>
                <a href="">Sewa Mobil</a>
                <a href="">Event</a>
            </div>
        </div>
        <div class="box">
            <p class="title">Dukungan</p>
            <div class="list">
                <a href="">Pusat Bantuan</a>
                <a href="">Group Booking</a>
                <a href="">Kebijakan Privasi</a>
                <a href="">Syarat & Ketentuan</a>
                <a href="">Daftarkan Hotel Kamu</a>
                <a href="">Daftarkan Event Kamu</a>
            </div>
        </div>
        <div class="box">
            <p class="title">Dapatkan Aplikasinya</p>
            <img src="<?= BASEURL ?>/img/gp.webp" alt="">
            <img src="<?= BASEURL ?>/img/as.webp" alt="">
        </div>
    </div>
    <div class="footer">
        <div class="box">
            <i class="fa-regular fa-copyright"></i>
            <p>2023 tiket.com X TiketID Ltd.</p>
        </div>
        <div class="box">
            <i class="fa-solid fa-globe"></i>
            <p>Indonesia</p>
        </div>
        <div class="box">
            <a href=""><i class="fa-brands fa-square-facebook"></i></a>
            <a href="instagram.com/xfxalfn"><i class="fa-brands fa-square-instagram"></i></a>
            <a href=""><i class="fa-brands fa-square-x-twitter"></i></a>
            <a href="www.github.com/AlfianMusthofa" target="_blank"> <i class="fa-brands fa-square-github"></i></a>
        </div>
    </div>
</body>

</html>