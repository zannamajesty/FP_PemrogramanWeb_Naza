<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from petugas where USERNAME_P='$username' and PASSWORD_P='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	$_SESSION['username'] = $username;
	$_SESSION['nama_p'] = $data['NAMA_P'];
	$_SESSION['id_p'] = $data['ID_PETUGAS'];
		// alihkan ke halaman dashboard admin
	header("location:dashboard_admin.php");
	echo '<script language="javascript">';
	echo 'alert("Selamat datang Sdr. '.$_SESSION['id_p'].'")';
	echo '</script>';
} else {
	header("location:login_admin.php");
}
