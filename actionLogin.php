<?php 
// menghubungkan dengan koneksi
include 'config.php';

// mengaktifkan session php
session_start();

// cek apakah ada action submit button
if(isset($_POST['submit'])){
    $username = $_POST['email'];
    $password = $_POST['password'];
    
    // menyeleksi data admin dengan username dan password yang sesuai
    $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$password'");

    if($result->num_rows > 0 ){
        $_SESSION['username'] = $username;
	    $_SESSION['status'] = "login";
	    header("location:index.php");
    }else{
	    header("location:login.php");
    }
}