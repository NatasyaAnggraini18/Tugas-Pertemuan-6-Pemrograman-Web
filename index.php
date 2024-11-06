<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col">
    <table class="table table-bordered">
    
            <h1> Data Mahasiswa Baru </h1>
            <hr>
            <form action="" method="get">
            <div class="mb-3">
            <select name="filter" class="form-control" >
                <?php
                $q_alamat = "SELECT alamat FROM biodata group by alamat";
                $r_alamat = $mysqli->query($q_alamat);
                while($data_alamat = $r_alamat->fetch_assoc()){
                    ?>
                    <option value="<?= $data_alamat['alamat'];?>"><?php echo $data_alamat['alamat'];?></option>
                    <?php
                }
                ?>
                </select> </br>
                <button type="filter" class="btn btn-primary">Filter</button>
            </form>
            
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
            <?php
            if(isset($_GET['filter'])){
                $query = " SELECT * FROM biodata WHERE alamat='$_GET[filter]'";
            }else{
                $query = "SELECT * FROM biodata";
            }
            $result = $mysqli->query($query);
            $no=0;
            while($row = $result->fetch_assoc()){
                $no++;
                ?>
                <tr>
                    <td><?= $no;?></td>
                <td><?=$row['nama'];?></td>
                <td><?=$row['alamat'];?></td>
                <td><?=$row['tempat_lahir'];?></td> 
                <td><?=$row['tgl_lahir'];?></td>
                <td>
                    <a href="<?= 'form-edit.php?id='.$row['id'];?>">Edit</a>
                    <a href="<?= 'hapus-data.php?id='.$row['id'];?>">Hapus</a>
            </td>
            </tr>
            <?php
             }
             ?>
             </table>
             <a href="form-data.php">Tambah Data</a>
            
</body>
</html>