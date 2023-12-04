<?php include "koneksi.php";
$id = $_GET['idb'];
$sql = mysqli_query($db, "delete from transaksi where nomeja='$id'");

echo "<script>window.alert('Data Berhasil Dihapus!'), window.location.replace('admin2.php?page=dataadmin')</script>";
?>