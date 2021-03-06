<?php
include 'model/koneksi.php';
session_start();
if (isset($_POST['submit'])) {
    $nama_event = $_POST['nama_event'];
    $tgl_mulai = $_POST['tgl_mulai'];
    $tgl_akhir = $_POST['tgl_akhir'];
    $tgl_acara = $_POST['tgl_acara'];
    $kuota = $_POST['kuota'];
    $tempat = $_POST['tempat'];
    $pemateri = $_POST['pemateri'];
    $jenis_acara = $_POST['jenis_acara'];
    $id_user = $_SESSION['id_user'];

//    if($jenis_acara == 'seminar'){
//        $kuota = $_POST['kuota']+5;
//    }

    $query = "INSERT
                INTO
                  `event`(
                    `id_event`,
                    `nama_event`,
                    `Awal_Pendaftaran`,
                    `Akhir_Pendaftaran`,
                    `Tanggal_Acara`,
                    `Tempat`,
                    `Pemateri`,
                    `Jenis_Acara`,
                    `id_user`,
                    `kuota`
                  )
                VALUES(
                  NULL ,
                  '$nama_event',
                  '$tgl_mulai',
                  '$tgl_akhir',
                  '$tgl_acara',
                  '$tempat',
                  '$pemateri',
                  '$jenis_acara',
                  '$id_user',
                  '$kuota'
                )";
    $result = mysql_query($query) or die(mysql_error());
    header('location:info.php');
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

    <script src="script/jquery-1.11.3.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/smoothness/jquery-ui.css">
    <script src="script/jquery-1.9.1.js"></script>
    <script src="script/jquery-ui.js"></script>
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
                    <li><a href="dashboard_user.php"><i class="fa fa-tachometer fa-fw">
                                <div class="icon-bg bg-orange"></div>
                            </i><span class="menu-title">Dashboard</span></a></li>
                    <li class="active"><a href="add_event.php"><i class="fa fa-desktop fa-fw">
                                <div class="icon-bg bg-pink"></div>
                            </i><span class="menu-title">ADD EVENT</span></a>

                    </li>
                    <li><a href="add_artikel.php"><i class="fa fa-send-o fa-fw">
                                <div class="icon-bg bg-green"></div>
                            </i><span class="menu-title">ADD ARTICLE</span></a>

                    </li>
                    <li><a href="info.php"><i class="fa fa-edit fa-fw">
                                <div class="icon-bg bg-violet"></div>
                            </i><span class="menu-title">INFO</span></a>

                    </li>
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">
                        Add Event
                    </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard_user.php">Home</a>&nbsp;&nbsp;<i
                            class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                    <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
                <div class="clearfix">
                </div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE-->

            <div class="page-content">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-blue">
                                <div class="panel-heading">
                                    Buat Event
                                </div>
                                <div class="panel-body pan">
                                    <form method="post">
                                        <div class="form-body pal">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-user"></i> -->
                                                            <input name="nama_event" id="inputName" type="text"
                                                                   placeholder="Nama Event"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="tgl_mulai" id="tgl" type="text"
                                                                   placeholder="Tanggal Mulai"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="tgl_akhir" id="tgl_akhir" type="text"
                                                                   placeholder="Tanggal Akhir"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="kuota" id="Author" type="text"
                                                                   placeholder="Kuota Peserta"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="tgl_acara" id="tgl_acara" type="text"
                                                                   placeholder="Tanggal Acara"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="tempat" id="Author" type="text"
                                                                   placeholder="Tempat Pelaksanaan"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="pemateri" id="Author" type="text"
                                                                   placeholder="Pemateri"
                                                                   class="form-control" required=""/></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="input-icon right">
                                                            <!-- <i class="glyphicon glyphicon-lock"></i> -->
                                                            <input name="jenis_acara" id="Author" type="text"
                                                                   placeholder="Jenis Acara" class="form-control"
                                                                   required=""/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                        </div>
                                        <div class="form-actions text-right pal">
                                            <button type="submit" name="submit" class="btn btn-primary">
                                                Create
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    <script type="text/javascript">
        // When inputTglAwal on click
        $('#tgl').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-10:+10",
            dateFormat: "yy-mm-dd"
        });
    </script>
    <script type="text/javascript">
        // When inputTglAwal on click
        $('#tgl_akhir').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-10:+10",
            dateFormat: "yy-mm-dd"
        });
    </script>
    <script type="text/javascript">
        // When inputTglAwal on click
        $('#tgl_acara').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-10:+10",
            dateFormat: "yy-mm-dd"
        });
    </script>
</body>
</html>
