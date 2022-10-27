<?php
    session_start();
    include '../koneksi.php';
    $directory='file/';
    $dosen=$_POST['dosen'];
    $matkul=$_POST['matkul'];
    $nama_tugas=$_POST['tugas'];
    $deadline=$_POST['deadline'];;
    $namaFoto = $_FILES['inputfile']['name'];
    $tipeFoto = $_FILES['inputfile']['type'];
    $tempFoto = $_FILES['inputfile']['tmp_name'];
    move_uploaded_file($tempFoto, $directory . $namaFoto);
    $upload=mysqli_query($conn, "INSERT INTO upload VALUES('','$_SESSION[nama]', '$matkul', '$nama_tugas', '$namaFoto', '$deadline')");

    if ($upload){
        header('location:upload2.php');
    }else {
        echo mysqli_error($conn);
    }
?>