<?php
    $wa_number = '6281234567890'; // Ganti dengan nomor WhatsApp Asik Rental tanpa tanda +
    $email = 'asikrental@gmail.com'; // Ganti dengan email Asik Rental
    $alamat = 'Gresik, Jawa Timur'; // Ganti dengan alamat/kota Asik Rental
    $instagram = 'https://instagram.com/asikrental'; // Ganti dengan Instagram Asik Rental
    $map_query = rawurlencode($alamat);
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb mb-5">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kontak Kami</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="<?= site_url() ?>">Beranda</a></li>
            <li class="breadcrumb-item active text-primary">Kontak</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container">

        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-primary mb-3">Hubungi Asik Rental</h1>
            <p class="mb-0">
                Butuh mobil untuk perjalanan harian, keluarga, bisnis, wisata, atau luar kota? Hubungi admin Asik Rental untuk cek ketersediaan unit, harga sewa, dan jadwal pemesanan.
            </p>
        </div>

        <div class="row g-4 mb-5">

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt fa-3x text-primary"></i>
                    </div>
                    <h5>Alamat</h5>
                    <p class="mb-0"><?= $alamat ?></p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="bg-light rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fab fa-whatsapp fa-3x text-primary"></i>
                    </div>
                    <h5>WhatsApp</h5>
                    <p class="mb-0">
                        <a href="https://wa.me/<?= $wa_number ?>" target="_blank">
                            +<?= $wa_number ?>
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-light rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fas fa-envelope fa-3x text-primary"></i>
                    </div>
                    <h5>Email</h5>
                    <p class="mb-0">
                        <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-light rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fab fa-instagram fa-3x text-primary"></i>
                    </div>
                    <h5>Instagram</h5>
                    <p class="mb-0">
                        <a href="<?= $instagram ?>" target="_blank">@asikrental</a>
                    </p>
                </div>
            </div>

        </div>

        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-secondary p-5 rounded">
                    <h4 class="text-white mb-4">Form Reservasi Cepat</h4>
                    <p class="text-white mb-4">
                        Isi data berikut, lalu pesan akan otomatis diarahkan ke WhatsApp admin Asik Rental.
                    </p>

                    <form id="contactForm">
                        <div class="row g-4">

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nohp" placeholder="Nomor WhatsApp">
                                    <label for="nohp">Nomor WhatsApp</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" id="mobil">
                                        <option selected value="">Pilih jenis mobil</option>
                                        <option value="Avanza / Xenia">Avanza / Xenia</option>
                                        <option value="Honda Brio / City Car">Honda Brio / City Car</option>
                                        <option value="Innova Reborn">Innova Reborn</option>
                                        <option value="Toyota Hiace">Toyota Hiace</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <label for="mobil">Jenis Mobil</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_mulai">
                                    <label for="tanggal_mulai">Tanggal Mulai</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_selesai">
                                    <label for="tanggal_selesai">Tanggal Selesai</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lokasi" placeholder="Lokasi Penjemputan">
                                    <label for="lokasi">Lokasi Penjemputan</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Catatan Tambahan" id="catatan" style="height: 120px"></textarea>
                                    <label for="catatan">Catatan Tambahan</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="button" onclick="sendWhatsApp()" class="btn btn-light w-100 py-3">
                                    Kirim ke WhatsApp
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="rounded">
                    <iframe class="rounded w-100"
                        style="height: 580px;"
                        src="https://www.google.com/maps?q=<?= $map_query ?>&output=embed"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->


<!-- CTA Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="bg-secondary rounded p-5 text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-white mb-3">Butuh Bantuan Cepat?</h1>
            <p class="text-white mb-4">
                Admin Asik Rental siap membantu Anda mengecek unit, harga, jadwal, dan detail penyewaan mobil.
            </p>
            <a href="https://wa.me/<?= $wa_number ?>?text=Halo%20Admin%20Asik%20Rental,%20saya%20ingin%20bertanya%20tentang%20sewa%20mobil"
               target="_blank"
               class="btn btn-primary rounded-pill py-3 px-5">
                Chat Admin Sekarang
            </a>
        </div>
    </div>
</div>
<!-- CTA End -->


<script>
function sendWhatsApp() {
    const waNumber = "<?= $wa_number ?>";

    const nama = document.getElementById("nama").value;
    const nohp = document.getElementById("nohp").value;
    const mobil = document.getElementById("mobil").value;
    const tanggalMulai = document.getElementById("tanggal_mulai").value;
    const tanggalSelesai = document.getElementById("tanggal_selesai").value;
    const lokasi = document.getElementById("lokasi").value;
    const catatan = document.getElementById("catatan").value;

    if (nama === "" || nohp === "" || mobil === "" || tanggalMulai === "" || tanggalSelesai === "" || lokasi === "") {
        alert("Mohon lengkapi data reservasi terlebih dahulu.");
        return;
    }

    const pesan =
        "Halo Admin Asik Rental, saya ingin booking mobil.%0A%0A" +
        "Nama: " + nama + "%0A" +
        "No HP: " + nohp + "%0A" +
        "Mobil: " + mobil + "%0A" +
        "Tanggal Mulai: " + tanggalMulai + "%0A" +
        "Tanggal Selesai: " + tanggalSelesai + "%0A" +
        "Lokasi Penjemputan: " + lokasi + "%0A" +
        "Catatan: " + catatan + "%0A%0A" +
        "Mohon info ketersediaan unit dan total biaya sewanya.";

    window.open("https://wa.me/" + waNumber + "?text=" + pesan, "_blank");
}
</script>