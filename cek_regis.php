<?php

    include 'koneksi.php';

    $nama = $_POST['nama'];
    $level = $_POST['level'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $querry = mysqli_query($conn, "INSERT INTO user values('', '$nama', '$username', '$password', '$level')");

    if($querry){
        header('location: Login_Form.php');
    }

?>