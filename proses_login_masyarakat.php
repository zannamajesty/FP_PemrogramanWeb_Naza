<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from masyarakat where USERNAME_M='$username' and PASSWORD_M='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	$_SESSION['username'] = $username;
	$_SESSION['nama_m'] = $data['NAMA_M'];
	$_SESSION['id_m'] = $data['ID_M'];
		// alihkan ke halaman dashboard admin
	header("location:dashboard_masyarakat.php");

} else {
	header("location:index.php?pesan=gagal");
}
