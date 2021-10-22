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
    <h3>Tambah Data Karyawan</h3>
    <form method="POST" action="actionTambah.php">
        <div class="row center">
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">NIK</label>
                  <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="2019804xxx">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" id="exampleInputPassword1" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Bagian</label>
                  <input type="bagian" name="bagian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Bagian">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Absensi</label>
                  <input type="text" name="absensi" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nilai (00)">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Kinerja</label>
                  <input type="number" name="kinerja" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nilai (00)">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Atitude</label>
                  <input type="number" name="atitude" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nilai (00)">
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Safety</label>
                  <input type="number" name="safety" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nilai (00)">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Syarat</label>
                  <input type="number" name="syarat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nilai (00)">
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button type="submit" name="submit" class="btn btn-primary" type="button">Tambahkan</button>
        </div>
    </form>
    </div>
  </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

