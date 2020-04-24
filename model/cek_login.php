<?php
/**
 * Created by PhpStorm.
 * User: Acek
 * Date: 12/2/2015
 * Time: 10:52 PM
 */
include_once '../model/koneksi.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "select * from login WHERE username = '$username' and password = '$password'";
    $select = mysql_query($sql) or die (mysql_error());
    if (mysql_num_rows($select) > 0) {
        $data = mysql_fetch_array($select);
        $_SESSION['level'] = $data['level'];
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['login'] = true;
        if ($_SESSION['level'] == 'admin') {
            header("location:../dashboard_admin.php");
        } elseif ($_SESSION['level'] == 'user') {
            header("location:../dashboard_user.php");
        } elseif ($_SESSION['level'] == 'guest') {
            header("location:../dashboard_guest.php");
        }
    } else {
        header("location:../login.php");
    }
}