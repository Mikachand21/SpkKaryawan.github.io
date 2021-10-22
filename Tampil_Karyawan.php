<?php
  $conn = mysqli_connect ("localhost","root","","dbkaryawan");
  if (mysqli_connect_errno()){
  echo "Koneksi Gagal".mysqli_connect_error();
}
$query = mysqli_query($conn,"SELECT*FROM karyawan ORDER BY NIK ASC");

$absesnsi = [];
$kinerja = [];
$atitude = [];
$safety = [];
$sayarat = [];

while($row = mysqli_fetch_array($query)){
  array_push($absesnsi, $row['absensi']);
  array_push($kinerja, $row['kinerja']);
  array_push($atitude, $row['atitude']);
  array_push($safety, $row['safeti']);
  array_push($sayarat, $row['syarat_ketentuan']);
}
// data pencarian nilai bnefit dan cost
$absensibenefit = max($absesnsi);
$kinerjabenefit = max($kinerja);
$atitudebenefit = max($atitude);
$safetrybenefit = min($safety);
$syaratbenefit = max($sayarat);

$dataforfactor = mysqli_query($conn,"SELECT*FROM karyawan ORDER BY NIK ASC");

$absiNilai = [];
$kinerjaNilai = [];
$atitudeNilai = [];
$safetyNilai = [];
$sayaratNilai = [];

// Jumlah Hasil benefit cost x bobot factor
while($row = mysqli_fetch_array($dataforfactor)){
  array_push($absiNilai, $row['absensi'] / $absensibenefit * 0.45);
  array_push($kinerjaNilai, $row['kinerja'] / $kinerjabenefit * 0.2);
  array_push($atitudeNilai, $row['atitude'] / $atitudebenefit * 0.1);
  array_push($safetyNilai, $safetrybenefit / $row['safeti'] * 0.2);
  array_push($sayaratNilai, $row['syarat_ketentuan'] / $syaratbenefit * 0.05);
}

// var_dump($absiNilai);
// Hasil akhir
$result = $absiNilai[0] + $kinerjaNilai[0] + $atitudeNilai[0] + $safetyNilai[0] + $sayaratNilai[0];

$dataVal = mysqli_query($conn,"SELECT*FROM karyawan ORDER BY NIK ASC");

?>
<h1>DATA KARYAWAN</h1>

<table id="example" class="table table-striped table-bordered" style="width:100%">

  <thead class="bg-success"> 
    <tr>
      <th scope="col"></th>
      <th scope="col">Nik</th>
      <th scope="col-2">Nama</th>
      <th scope="col">Bagian</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=-1; while($row = mysqli_fetch_array($dataVal)) : ?>
     <tr>
         <td><?php $i++; ?></td>
         <td><?= $row['nik'] ?></td>
         <td><?= $row['nama'] ?></td>
         <td><?= $row['bagian'] ?></td>
         
         
         <td>
             <a class="btn btn-outline-primary" href="ubah.php?id=<?= $row['id_karyawan']; ?>">Ubah</a>
             <a class="btn btn btn-outline-danger" href="hapus.php?id=<?= $row['id_karyawan']; ?>">Hapus</a>
         </td>
     </tr>
  <?php endwhile; ?>
  </tbody>
</table>

