<?php 
include "config.php";

$id = $_GET['id'];

$query = mysqli_query($conn,"DELETE FROM karyawan WHERE id_karyawan='$id' ");
if($query){
    echo "<script> alert('Data Berhasil dihapus dari DB !');</script>";
	echo "<script> location='index.php?page=Data Karyawan'; </script>";
}else{
    echo "Mahasiswa dengan Id ".$id."Gagal dihapus !";
}