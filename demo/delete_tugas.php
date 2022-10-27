<?php 
include '../koneksi.php';
$id = $_POST['id'];
$deleteDosen = mysqli_query($conn, "DELETE FROM tugas WHERE id='$id'");
if($deleteDosen){
    header('Location: tabelnilai.php');
}
?>