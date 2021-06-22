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


          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Login</span> Admin</h2>
                <form action="proses_login_admin.php" method="post" role="form" class="php-email-form" >
                  <div class="form-group mt-3">
                    <input type="username" class="form-control" name="username" id="subject" placeholder="Masukkan Username" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="password" class="form-control" name="password" id="subject" placeholder="Masukkan Password" required>
                  </div>
                  <br>  
                  <input type="submit" class="btn btn-outline-light" value="LOGIN"></input>
                </form>

              </div>
            </div>
          </div>


      </div>
    </div>
  </section><!-- End Hero -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
}
?>