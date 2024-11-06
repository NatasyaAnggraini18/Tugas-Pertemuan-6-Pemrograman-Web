<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Form Data Mahasiswa</h1>
    <form action="Tambah-data.php" method="get">
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama"/><br/>
        <div class="mb-3">
        <label for="alamat">Alamat</label>
        <textarea name="alamat" class="form-control"></textarea><br/>
        <div class="mb-3">
        <label for="tmpt_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" name="tmpt_lahir"/><br/>
        <div class="mb-3">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir"/><br/>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</body>
</html>