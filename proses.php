<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nim          = $_POST['nim'];
$nama = $_POST['nama'];
$tugas       = $_POST['tugas'];
$uts       = $_POST['uts'];
$final       = $_POST['final'];
$totalnilai = $_POST['final']+$_POST['final']+$_POST['uts'];
$kalinilai = $_POST['final']*$_POST['final']*$_POST['uts'];
$tengahnilai = $_POST['final']+$_POST['final']+$_POST['uts'];
//query insert data ke dalam database
$query = "INSERT INTO studycle (nim, nama, tugas, uts, final, totalnilai, kalinilai,tengahnilai) VALUES ('$nim', '$nama', '$tugas', '$uts', '$final', '$totalnilai', '$kalinilai', '$tengahnilai')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: Nilai.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>