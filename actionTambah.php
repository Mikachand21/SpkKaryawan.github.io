<?php 
include 'config.php';

if(isset($_POST['submit'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $absensi = $_POST['absensi'];
    $kinerja = $_POST['kinerja'];
    $atitude = $_POST['atitude'];
    $safeties = $_POST['safety'];
    $syarat = $_POST['syarat'];

    $query = mysqli_query($conn,"INSERT INTO karyawan (nik,nama,bagian,absensi,kinerja,atitude,safeti,syarat_ketentuan) VALUES ('$nik','$nama','$bagian','$absensi','$kinerja', '$atitude', '$safeties', '$syarat') ");
    
    if($query){
        echo "<script> alert('Data Berhasil dimasukan ke DB !');</script>";
	    echo "<script> location='index.php?page=Data Karyawan'; </script>";
    }else{
        echo "Data gagal di masukan ke databse";
    }
}