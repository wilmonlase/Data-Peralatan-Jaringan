<?php
$id= $_GET['id'];
$koneksi->query("DELETE FROM tbl_user WHERE id_pengguna='$id'");
echo "<script>alert('Data Terhapus');</script>";
    echo "<script>location='index.php?halaman=data_user';</script>"; 
?>