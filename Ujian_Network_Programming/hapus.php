<?php 
$id=$_GET['apanih'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM login WHERE nama="'.$id.'"');
header("location:lihat_pengguna.php");