<?php
include 'koneksi.php';
mysqli_select_db($koneksi, 'layanan');

require_once "./mpdf_v8.0.3-master/vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="logo_1.png">
  <title>Laporan Data Layanan</title>
</head>

<body>
  <div align="center">
    <h2 align="center">Laporan Data Pengaduan</h2>
    <table align="center" border="1">
      <thead>
        <tr>
          <th> No</th>
          <th style="text-align:center"> Nama</th>
          <th style="text-align:center"> NIK</th>
          <th style="text-align:center"> Tanggal Pengaduan</th>
          <th style="text-align:center"> Isi Pengaduan</th>
          <th style="text-align:center"> Status Pengaduan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        include 'koneksi.php';
        $tp = mysqli_query($koneksi, "SELECT * FROM `pengaduan` p JOIN `masyarakat` m WHERE p.`ID_M` = m.`ID_M` ORDER BY `p`.`TGL_PENGADUAN` DESC");
        while ($r = mysqli_fetch_array($tp)) {
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $r['NAMA_M']; ?></td>
            <td><?php echo $r['NIK_M']; ?></td>
            <td><?php echo date("d - M - Y h:i:s \W\I\B", strtotime($r['TGL_PENGADUAN'])); ?></td>
            <td><?php echo $r['ISI_LAPORAN']; ?></td>
            <td><?php echo $r['STATUS_PENGADUAN']; ?></td>
          </tr>
          <?php $i = $i + 1; ?>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>