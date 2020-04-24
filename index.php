<?php
session_start();
$_SESSION['login'] = false;
header('Location:dashboard_guest.php');