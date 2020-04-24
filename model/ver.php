<?php
include_once'koneksi.php';
$id = $_GET['id'];
//echo $id;
//
$sql = "UPDATE
  `data`
SET
  `id_jenis` = 1
  WHERE
  Nomor = $id";
//$update = mysql_query("update data set id_jenis='1' where Nomor='$id'");
$verif = mysql_query($sql) or die (mysql_error());
if ($verif) {
    echo "<script>alert('sukses');</script>;";
    header("location:../info.php");
} else {
    echo "<script>alert('Gagal');</script>;";
    echo '<script>window.history.back()</script>';
}