<?php
session_start();
if (isset($_SESSION['id_m'])) {
  header('location:dashboard_masyarakat.php');
}elseif (isset($_SESSION['id_p'])) {
  header('location:dashboard_admin.php');
}else {
  
 include 'header_luar.php';?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
                <div>
                  <a href="login_masyarakat.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Login Masyarakat</a>
                  <a href="login_admin.php" class="btn-book animate__animated animate__fadeInUp scrollto">Login Admin</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
                <div>
                  <a href="login_masyarakat.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Login Masyarakat</a>
                  <a href="login_admin.php" class="btn-book animate__animated animate__fadeInUp scrollto">Login Admin</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide3.jpg);">
            <div class="carousel-background"><img src="assets/img/slide/slide3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
                <div>
                  <a href="login_masyarakat.php" class="btn-menu animate__animated animate__fadeInUp scrollto">Login Masyarakat</a>
                  <a href="login_admin.php" class="btn-book animate__animated animate__fadeInUp scrollto">Login Admin</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
?>