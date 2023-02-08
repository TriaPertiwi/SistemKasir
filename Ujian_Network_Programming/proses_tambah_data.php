<?php 
include "koneksi.php";
$id=$_POST['tria_ade_pertiwi'];
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
mysqli_query($konek,"INSERT INTO tbl_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$nama."','".$password."')");
header("location:lihat_pengguna.php");