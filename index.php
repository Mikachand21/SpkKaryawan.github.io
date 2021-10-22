<?php 
    session_start();
    date_default_timezone_set("Asia/Jakarta");
    include "config.php";
     
	if($_SESSION['status'] !== "login"){
		header("location:login.php");
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!--Data tables css-->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    

    <title>SPK KARYAWAN TRAINING KE PKWT</title>
  </head>
  <body>
<!-- awal navbar -->
        
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=Input Karyawan">Input Karyawan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=Data Karyawan">Data Karyawan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=Normalisasi">Normalisasi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=Rangking">Rangking & Result</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page=Log Out">Log Out</a>
            </li>
        </ul>
        </nav>
<!-- akhir navbar -->
<!-- awal container -->
    <div class="container" style="margin-top:20px">

    <?php

//setting variabel page & action
$page = isset($_GET['page']) ? $_GET['page'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";
// setting halaman
   
if ($page==""){
    include "welcome.php";
    }elseif ($page=="Data Karyawan"){
        if ($action==""){
        include "Tampil_Karyawan.php";
         }elseif ($action=="Tampil_Karyawan.php"){
             include "Input Karyawan";
         }elseif ($action=="NAMA_ACTION"){
             include "NAMA_HALAMAN";
         }else{
             include "NAMA_HALAMAN";
         }
    }elseif ($page=="Normalisasi"){
        include "normalisasi.php";
    }elseif ($page=="Input Karyawan"){
        include "tambahKaryawan.php";
    }elseif ($page=="Rangking"){
        include "rangking.php";
    }elseif ($page=="Log Out"){
        include "logout.php";
    
    }else{
        include "Tampil_Karyawan.php";
    }
?>
    </div>
<!-- akhir container -->
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>$(document).ready(funcition() {
        $('#myTables').DataTable();
    } );   

  </body>
</html>