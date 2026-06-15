<?php
    $wa_number = '6281234567890'; // Ganti dengan nomor WhatsApp Asik Rental
    $wa_text = rawurlencode('Halo Admin Asik Rental, saya ingin bertanya tentang layanan sewa mobil.');
    $wa_link = 'https://wa.me/' . $wa_number . '?text=' . $wa_text;
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb mb-5">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Asik Rental</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
            <li class="breadcrumb-item active text-primary">Tentang Kami</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid overflow-hidden about py-5">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item">

                    <div class="pb-4">
                        <h1 class="display-5 text-capitalize">
                            Asik Rental <span class="text-primary">Mobil</span>
                        </h1>
                        <p class="mb-0">
                            Asik Rental adalah layanan sewa mobil yang menyediakan berbagai pilihan kendaraan untuk kebutuhan perjalanan harian, keluarga, bisnis, wisata, hingga perjalanan luar kota. Kami hadir untuk memberikan proses rental yang lebih mudah, cepat, nyaman, dan terpercaya.
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
                                    Menjadi layanan rental mobil pilihan yang praktis, aman, dan terpercaya untuk berbagai kebutuhan perjalanan pelanggan.
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
                                    Memberikan armada yang nyaman, pelayanan responsif, harga bersahabat, dan proses reservasi yang mudah melalui WhatsApp.
                                </p>
                            </div>
                        </div>
                    </div>

                    <p class="text-item my-4">
                        Kami memahami bahwa setiap perjalanan membutuhkan kendaraan yang tepat. Karena itu, Asik Rental menyediakan pilihan mobil untuk penggunaan pribadi, acara keluarga, urusan kerja, wisata, dan kebutuhan rombongan.
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
                                <p class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-1"></i> Armada nyaman dan terawat
                                </p>
                                <p class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-1"></i> Cocok untuk harian dan mingguan
                                </p>
                                <p class="mb-2">
                                    <i class="fa fa-check-circle text-primary me-1"></i> Bisa untuk dalam dan luar kota
                                </p>
                                <p class="mb-0">
                                    <i class="fa fa-check-circle text-primary me-1"></i> Booking mudah via WhatsApp
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 d-flex align-items-center">
                            <a href="<?= site_url('vehicle') ?>" class="btn btn-primary rounded py-3 px-5">
                                Lihat Kendaraan
                            </a>
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


<!-- Why Choose Us Start -->
<div class="container-fluid py-5">
    <div class="container">

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">
                Mengapa Memilih <span class="text-primary">Asik Rental?</span>
            </h1>
            <p class="mb-0">
                Kami berusaha memberikan pengalaman sewa mobil yang praktis, jelas, dan nyaman sejak proses pemesanan sampai kendaraan digunakan.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-car fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Armada Nyaman</h4>
                        <p>
                            Pilihan kendaraan disiapkan untuk menunjang perjalanan harian, keluarga, bisnis, dan wisata.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-tags fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Harga Bersahabat</h4>
                        <p>
                            Biaya sewa dapat disesuaikan dengan jenis mobil, durasi pemakaian, dan kebutuhan perjalanan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-headset fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Admin Responsif</h4>
                        <p>
                            Pelanggan dapat bertanya ketersediaan unit, harga, jadwal, dan detail sewa langsung melalui WhatsApp.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item p-4 text-center h-100">
                    <div class="mb-4">
                        <i class="fas fa-calendar-check fa-3x text-primary"></i>
                    </div>
                    <div class="team-content pt-2">
                        <h4>Booking Mudah</h4>
                        <p>
                            Proses pemesanan dibuat sederhana agar pelanggan dapat melakukan reservasi dengan cepat.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Why Choose Us End -->


<!-- Process Start -->
<div class="container-fluid bg-light py-5">
    <div class="container">

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">
                Cara <span class="text-primary">Booking</span>
            </h1>
            <p class="mb-0">
                Cukup ikuti beberapa langkah sederhana untuk melakukan reservasi kendaraan di Asik Rental.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h5>Pilih Mobil</h5>
                    <p class="mb-0">
                        Tentukan jenis mobil sesuai kebutuhan perjalanan Anda.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-calendar-alt fa-3x text-primary"></i>
                    </div>
                    <h5>Tentukan Jadwal</h5>
                    <p class="mb-0">
                        Pilih tanggal mulai, tanggal selesai, dan lokasi penjemputan.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fab fa-whatsapp fa-3x text-primary"></i>
                    </div>
                    <h5>Hubungi Admin</h5>
                    <p class="mb-0">
                        Konfirmasi ketersediaan unit dan total biaya sewa melalui WhatsApp.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-car-side fa-3x text-primary"></i>
                    </div>
                    <h5>Mobil Digunakan</h5>
                    <p class="mb-0">
                        Setelah reservasi dikonfirmasi, kendaraan siap digunakan sesuai jadwal.
                    </p>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Process End -->


<!-- CTA Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="bg-secondary rounded p-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-white mb-3">Butuh Mobil untuk Perjalanan Anda?</h1>
            <p class="text-white mb-4">
                Hubungi admin Asik Rental untuk cek ketersediaan unit, harga sewa, dan jadwal penggunaan kendaraan.
            </p>
            <a href="<?= $wa_link ?>" target="_blank" class="btn btn-primary rounded-pill py-3 px-5">
                Hubungi via WhatsApp
            </a>
        </div>
    </div>
</div>
<!-- CTA End -->