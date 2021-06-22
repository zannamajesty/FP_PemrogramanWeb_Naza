<?php
session_start();
$id_p = $_SESSION['id_p'];
if (empty($id_p)) {
  header("location:login_admin.php");
}else{ 
  include 'koneksi.php';
  include 'header_admin.php';

  ?>
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
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Profil</span> Tuban</h2>
                <p class="animate__animated animate__fadeInUp">Kabupaten Tuban Merupakan salah satu Kabupaten dari 38 Kabupaten dan Kota yang ada di wilayah administratif Provinsi Jawa Timur. Wilayah Kabupaten Tuban berada di jalur pantai utara (Pantura) Pulau Jawa. Luasnya adalah 1.904,70 km² dan panjang pantai mencapai 65 km. Penduduknya berjumlah sekitar 1 juta jiwa. Tuban disebut sebagai Kota Wali karena Tuban adalah salah satu kota di Jawa yang menjadi pusat penyebaran ajaran Agama Islam namun beberapa kalangan ada yang memberikan julukan sebagai kota tuak karena daerah Tuban sangat terkenal akan penghasil minuman (tuak & legen) yang berasal dari sari bunga siwalan (ental).</p>
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

  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container">

      <div class="section-title">
        <h2>Laporan <span>Terkini</span></h2>
      </div>

      <h3>Grafik Data Masyarakat <a href="data_pengguna_admin.php" style="text-align: right">
        <d>lihat detail</d>
      </a></h3>

      <div style="width: 90%;margin: 0% auto;">
        <canvas id="STATUS_PENGADUAN"></canvas>
      </div>
      <script>
        var ctx = document.getElementById("STATUS_PENGADUAN").getContext('2d');
        var STATUS_PENGADUAN = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ["Belum diproses", "Dalam proses", "Selesai"],
            datasets: [{
              label: '',
              data: [
              <?php
              $belum_diproses = mysqli_query($koneksi, "select * from pengaduan where STATUS_PENGADUAN='Belum diproses'");
              echo mysqli_num_rows($belum_diproses);
              ?>,
              <?php
              $dalam_proses = mysqli_query($koneksi, "select * from pengaduan where STATUS_PENGADUAN='Dalam proses'");
              echo mysqli_num_rows($dalam_proses);
              ?>,
              <?php
              $selesai = mysqli_query($koneksi, "select * from pengaduan where STATUS_PENGADUAN='Selesai'");
              echo mysqli_num_rows($selesai);
              ?>
              ],
              backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 99, 132, 0.2)',
              'rgb(255, 255, 0)'
              ],
              borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(255,99,132,1)',
              'rgb(179, 179, 0)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script><br><br>
      <div>
        <a type="button" href="laporan_pengguna.php" style="align-self: center; text-align: center" class="cetak btn btn-success btn-sm">CETAK DATA MASYARAKAT</a><br><br>
      </div>

      <h3>Grafik Data Pengaduan <a href="data_pengaduan_admin.php" style="text-align: right">
        <d>lihat detail</d>
      </a></h3>

      <div style="width: 90%;margin: 0% auto;">
        <canvas id="JK_M"></canvas>
      </div>
      <script>
        var ctx = document.getElementById("JK_M").getContext('2d');
        var JK_M = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ["Laki-laki ", "Perempuan"],
            datasets: [{
              label: '',
              data: [
              <?php
              $jumlah_laki = mysqli_query($koneksi, "select * from masyarakat where JK_M='Laki-laki'");
              echo mysqli_num_rows($jumlah_laki);
              ?>,
              <?php
              $jumlah_perempuan = mysqli_query($koneksi, "select * from masyarakat where JK_M='Perempuan'");
              echo mysqli_num_rows($jumlah_perempuan);
              ?>
              ],
              backgroundColor: [
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 99, 132, 0.2)'
              ],
              borderColor: [
              'rgba(54, 162, 235, 1)',
              'rgba(255,99,132,1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                }
              }]
            }
          }
        });
      </script><br><br>
      <div>
        <a type="button" href="laporan_pengaduan.php" style="align-self: center; text-align: center" class="cetak btn btn-success btn-sm">CETAK DATA PENGADUAN</a><br><br>
      </div>
    </div>
  </section><!-- End Book A Table Section -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#data').DataTable();
    } );
  </script>
</body>

</html> 
<?php
}
?>