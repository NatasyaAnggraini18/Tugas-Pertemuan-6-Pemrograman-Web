<?php
include "koneksi.php";
$query = "SELECT * FROM biodata WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Form Edit Data Mahasiswa</h1>
    <form action="<?= 'update-data.php?id='.$row['id'];?>" method="post">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $row['nama'];?>"/></br>
        <div class="mb-3">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control" ><?= $row['alamat'];?></textarea><br/>
        <div class="mb-3">
        <label for="tmpt_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tmpt_lahir" value="<?= $row['tempat_lahir'];?>"/><br/>
        <div class="mb-3">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'];?>"/><br/>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</body>
</html>