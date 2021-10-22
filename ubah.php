<?php 
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($conn,"SELECT * FROM karyawan WHERE id_karyawan=$id ");
$response = mysqli_fetch_row($query);
var_dump($response);
// $data = ['laki-laki','perempuan'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container mt-5">
    <h3>Ubah Data Karyawan</h3>
    <form method="POST" action="">
        <div class="row center">
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">NIK</label>
                  <input type="text" value="<?=$response[1]?>" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text"value= "<?=$response[2]?>"name="nama" placeholder="Input Nama" class="form-control" id="exampleInputPassword1" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Bagian</label>
                  <input type="text" value="<?=$response[3]?>" name="bagian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Absensi</label>
                  <input type="number" value="<?=$response[4]?>" name="absensi" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Kinerja</label>
                  <input type="number" value= "<?=$response[5]?>" name="kinerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Atitude</label>
                  <input type="number"value= "<?=$response[6]?>" name="atitude" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Safety</label>
                  <input type="number"value= "<?=$response[7]?>" name="safety" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Syarat</label>
                  <input type="number"value= "<?=$response[8]?>" name="syarat" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" name="submit" class="btn btn-primary" type="button">Ubah</button>
        </div>
    </form>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
include "config.php";
if(isset($_POST['submit'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $bagian = $_POST['bagian'];
    $absensi = $_POST['absensi'];
    $kinerja = $_POST['kinerja'];
    $atitude = $_POST['atitude'];
    $safeties = $_POST['safety'];
    $syarat = $_POST['syarat'];
    
    // simpan data ke databse
    $query = mysqli_query($conn,"UPDATE karyawan SET nik='$nik',nama='$nama', bagian='$bagian', absensi='$absensi', kinerja='$kinerja', atitude='$atitude', safeti='$safeties', syarat_ketentuan='$syarat' WHERE id_karyawan='$id' ");
    if($query){
        echo "<script> alert('Data Berhasil diubah !');</script>";
	    echo "<script> location='index.php?page=Data Karyawan'; </script>";

    }else{
        echo "Data gagal di masukan ke databse";
    }
}

