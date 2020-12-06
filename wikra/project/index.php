<?php
require 'dbase.php';
// Kalian bisa mengurutkan menjadi yang terbaru dulu
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC" );
$db = new database();

 ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Siswa</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center;">List Siswa Wikrama</h1>
    <button class="btn btn-danger ml-3 mt-3 mb-3" name="login" onclick="window.location.href='tambah.php'">Add Data</button>
    <div id="countainer">


    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Action</th>
          <th scope="col">NIS</th>
          <th scope="col">Name</th>
          <th scope="col">Majors</th>
        </tr>
      </thead>
      <tbody>
    <!-- INI UNTUK MENGELUARKAN / MENAMPILKAN DATA -->
      	<?php $i=1; ?>
        <?php foreach($db->tampil_data() as $row) : ?>

        <tr>
          <th scope="row"><?= $i; ?></th>
          <div class="buttontd">
          <td><a href="ubah.php?id=<?= $row["id"]; ?>" style="text-decoration: none; ">Edit</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" style="text-decoration: none; " onclick="return confirm('yakin?')">Delete</a></td>
          </div>
          <td><?=$row["nis"]?></td>
          <td><?=$row["nama"]?></td>
          <td><?=$row["jurusan"]?></td>
        </tr>

    <?php $i++; ?>
    <?php endforeach; ?>

    </tbody>


    </table>
    </div>
  </body>
</html>
