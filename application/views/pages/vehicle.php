<?php
    $wa_number = '6281234567890'; // Ganti dengan nomor WhatsApp Asik Rental yang asli
    $cars = [
        [
            'name' => 'Toyota Avanza',
            'image' => 'assets/img/car-1.png',
            'price' => 'Mulai Rp350.000/Hari',
            'category' => 'MPV Keluarga',
            'seats' => '7 Kursi',
            'transmission' => 'MT/AT',
            'fuel' => 'Bensin',
            'use' => 'Dalam Kota',
            'status' => 'Tersedia',
            'description' => 'Cocok untuk perjalanan keluarga, aktivitas harian, acara kampus, dan kebutuhan kerja dalam kota.'
        ],
        [
            'name' => 'Honda Brio',
            'image' => 'assets/img/car-2.png',
            'price' => 'Mulai Rp300.000/Hari',
            'category' => 'City Car',
            'seats' => '5 Kursi',
            'transmission' => 'AT',
            'fuel' => 'Bensin',
            'use' => 'Harian',
            'status' => 'Tersedia',
            'description' => 'Pilihan praktis untuk perjalanan singkat, mobilitas harian, dan penggunaan pribadi yang lebih hemat.'
        ],
        [
            'name' => 'Toyota Innova Reborn',
            'image' => 'assets/img/car-3.png',
            'price' => 'Mulai Rp500.000/Hari',
            'category' => 'Premium Family',
            'seats' => '7 Kursi',
            'transmission' => 'AT',
            'fuel' => 'Diesel',
            'use' => 'Luar Kota',
            'status' => 'Tersedia',
            'description' => 'Armada nyaman untuk keluarga, perjalanan bisnis, dan perjalanan luar kota dengan kabin lebih lega.'
        ],
        [
            'name' => 'Toyota Hiace',
            'image' => 'assets/img/car-4.png',
            'price' => 'Hubungi Admin',
            'category' => 'Rombongan',
            'seats' => '14 Kursi',
            'transmission' => 'MT',
            'fuel' => 'Diesel',
            'use' => 'Wisata',
            'status' => 'Cek Jadwal',
            'description' => 'Cocok untuk rombongan keluarga, wisata, kegiatan instansi, kunjungan kerja, dan perjalanan jarak jauh.'
        ],
    ];

    function wa_booking_link($wa_number, $car_name) {
        $message = rawurlencode("Halo Admin Asik Rental, saya ingin booking mobil.\n\nMobil: {$car_name}\nTanggal Mulai:\nTanggal Selesai:\nLokasi Penjemputan:\nCatatan:\n\nMohon info ketersediaan unit dan total biaya sewanya.");
        return 'https://wa.me/' . $wa_number . '?text=' . $message;
    }
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb mb-5">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kendaraan</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
            <li class="breadcrumb-item active text-primary">Kendaraan</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<!-- Vehicle List Start -->
<div class="container-fluid categories py-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Pilihan <span class="text-primary">Armada Rental</span></h1>
            <p class="mb-0">
                Pilih kendaraan sesuai kebutuhan perjalanan Anda. Harga dapat berubah mengikuti durasi sewa, rute perjalanan, penggunaan sopir, dan ketersediaan unit.
            </p>
        </div>

        <div class="categories-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php foreach ($cars as $car): ?>
                <div class="categories-item p-4">
                    <div class="categories-item-inner h-100">
                        <div class="categories-img rounded-top">
                            <img src="<?= base_url($car['image']) ?>" class="img-fluid w-100 rounded-top" alt="<?= $car['name'] ?>">
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h4 class="mb-0"><?= $car['name'] ?></h4>
                                <span class="badge bg-primary"><?= $car['status'] ?></span>
                            </div>

                            <div class="categories-review mb-4">
                                <div class="me-3"><?= $car['category'] ?></div>
                                <div class="d-flex justify-content-center text-secondary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h4 class="bg-white text-primary rounded-pill py-2 px-4 mb-0"><?= $car['price'] ?></h4>
                            </div>

                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-users text-dark"></i> <span class="text-body ms-1"><?= $car['seats'] ?></span>
                                </div>
                                <div class="col-4 border-end border-white">
                                    <i class="fa fa-cogs text-dark"></i> <span class="text-body ms-1"><?= $car['transmission'] ?></span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-gas-pump text-dark"></i> <span class="text-body ms-1"><?= $car['fuel'] ?></span>
                                </div>
                                <div class="col-12 mt-3">
                                    <i class="fa fa-road text-dark"></i> <span class="text-body ms-1"><?= $car['use'] ?></span>
                                </div>
                            </div>

                            <p class="mb-4"><?= $car['description'] ?></p>

                            <a href="<?= wa_booking_link($wa_number, $car['name']) ?>" target="_blank" class="btn btn-primary rounded-pill d-flex justify-content-center py-3">
                                Booking <?= $car['name'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Vehicle List End -->


<!-- Rental Info Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Informasi <span class="text-primary">Penyewaan</span></h1>
            <p class="mb-0">
                Pastikan detail sewa dikonfirmasi dengan admin agar jadwal, unit, dan biaya rental sesuai kebutuhan perjalanan Anda.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-id-card fa-3x text-primary mb-3"></i>
                    <h5>Data Penyewa</h5>
                    <p class="mb-0">Siapkan nama, nomor WhatsApp aktif, dan identitas sesuai ketentuan admin.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                    <h5>Jadwal Sewa</h5>
                    <p class="mb-0">Tentukan tanggal mulai, tanggal selesai, jam pemakaian, dan lokasi penjemputan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fas fa-tags fa-3x text-primary mb-3"></i>
                    <h5>Harga Jelas</h5>
                    <p class="mb-0">Biaya dikonfirmasi berdasarkan jenis mobil, durasi, rute, dan layanan tambahan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="bg-white rounded p-4 text-center h-100">
                    <i class="fab fa-whatsapp fa-3x text-primary mb-3"></i>
                    <h5>Booking WhatsApp</h5>
                    <p class="mb-0">Klik tombol booking pada unit pilihan untuk langsung mengirim format reservasi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Rental Info End -->


<!-- CTA Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="bg-secondary rounded p-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-white mb-3">Belum Yakin Pilih Mobil?</h1>
            <p class="text-white mb-4">
                Chat admin Asik Rental untuk rekomendasi kendaraan berdasarkan jumlah penumpang, rute, dan kebutuhan perjalanan Anda.
            </p>
            <a href="https://wa.me/<?= $wa_number ?>?text=Halo%20Admin%20Asik%20Rental,%20saya%20ingin%20konsultasi%20pilihan%20mobil%20rental" target="_blank" class="btn btn-primary rounded-pill py-3 px-5">
                Konsultasi via WhatsApp
            </a>
        </div>
    </div>
</div>
<!-- CTA End -->
