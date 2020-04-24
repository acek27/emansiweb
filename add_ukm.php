<?php
session_start();
include_once 'model/koneksi.php';

if (isset($_POST['submit'])) {
    $id_user = $_POST['id_user'];
    $nama_ukm = $_POST['nama_ukm'];
    $password = $_POST['password'];

    $query = "INSERT INTO `login`(`id_user`, `username`, `password`, `level`) VALUES ('$id_user','$nama_ukm','$password','user')";
    $result = mysql_query($query) or die(mysql_error());
    header('location:add_ukm.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="styles/animate.css">
    <link type="text/css" rel="stylesheet" href="styles/all.css">
    <link type="text/css" rel="stylesheet" href="styles/main.css">
    <link type="text/css" rel="stylesheet" href="styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="styles/pace.css">
    <link type="text/css" rel="stylesheet" href="styles/jquery.news-ticker.css">
</head>
<body>
<div>
    <!--END THEME SETTING-->
    <!--BEGIN BACK TO TOP-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <!--END BACK TO TOP-->
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text">EMANSI</span><span style="display: none" class="logo-text-icon">µ</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <?php
                    if ($_SESSION['login'] == true) {
                        ?>
                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle">
                                &nbsp;<span
                                    class="hidden-xs"><?php echo $_SESSION['username']; ?></span>&nbsp;<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                                <li><a href="Logout.php"><i class="fa fa-key"></i>Log Out</a></li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <li><a href="login.php"> LOGIN </a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <div id="modal-config" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                            &times;</button>
                        <h4 class="modal-title">
                            Modal title</h4>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <ul class="list-inline item-details">
                    <li><a href="http://themifycloud.com">Admin templates</a></li>
                    <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                </ul>
            </div>
        </div>
        <!--END MODAL CONFIG PORTLET-->
    </div>
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" data-step="2"
             data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
             data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">

                    <div class="clearfix"></div>
                    <li><a href="dashboard_admin.php"><i class="fa fa-tachometer fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Dashboard</span></a></li>
                    <li class="active"><a href="add_ukm.php"><i class="fa fa-desktop fa-fw">
                                <div class="icon-bg bg-pink"></div>
                            </i class="active"><span class="menu-title">UKM</span></a>

                    </li>
                    <!--  <li><a href="UIElements.html"><i class="fa fa-send-o fa-fw">
                         <div class="icon-bg bg-green"></div>
                     </i><span class="menu-title">ABOUT</span></a>

                     </li> -->
<!--                    <li><a href="statistic_event.php"><i class="fa fa-edit fa-fw">-->
<!--                                <div class="icon-bg bg-violet"></div>-->
<!--                            </i><span class="menu-title">STATISTIC EVENT</span></a>-->
<!---->
<!--                    </li>-->
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN CHAT FORM-->
        <div id="chat-form" class="fixed">
            <div class="chat-inner">
                <h2 class="chat-header">
                    <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>

                <div id="group-1" class="chat-group">
                    <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span>
                        <small>
                            Verna Morton
                        </small>
                        <span class="badge badge-info">2</span></a><a href="#"><span
                            class="user-status is-online"></span>
                        <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span>
                        <small>Nathaniel Morris</small>
                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                            class="user-status is-idle"></span>
                        <small>Boyd Bridges</small>
                        <span class="badge badge-info is-hidden">0</span></a><a
                        href="#"><span class="user-status is-offline"></span>
                        <small>Meredith Houston</small>
                        <span class="badge badge-info is-hidden">0</span></a></div>
                <div id="group-2" class="chat-group">
                    <strong>Office</strong><a href="#"><span class="user-status is-busy"></span>
                        <small>
                            Ann Scott
                        </small>
                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                            class="user-status is-offline"></span>
                        <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span>
                        <small>Florence
                            Pierce
                        </small>
                        <span class="badge badge-info">1</span></a></div>
                <div id="group-3" class="chat-group">
                    <strong>Friends</strong><a href="#"><span class="user-status is-online"></span>
                        <small>
                            Willard Mckenzie
                        </small>
                        <span class="badge badge-info is-hidden">0</span></a><a
                        href="#"><span class="user-status is-busy"></span>
                        <small>Jenny Frazier</small>
                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                            class="user-status is-offline"></span>
                        <small>Chris Stewart</small>
                        <span class="badge badge-info is-hidden">0</span></a><a
                        href="#"><span class="user-status is-offline"></span>
                        <small>Olivia Green</small>
                        <span class="badge badge-info is-hidden">0</span></a></div>
            </div>
            <div id="chat-box" style="top: 400px">
                <div class="chat-box-header">
                    <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span>
                    <small>Online</small>
                </div>
                <div class="chat-content">
                    <ul class="chat-box-body">
                        <li>
                            <p>
                                <img src="images/avatar/128.jpg" class="avt"/><span class="user">John Doe</span><span
                                    class="time">09:33</span></p>

                            <p>
                                Hi Swlabs, we have some comments for you.</p>
                        </li>
                        <li class="odd">
                            <p>
                                <img src="images/avatar/48.jpg" class="avt"/><span class="user">Swlabs</span><span
                                    class="time">09:33</span></p>

                            <p>
                                Hi, we're listening you...</p>
                        </li>
                    </ul>
                </div>
                <div class="chat-textarea">
                    <input placeholder="Type your message" class="form-control"/></div>
            </div>
        </div>
        <!--END CHAT FORM-->

        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Dashboard
                    </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard_admin.php">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->
            <!-- konten -->
            <div class="page-content">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    Tambah UKM
                                </div>
                                <div class="panel-body pan">
                                    <form method="post">
                                        <div class="form-body pal">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!--<i class="glyphicon glyphicon-lock"></i>-->
                                                            <input name="id_user" id="inputName" type="text"
                                                                   placeholder="ID UKM"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-user"></i> -->
                                                            <input name="nama_ukm" type="text" placeholder="Nama UKM"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="password" type="text"
                                                                   placeholder="Password" class="form-control"
                                                                   required=""/></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                        </div>
                                        <div class="form-actions text-right pal">
                                            <button name="submit" type="submit" class="btn btn-success">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">List UKM</div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID UKM</th>
                                            <th>Nama UKM</th>
                                            <th>Password</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM `login` where level = 'user'";
                                        $result = mysql_query($sql) or die (mysql_error());
                                        while ($data = mysql_fetch_array($result)) { ?>
                                            <tr>
                                                <td><?php echo $data['id_user'] ?></td>
                                                <td><?php echo $data['username'] ?></td>
                                                <td><?php echo $data['password'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--BEGIN FOOTER-->
                        <div id="footer">
                            <div class="copyright">
                                <a href="http://www.emansi.com">2015 © EMANSI for your Organization</a></div>
                        </div>
                        <!--END FOOTER-->
                    </div>
                    <!--END PAGE WRAPPER-->
                </div>
            </div>
            <script src="script/jquery-1.10.2.min.js"></script>
            <script src="script/jquery-migrate-1.2.1.min.js"></script>
            <script src="script/jquery-ui.js"></script>
            <script src="script/bootstrap.min.js"></script>
            <script src="script/bootstrap-hover-dropdown.js"></script>
            <script src="script/html5shiv.js"></script>
            <script src="script/respond.min.js"></script>
            <script src="script/jquery.metisMenu.js"></script>
            <script src="script/jquery.slimscroll.js"></script>
            <script src="script/jquery.cookie.js"></script>
            <script src="script/icheck.min.js"></script>
            <script src="script/custom.min.js"></script>
            <script src="script/jquery.news-ticker.js"></script>
            <script src="script/jquery.menu.js"></script>
            <script src="script/pace.min.js"></script>
            <script src="script/holder.js"></script>
            <script src="script/responsive-tabs.js"></script>
            <script src="script/jquery.flot.js"></script>
            <script src="script/jquery.flot.categories.js"></script>
            <script src="script/jquery.flot.pie.js"></script>
            <script src="script/jquery.flot.tooltip.js"></script>
            <script src="script/jquery.flot.resize.js"></script>
            <script src="script/jquery.flot.fillbetween.js"></script>
            <script src="script/jquery.flot.stack.js"></script>
            <script src="script/jquery.flot.spline.js"></script>
            <script src="script/zabuto_calendar.min.js"></script>
            <script src="script/index.js"></script>
            <!--LOADING SCRIPTS FOR CHARTS-->
            <script src="script/highcharts.js"></script>
            <script src="script/data.js"></script>
            <script src="script/drilldown.js"></script>
            <script src="script/exporting.js"></script>
            <script src="script/highcharts-more.js"></script>
            <script src="script/charts-highchart-pie.js"></script>
            <script src="script/charts-highchart-more.js"></script>
            <!--CORE JAVASCRIPT-->
            <script src="script/main.js"></script>
            <script>        (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                            (i[r].q = i[r].q || []).push(arguments)
                        }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-145464-12', 'auto');
                ga('send', 'pageview');


            </script>
</body>
</html>
