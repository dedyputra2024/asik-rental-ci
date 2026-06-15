<!-- Footer Start -->
<div class="container-fluid footer py-5 mt-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Tentang Kami</h4>
                    <p class="mb-3">
                        Asik Rental menyediakan layanan sewa mobil harian, mingguan, lepas kunci, dan perjalanan luar kota dengan armada nyaman, harga bersahabat, serta proses reservasi yang mudah.
                    </p>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20Asik%20Rental,%20saya%20ingin%20bertanya%20tentang%20sewa%20mobil"
                       target="_blank"
                       class="btn btn-primary rounded-pill py-3 px-4">
                       Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Menu</h4>
                    <a href="<?= site_url() ?>"><i class="fas fa-angle-right me-2"></i> Beranda</a>
                    <a href="<?= site_url('about') ?>"><i class="fas fa-angle-right me-2"></i> Tentang</a>
                    <a href="<?= site_url('vehicle') ?>"><i class="fas fa-angle-right me-2"></i> Kendaraan</a>
                    <a href="<?= site_url('contact') ?>"><i class="fas fa-angle-right me-2"></i> Kontak</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Jam Operasional</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Senin - Jumat:</h6>
                        <p class="text-white mb-0">08.00 - 22.00</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Sabtu - Minggu:</h6>
                        <p class="text-white mb-0">08.00 - 21.00</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">Reservasi Online:</h6>
                        <p class="text-white mb-0">Tersedia setiap hari via WhatsApp</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Kontak</h4>
                    <a href="#"><i class="fa fa-map-marker-alt me-2"></i> Gresik, Jawa Timur</a>
                    <a href="mailto:asikrental@gmail.com"><i class="fas fa-envelope me-2"></i> asikrental@gmail.com</a>
                    <a href="tel:+6281234567890"><i class="fas fa-phone me-2"></i> +62 812-3456-7890</a>
                    <a href="https://wa.me/6281234567890" target="_blank"><i class="fab fa-whatsapp me-2"></i> WhatsApp Admin</a>

                    <div class="d-flex mt-3">
                        <a class="btn btn-primary btn-md-square rounded-circle me-3" href="https://wa.me/6281234567890" target="_blank">
                            <i class="fab fa-whatsapp text-white"></i>
                        </a>
                        <a class="btn btn-primary btn-md-square rounded-circle me-3" href="https://instagram.com/asikrental" target="_blank">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a class="btn btn-primary btn-md-square rounded-circle me-0" href="https://facebook.com/asikrental" target="_blank">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body">
                    <i class="fas fa-copyright text-light me-2"></i>Asik Rental. All rights reserved.
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                Website rental mobil sederhana berbasis CodeIgniter.
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top">
    <i class="fa fa-arrow-up"></i>
</a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>

</html>
