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
        <h2 align="center">Laporan Data Masyarakat</h2>
        <table align="center" border="1">
            <thead>
                <tr>
                  <th> No</th>
                  <th style="text-align:center"> Nama</th>
                  <th style="text-align:center"> NIK</th>
                  <th style="text-align:center"> Alamat</th>
                  <th style="text-align:center"> Jenis Kelamin</th>
                  <th style="text-align:center"> Nomor Telepon</th>
              </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            include 'koneksi.php';
            $tp = mysqli_query($koneksi, "SELECT `NIK_M`, `NAMA_M`, `JK_M`, `TELP_M`, `ALAMAT_M` FROM `masyarakat` WHERE 1 ORDER BY NAMA_M ASC");
            while ($r = mysqli_fetch_array($tp)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $r['NAMA_M']; ?></td>
                    <td><?php echo $r['NIK_M']; ?></td>
                    <td><?php echo $r['ALAMAT_M']; ?></td>
                    <td><?php echo $r['JK_M']; ?></td>
                    <td><?php echo $r['TELP_M']; ?></td>
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