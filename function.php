<?php

session_start();
$conn = mysqli_connect("localhost","root","","arsip");

//menambah barang ke database
if(isset($_POST['addnewberkas'])){
    $tipe = $_POST['tipe'];
    $nama_berkas = $_POST['nama_berkas'];
    $bulan = $_POST['bulan'];
    $tahun_berkas = $_POST['tahun_berkas'];
    $file = $_POST['file'];

    $addtotable = mysqli_query($conn,"insert into berkas (tipe_berkas, nama_berkas, bulan_berkas, tahun_berkas, file) values('$tipe','$nama_berkas','$bulan','$tahun_berkas','$file')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header ('location:index.php');
    }
}

?>