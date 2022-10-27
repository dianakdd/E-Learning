<?php
    session_start();
    include '../koneksi.php';
    $directory='file/';
    $mata_kuliah=$_POST['matkul'];
    $nama_tugas=$_POST['tugas'];
    $nama_upload=$_POST['inputnama'];
    $namaFoto = $_FILES['inputfile']['name'];
    $tipeFoto = $_FILES['inputfile']['type'];
    $tempFoto = $_FILES['inputfile']['tmp_name'];
    move_uploaded_file($tempFoto, $directory . $namaFoto);
    $catatan=$_POST['inputcatatan'];
    $upload=mysqli_query($conn, "INSERT INTO tugas VALUES('','$_SESSION[nama]', '$mata_kuliah', '$nama_tugas', '$namaFoto', '', '$catatan')");

    if ($upload){
        header('location:upload1.php');
    }
?>