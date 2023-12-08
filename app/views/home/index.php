<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <script src="https://kit.fontawesome.com/707c864a21.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASEURL ?>/css/<?= $data['css'] ?>">
</head>

<body>
    <section class="header">
        <div class="logo">
            <a href="#">TiketID</a>
        </div>
        <div class="navlink">
            <a href="login.php">Masuk</a>
            <a href="signup.php" class="daftar">Daftar</a>
        </div>
    </section>
    <section class="hero">
        <img src="img/bg2.jpg" alt="">
        <div class="content">
            <div class="title">
                <h3><span>Hey kamu,</span> mau kemana?</h3>
            </div>
            <div class="search-field">
                <input type="search" placeholder="Mau liburan kemana?" id="searchInput">
                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
            </div>
            <div class="link-group">
                <a href="#">
                    <div class="box">
                        <img src="img/icon/pswt.webp" alt="">
                        <p>Pesawat</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box">
                        <img src="img/icon/resort.webp" alt="">
                        <p>Villa</p>
                    </div>
                </a>
                <a href="<?= BASEURL ?>/todo">
                    <div class="box">
                        <img src="img/icon/todo.webp" alt="">
                        <p>ToDo</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box">
                        <img src="img/icon/kereta.webp" alt="">
                        <p>Kereta</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box">
                        <img src="img/icon/sewa.webp" alt="">
                        <p>Mobil</p>
                    </div>
                </a>
                <a href="#">
                    <div class="box">
                        <img src="img/icon/event.webp" alt="">
                        <p>Event</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="domestik">
        <div class="row">
            <h3>Temukan destinasi menarik lainnya</h3>
            <p>Jangan lewatkan destinasi-destinasi seru lainnya. Cek sekarang!</p>
        </div>
        <div class="row">
            <button class="btn-domestik">Indonesia</button>
            <button class="btn-domestik">Internasional</button>
            <button class="btn-domestik">Influencer</button>
        </div>
        <div class="row" id="row">
        </div>
    </section>
    <section class="more-link">
        <a href="#">Lihat Semua</a>
    </section>
    <section class="inter">
        <div class="row">
            <h3>Keluar negeri dengan harga special!</h3>
            <p>Nikmati terbang ke berbagai destinasi internasional dengan harga special</p>
        </div>
        <div class="row" id="inter">
        </div>
    </section>
    <section class="container2">
        <div class="title">
            <h3>Nginep di akomodasi pilihan!</h3>
            <p>Mau nginep ditempat populer, terpercaya, dan punya review kece?</p>
        </div>
        <div class="buttons-group">
            <button class="btn-container2">Bandung</button>
            <button class="btn-container2">Bali</button>
            <button class="btn-container2">Yogyakarta</button>
            <button class="btn-container2">Semarang</button>
        </div>
        <form action="" method="post">
            <div class="row" id="container2" id="container2">
                <?php foreach ($data['hotels'] as $data) : ?>
                    <a href="<?= BASEURL ?>/home/detail/<?= $data['id'] ?>">
                        <div class="card">
                            <img src="img/container2/<?= $data['img'] ?>" alt="">
                            <div class="caption">
                                <h3 class="card-title"><?= $data['name'] ?></h3>
                                <div class="sub-caption">
                                    <div class="rating">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="address">
                                            <p><?= $data['address'] ?></p>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="logo">
                                            <i class="fa-solid fa-award"></i>
                                        </div>
                                        <div class="sub-review">
                                            <p>3/5 (1200 review)</p>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <p><?= $data['lp'] ?></p>
                                        <h3><?= $data['np'] ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </form>
    </section>
    <section class="more-link">
        <a href="#">Lihat Semua</a>
    </section>
    <div class="banner-promo">
        <img src="img/banne.webp" alt="">
    </div>
    <section class="container3">
        <div class="title">
            <h3>Tidur nyenyak di luar negeri</h3>
            <p>Cek hotel kece di kota-kota Indonesia dan nikmati diskonnya. Buat lepas penat nggak perlu jauh-jauh</p>
        </div>
        <div class="buttons-group">
            <button class="btn-container3">Singapura</button>
            <button class="btn-container3">Malaysia</button>
            <button class="btn-container3">Thailand</button>
        </div>
        <div class="row" id="container3"></div>
    </section>
    <div class="panduan">
        <div class="title">
            <h3>Info & Panduan ringkas</h3>
        </div>
        <div class="buttons">
            <button type="button" class="button-panduan">Benefit Panduan</button>
            <button type="button" class="button-panduan">Kebijakan Perjalanan</button>
        </div>
        <div class="row"></div>
    </div>
    <div class="banner-promo">
        <img src="img/banner.webp" alt="">
    </div>
    <div class="konser">
        <div class="title">
            <h3>Bosen? Cobain aktivitas ini yuk!</h3>
            <p>Isi harimu dengan rangkaian event terkini. Ajak temanmu seru-seruan bareng disini!</p>
        </div>
        <div class="row"></div>
    </div>
    <div class="proms">
        <div class="row">
            <img src="img/icon/image.webp" alt="">
            <div class="text">
                <div class="title">
                    <h3>Pesan Tiket dan Rencanain Liburan Jadi Gampang</h3>
                </div>
                <div class="box">
                    <p>Mudahnya Pesan Tiket dan Hotel</p>
                    <p>Pesan tiket sekaligus hotel dengan mudah dan cepat. Tidak perlu risau, hanya dengan satu sentuhan jari, tiket dan hotel yang kamu butuhkan bisa didapatkan dengan mudah.</p>
                </div>
                <div class="box">
                    <p>Banyak pilihan produk terbaik</p>
                    <p>Ada banyak pilihan maskapai dengan rute terlengkap ke seluruh dunia. Tersedia juga banyak pilihan hotel di Asia. Kamu juga bisa cari tiket kereta ke berbagai rute, sewa mobil, dan pesan tiket hiburan.</p>
                </div>
                <div class="box">
                    <p>Banyak Pilihan Cara Pembayaran.</p>
                    <p>Saat transaksi di TiketID.com, kamu bisa memilih cara pembayaran sesuai keinginan. Ada pilihan pembayaran via bank transfer, ATM transfer, Virtual Account (VA), kartu debit online, maupun kartu kredit. Bisa dicicil juga, lho. Prosesnya mudah dan simpel!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text">
                <div class="title">
                    <h3>Banjir Promo dan Benefit, Liburan Jadi Hemat</h3>
                </div>
                <div class="box">
                    <p>Banyak Promo Spesial</p>
                    <p>Banyak promo untuk tiket & hotel kesayanganmu. Dapatkan diskon harga terbaik agar bujet liburan kamu semakin hemat. Tidak ada alasan lagi untuk menunda liburan kamu.</p>
                </div>
                <div class="box">
                    <p>Benefit Blibli Tiket Rewards.</p>
                    <p>Dapatkan benefit Blibli Tiket Rewards berupa Blibli Tiket Points yang bisa kamu tukarkan dengan diskon. Juga berbagai benefit eksklusif sesuai produk yang kamu beli!</p>
                </div>
                <div class="box">
                    <p>24/7 Customer Care.</p>
                    <p>Melalui pelayanan 24/7 Customer Care, kami akan selalu ada buat kamu. Dapatkan bantuan untuk pemesanan hotel dan tiketmu dengan pelayanan 24/7 Customer Care dari tiket.com.</p>
                </div>
            </div>
            <img src="img/icon/image.webp" alt="">
        </div>
        <div class="row">
            <img src="img/icon/image.webp" alt="">
            <div class="text">
                <div class="title">
                    <h3>Dapatkan Harga Tiket Pesawat Murah ke Destinasi Favorit Anda</h3>
                </div>
                <div class="box">
                    <p>Ingin pesan tiket pesawat murah? Kini hanya dengan satu kali sentuhan jari, Anda bisa langsung pesan tiket pesawat murah di tiket.com. tiket.com adalah pionir online travel agent (OTA) di Indonesia yang selalu memberikan inovasi handal untuk mempermudah Anda ketika pesan tiket pesawat online. Cari tiket pesawat online di tiket.com ke ribuan destinasi penerbangan domestik maupun internasional di seluruh dunia. Anda bisa cek harga tiket pesawat online di tiket.com, sekaligus membandingkan jadwal pesawat secara langsung via online. Beli tiket online di tiket.com juga memberikan keuntungan lebih. Setiap kali melakukan transaksi, Anda bisa mendapatkan tiket Points yang setelah terkumpul bisa ditukar dengan hadiah atau diskon istimewa dari tiket.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cicilan">
        <div class="sub-content">
            <div class="title">
                <h3>Cicilan Mudah dan Simpel</h3>
            </div>
            <p>Pesan tiket dan hotelmu sekarang, lalu cicil pembayarannya dengan sekali klik. Iya, semudah itu mencicil di tiket.com! Program cicilan ini bisa kamu gunakan untuk membeli tiket pesawat, hotel, tiket hiburan, dan sewa mobil. Mau bayar dalam waktu 3, 6, atau 12 bulan, semua tergantung pilihanmu! Program cicilan ini bisa dinikmati oleh pemegang kartu bank yang telah berpartner dengan tiket.com.</p>
            <div class="link">
                <a href="#">SELENGKAPNYA</a>
            </div>
        </div>
        <div class="sub-content">
            <div class="title">
                <h3>Partner TiketID</h3>
            </div>
            <p>Kamu adalah prioritas kami! Karena itu, tiket.com bekerjasama dengan berbagai penyedia jasa transportasi, jaringan hotel, sewa mobil, dan penyedia tiket hiburan untuk memastikan liburan kamu selalu nyaman dan menyenangkan</p>
            <div class="link">
                <a href="#">SELENGKAPNYA</a>
            </div>
        </div>
    </div>
    <div class="contact">
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
            <img src="img/gp.webp" alt="">
            <img src="img/as.webp" alt="">
        </div>
    </div>
    <div class="footer">
        <div class="box">
            <i class="fa-regular fa-copyright"></i>
            <p>2023 tiket.com X TiketID Co.</p>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= BASEURL ?>/js/index.js"></script>
</body>

</html>