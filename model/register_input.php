<?php
/**
 * Created by PhpStorm.
 * User: Acek
 * Date: 12/3/2015
 * Time: 12:26 AM
 */
include_once'koneksi.php';
if  (isset($_POST['signup'])){
    $username =$_POST["username"];
    $password =$_POST["password"];
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $email=$_POST['email'];
    $sql = "insert into guest (id_user, username, password, nama, nim, email) values('null','$username','$password','$nama','$nim','$email')";
    $addUser = mysql_query($sql) or die (mysql_error());
    if ($addUser){
        header("location:../dashboard_guest.php");
//    echo'<script>window.history.back()</script>';
    } else{
        echo "<script>alert('Gagal Input');</script>;";
    }
}