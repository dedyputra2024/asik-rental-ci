<?php
    $wa_number = '6281234567890'; // Ganti dengan nomor WhatsApp Asik Rental
    $wa_text = rawurlencode('Halo Admin Asik Rental, saya ingin booking mobil. Mohon info ketersediaan unit dan harga sewanya.');
    $wa_link = 'https://wa.me/' . $wa_number . '?text=' . $wa_text;
?>

<!-- Carousel Start -->
<div class="header-carousel mb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/carousel-2.jpg') ?>" class="img-fluid w-100" alt="Asik Rental">
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5 align-items-center">

                            <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                                <div class="bg-secondary rounded p-5">
                                    <h4 class="text-white mb-4">FORM RESERVASI MOBIL</h4>

                                    <form id="homeBookingForm">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <select class="form-select" id="home_mobil">
                                                    <option selected value="">Pilih jenis mobil</option>
                                                    <option value="Toyota Avanza">Toyota Avanza</option>
                                                    <option value="Honda Brio">Honda Brio</option>
                                                    <option value="Toyota Innova Reborn">Toyota Innova Reborn</option>
                                                    <option value="Toyota Hiace">Toyota Hiace</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-user"></span>
                                                        <span class="ms-1">Nama</span>
                                                    </div>
                                                    <input class="form-control" id="home_nama" type="text" placeholder="Masukkan nama pelanggan">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-phone"></span>
                                                        <span class="ms-1">No HP</span>
                                                    </div>
                                                    <input class="form-control" id="home_nohp" type="text" placeholder="Masukkan nomor WhatsApp">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-map-marker-alt"></span>
                                                        <span class="ms-1">Lokasi</span>
                                                    </div>
                                                    <input class="form-control" id="home_lokasi" type="text" placeholder="Lokasi penjemputan">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-alt"></span>
                                                        <span class="ms-1">Mulai</span>
                                                    </div>
                                                    <input class="form-control" id="home_tanggal_mulai" type="date">
                                                    <select class="form-select ms-3" id="home_jam_mulai">
                                                        <option selected>08.00</option>
                                                        <option>09.00</option>
                                                        <option>10.00</option>
                                                        <option>12.00</option>
                                                        <option>15.00</option>
                                                        <option>18.00</option>
                                                        <option>20.00</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="input-group">
                                                    <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                                                        <span class="fas fa-calendar-check"></span>
                                                        <span class="ms-1">Selesai</span>
                                                    </div>
                                                    <input class="form-control" id="home_tanggal_selesai" type="date">
                                                    <select class="form-select ms-3" id="home_jam_selesai">
                                                        <option selected>08.00</option>
                                                        <option>09.00</option>
                                                        <option>10.00</option>
                                                        <option>12.00</option>
                                                        <option>15.00</option>
                                                        <option>18.00</option>
                                                        <option>20.00</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="button" onclick="sendHomeWhatsApp()" class="btn btn-light w-100 py-2">
                                                    Booking via WhatsApp
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Sewa Mobil Mudah, Cepat, dan Terpercaya</h1>
                                    <p class="text-white">
                                        Asik Rental siap menemani perjalanan harian, keluarga, bisnis, wisata, dan perjalanan luar kota dengan armada nyaman serta proses reservasi yang praktis.
                                    </p>
                                    <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill py-3 px-5 mt-3">
                                        Hubungi Admin
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">
                    <div class="pb-4">
                        <h1 class="display-5 text-capitalize">Tentang <span class="text-primary">Asik Rental</span></h1>
                        <p class="mb-0">
                            Asik Rental adalah layanan sewa mobil yang menyediakan berbagai pilihan kendaraan untuk kebutuhan perjalanan pribadi, keluarga, bisnis, wisata, maupun perjalanan luar kota. Kami mengutamakan kemudahan reservasi, kenyamanan armada, dan pelayanan yang responsif.
                        </p>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4 h-100">
                                <div class="about-icon mb-4">
                                    <img src="<?= base_url('assets/img/about-icon-1.png') ?>" class="img-fluid w-50 h-50" alt="Visi Asik Rental">
                                </div>
                                <h5 class="mb-3">Visi Kami</h5>
                                <p class="mb-0">
                                    Menjadi layanan rental mobil yang praktis, aman, dan terpercaya untuk berbagai kebutuhan perjalanan pelanggan.
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="about-item-inner border p-4 h-100">
                                <div class="about-icon mb-4">
                                    <img src="<?= base_url('assets/img/about-icon-2.png') ?>" class="img-fluid h-50 w-50" alt="Misi Asik Rental">
                                </div>
                                <h5 class="mb-3">Misi Kami</h5>
                                <p class="mb-0">
                                    Memberikan pelayanan cepat, armada terawat, harga bersahabat, dan proses booking yang mudah melalui WhatsApp.
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="text-item my-4">
                        Asik Rental hadir untuk membantu pelanggan mendapatkan kendaraan dengan proses yang lebih simpel. Pelanggan dapat memilih jenis mobil, menentukan jadwal sewa, lalu melakukan konfirmasi langsung kepada admin.
                    </p>

                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="text-center rounded bg-secondary p-4">
                                <h1 class="display-6 text-white">24/7</h1>
                                <h5 class="text-light mb-0">Reservasi Online</h5>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="rounded">
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Armada nyaman dan terawat</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Bisa harian dan mingguan</p>
                                <p class="mb-2"><i class="fa fa-check-circle text-primary me-1"></i> Cocok untuk keluarga dan bisnis</p>
                                <p class="mb-0"><i class="fa fa-check-circle text-primary me-1"></i> Reservasi mudah via WhatsApp</p>
                            </div>
                        </div>

                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="<?= site_url('about') ?>" class="btn btn-primary rounded py-3 px-5">Tentang Kami</a>
                        </div>

                        <div class="col-lg-7">
                            <div class="d-flex align-items-center">
                                <img src="<?= base_url('assets/img/attachment-img.jpg') ?>" class="img-fluid rounded-circle border border-4 border-secondary" style="width: 100px; height: 100px;" alt="Admin Asik Rental">
                                <div class="ms-4">
                                    <h4>Admin Asik Rental</h4>
                                    <p class="mb-0">Siap membantu reservasi Anda</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="img-1">
                        <img src="<?= base_url('assets/img/about-img.jpg') ?>" class="img-fluid rounded h-100 w-100" alt="Layanan Asik Rental">
                    </div>
                    <div class="img-2">
                        <img src="<?= base_url('assets/img/about-img-1.jpg') ?>" class="img-fluid rounded w-100" alt="Mobil Asik Rental">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- About End -->


<!-- Car Categories Start -->
<div class="container-fluid categories py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Pilihan <span class="text-primary">Kendaraan</span></h1>
            <p class="mb-0">
                Pilih kendaraan sesuai kebutuhan perjalanan Anda. Harga dan ketersediaan unit dapat dikonfirmasi langsung melalui admin Asik Rental.
            </p>
        </div>

        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="<?= base_url('assets/img/car-1.png') ?>" class="img-fluid w-100 rounded-top" alt="Toyota Avanza">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Toyota Avanza</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">Mobil Keluarga</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Mulai Rp350.000/Hari</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">7 Kursi</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">MT/AT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Bensin</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-suitcase text-dark"></i> <span class="text-body ms-1">Bagasi</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-snowflake text-dark"></i> <span class="text-body ms-1">AC</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">Dalam/Luar Kota</span>
                            </div>
                        </div>
                        <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="<?= base_url('assets/img/car-2.png') ?>" class="img-fluid w-100 rounded-top" alt="Honda Brio">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Honda Brio</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">City Car</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Mulai Rp300.000/Hari</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">5 Kursi</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">MT/AT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Bensin</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-city text-dark"></i> <span class="text-body ms-1">Harian</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-snowflake text-dark"></i> <span class="text-body ms-1">AC</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">Dalam Kota</span>
                            </div>
                        </div>
                        <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="<?= base_url('assets/img/car-3.png') ?>" class="img-fluid w-100 rounded-top" alt="Toyota Innova Reborn">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Innova Reborn</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">Premium Family</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Mulai Rp500.000/Hari</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">7 Kursi</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">AT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Diesel</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-suitcase text-dark"></i> <span class="text-body ms-1">Luas</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-snowflake text-dark"></i> <span class="text-body ms-1">AC</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">Luar Kota</span>
                            </div>
                        </div>
                        <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Booking Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="categories-item p-4">
                <div class="categories-item-inner">
                    <div class="categories-img rounded-top">
                        <img src="<?= base_url('assets/img/car-4.png') ?>" class="img-fluid w-100 rounded-top" alt="Toyota Hiace">
                    </div>
                    <div class="categories-content rounded-bottom p-4">
                        <h4>Toyota Hiace</h4>
                        <div class="categories-review mb-4">
                            <div class="me-3">Rombongan</div>
                            <div class="d-flex justify-content-center text-secondary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Hubungi Admin</h4>
                        </div>
                        <div class="row gy-2 gx-0 text-center mb-4">
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users text-dark"></i> <span class="text-body ms-1">14 Kursi</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1">MT</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1">Diesel</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-users-cog text-dark"></i> <span class="text-body ms-1">Wisata</span>
                            </div>
                            <div class="col-4 border-end border-white">
                                <i class="fa fa-snowflake text-dark"></i> <span class="text-body ms-1">AC</span>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-road text-dark"></i> <span class="text-body ms-1">Rombongan</span>
                            </div>
                        </div>
                        <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">Booking Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Car Categories End -->


<!-- Services Start -->
<div class="container-fluid team py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Layanan <span class="text-primary">Asik Rental</span></h1>
            <p class="mb-0">
                Kami menyediakan layanan rental mobil yang fleksibel untuk berbagai kebutuhan perjalanan Anda.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-car fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Sewa Harian</h4>
                        <p>Rental mobil untuk kebutuhan harian, acara keluarga, urusan kerja, maupun aktivitas pribadi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-route fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Luar Kota</h4>
                        <p>Layanan perjalanan luar kota dengan pilihan armada yang nyaman untuk perjalanan jarak jauh.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Wisata & Rombongan</h4>
                        <p>Cocok untuk perjalanan wisata, acara komunitas, kunjungan keluarga, dan kebutuhan rombongan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fab fa-whatsapp fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Booking Cepat</h4>
                        <p>Reservasi lebih mudah melalui WhatsApp untuk cek unit, harga, jadwal, dan detail penyewaan.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End -->


<!-- Info Start -->
<div class="container-fluid blog py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Info <span class="text-primary">Rental Mobil</span></h1>
            <p class="mb-0">
                Beberapa informasi penting sebelum melakukan penyewaan mobil di Asik Rental.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= base_url('assets/img/blog-1.jpg') ?>" class="img-fluid rounded-top w-100" alt="Syarat Rental Mobil">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">Info Rental</div>
                        <a href="<?= $wa_link ?>" target="_blank" class="h4 d-block mb-3">Syarat Rental Mobil</a>
                        <p class="mb-3">
                            Siapkan identitas diri, nomor WhatsApp aktif, jadwal sewa, lokasi penjemputan, dan jenis kendaraan yang dibutuhkan.
                        </p>
                        <a href="<?= $wa_link ?>" target="_blank">Tanya Admin <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= base_url('assets/img/blog-2.jpg') ?>" class="img-fluid rounded-top w-100" alt="Cara Booking Mobil">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">Cara Booking</div>
                        <a href="<?= $wa_link ?>" target="_blank" class="h4 d-block mb-3">Booking Lebih Praktis</a>
                        <p class="mb-3">
                            Pilih mobil, tentukan tanggal penggunaan, hubungi admin, lalu lakukan konfirmasi jadwal dan biaya sewa.
                        </p>
                        <a href="<?= $wa_link ?>" target="_blank">Booking Sekarang <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="<?= base_url('assets/img/blog-3.jpg') ?>" class="img-fluid rounded-top w-100" alt="Tips Memilih Mobil Rental">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">Tips Perjalanan</div>
                        <a href="<?= $wa_link ?>" target="_blank" class="h4 d-block mb-3">Pilih Mobil Sesuai Kebutuhan</a>
                        <p class="mb-3">
                            Gunakan city car untuk perjalanan singkat, MPV untuk keluarga, dan Hiace untuk perjalanan rombongan.
                        </p>
                        <a href="<?= $wa_link ?>" target="_blank">Konsultasi Unit <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Info End -->

<script>
function sendHomeWhatsApp() {
    const waNumber = "6281234567890";

    const mobil = document.getElementById("home_mobil").value;
    const nama = document.getElementById("home_nama").value.trim();
    const nohp = document.getElementById("home_nohp").value.trim();
    const lokasi = document.getElementById("home_lokasi").value.trim();
    const tanggalMulai = document.getElementById("home_tanggal_mulai").value;
    const jamMulai = document.getElementById("home_jam_mulai").value;
    const tanggalSelesai = document.getElementById("home_tanggal_selesai").value;
    const jamSelesai = document.getElementById("home_jam_selesai").value;

    if (mobil === "" || nama === "" || nohp === "" || lokasi === "" || tanggalMulai === "" || tanggalSelesai === "") {
        alert("Mohon lengkapi data reservasi terlebih dahulu.");
        return;
    }

    const pesan =
        "Halo Admin Asik Rental, saya ingin booking mobil.\n\n" +
        "Nama: " + nama + "\n" +
        "No HP: " + nohp + "\n" +
        "Mobil: " + mobil + "\n" +
        "Tanggal Mulai: " + tanggalMulai + " " + jamMulai + "\n" +
        "Tanggal Selesai: " + tanggalSelesai + " " + jamSelesai + "\n" +
        "Lokasi Penjemputan: " + lokasi + "\n\n" +
        "Mohon info ketersediaan unit dan total biaya sewanya.";

    window.open("https://wa.me/" + waNumber + "?text=" + encodeURIComponent(pesan), "_blank");
}
</script>
