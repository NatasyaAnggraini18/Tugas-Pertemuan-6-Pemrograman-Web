<?php
$mysqli = new mysqli("localhost", "root", "", "db_mhs");
if ($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->connect_eror);
}