<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true) {
        if ($_SESSION['level'] == 'admin') {
            header("location:dashboard_admin.php");
        } elseif ($_SESSION['level'] == 'user') {
            header("location:dashboard_user.php");
        } elseif ($_SESSION['level'] == 'guest') {
            header("location:dashboard_guest.php");
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="styles/style.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
    <!--//webfonts-->
</head>

<body>
<div class="main">
    <form action="model/cek_login.php" method="post">
        <h1>
            <lable> Login</lable>
        </h1>
        <div class="inset">
            <p>
                <label>USERNAME</label>
                <input type="text" placeholder="Username" required name="username"/>
            </p>

            <p>
                <label>PASSWORD</label>
                <input type="password" placeholder="Password" required name="password"/>
            </p>

            <p>
                <input type="checkbox" name="Remember" id="remember">
                <label for="remember">Remember me</label>
            </p>

            <p class="p-container">
                <input type="submit" value="Login" name="login">
            </p>
    </form>
</div>
<div class="copy-right">
    <p>Program Studi Sistem Informasi</p>

    <p class="univ">UNIVERSITAS JEMBER</p>
</div>
</body>
</html>