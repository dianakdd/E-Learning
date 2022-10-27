<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require_once "koneksi.php";

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="dosen"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "dosen";
		$_SESSION['nama'] = $data['nama'];
		// alihkan ke halaman dashboard dosen
		header("location:demo/home_dosen.php");
 
	// cek jika user login sebagai mahasiswa
	}else if($data['level']=="mahasiswa"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "mahasiswa";
		$_SESSION['nama'] = $data['nama'];
		// alihkan ke halaman dashboard mahasiswa
		header("location:demo/home_mahasiswa.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>