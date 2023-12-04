<?php include "koneksi.php";
$tran = $_GET['transaksi'];
$sql = mysqli_query($db, "delete from meja where nomeja='$tran'");
$sql = mysqli_query($db, "delete from meja where namameja='$tran'");
$sql = mysqli_query($db, "delete from tbl_riwayat where nidn='$tran'");

echo "<script>window.alert('Data Berhasil Dihapus!'), window.location.replace('admin.php?page=databarang')</script>";
?>