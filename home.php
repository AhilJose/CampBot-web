<!DOCTYPE html>
<?php
ob_start();
session_start();
require_once('pdf2text.php');
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Campus Assistance</title>

        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"-->


        <script src="assets/js/modernizr.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-72255993-1', 'auto');
            ga('send', 'pageview');
        </script>
        
    </head>
    <style type="text/css">
        .btn-custom {
            background-color: transparent;
            border-style: none;
            outline-style: none;
        }
    </style>

    <body class="fixed-left">        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-equalizer"></i> <span>Campus Assistance</span> </a>
                    </div>
                </div>

                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Dashboard</li>

                            <li>
                                <a href="index.html" class="waves-effect waves-primary subdrop"><i
                                        class="md md-dashboard"></i><span> Dashboard </span></a>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="md md-palette"></i> <span> Options </span>
                                 <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <!--li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-panels.html">Panels</a></li>
                                    <li><a href="ui-portlets.html">Portlets</a></li>
                                    <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                    <li><a href="ui-tabs.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li-->
                                    <li><a href="#">Users</a></li>
                                    <li><a href="#">Edit Users</a></li>
                                    <li><a href="#">News Feed</a></li>
                                    <li><a href="#">User Report</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (isset($_POST['logout']))
        {
                unset($_SESSION['username']);
                // Delete all session variables
                session_destroy();
                // Jump to login page
                header('Location: index.php');
                ob_end_flush();
        }
    }
?>
                <div class="user-detail">
                    <div class="dropup">
                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
                            <img  src="assets/images/profile_placeholder.png" alt="user-img" class="img-circle">
                            <span class="user-info-span">
                                <h5 class="m-t-0 m-b-0"><?php echo $_SESSION['name']; ?></h5>
                                <p class="text-muted m-b-0">
                                    <small><i class="fa fa-circle text-success"></i> <span>Online</span></small>
                                </p>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><form method="POST" action="#"><center><i class="md md-settings-power"></i><input class="btn-custom btn-md" name="logout" type="submit" value="LogOut"></input></center></form></li>
                        </ul>

                    </div>
                </div>
            </div>
          <!-- Left Sidebar End --> 

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="index.html#"><?php echo $_SESSION['name']; ?></a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <h4 class="page-title">Welcome <?php echo $_SESSION['name']; ?>!</h4>
                                </div>
                            </div>
                        </div>


                        <div class="row">
<!--s1s2-->
<?php
    $i = $_SESSION['register_no'];
    $result = pdf2text ("assets/pdf/s1/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {
              
    $Total = ($fields[56] + $fields[57]) + ($fields[63] + $fields[64]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[103] + $fields[104]) + ($fields[111] + $fields[112]) + ($fields[122] + $fields[123]) + ($fields[129]) + ($fields[138]);
        $Average = ($Total/1500)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
    <p>S1S2 Total :</p>
    <h3 class="text-success counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[145] == 'P'){ echo "PASS";}else if($fields[145]=='F'){echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
    $Total = ($fields[57] + $fields[58]) + ($fields[65] + $fields[66]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[112] + $fields[113]) + ($fields[123] + $fields[124]) + ($fields[130]) + ($fields[139]);
        $Average = ($Total/1500)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
    <p>S1S2 Total :</p>
    <h3 class="text-success counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[146] == 'P'){ echo "PASS";}else if($fields[146]=='F'){echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>

<!--s3-->
<?php
    $result = pdf2text ("assets/pdf/s3/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {
              
    $Total = ($fields[54] + $fields[55]) + ($fields[63] + $fields[64]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[90] + $fields[91]) + ($fields[99] + $fields[100]) + ($fields[106] + $fields[107]) + ($fields[114] + $fields[115]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#6a76fc" data-bgcolor="#ebeff2"></div>
    <p>S3 Total :</p>
    <h3 class="text-primary counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[121] == 'P'){ echo "PASS";}else if($fields[121]=='F'){echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        $Total = ($fields[55] + $fields[56]) + ($fields[64] + $fields[65]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[91] + $fields[92]) + ($fields[100] + $fields[101]) + ($fields[107] + $fields[108]) + ($fields[115] + $fields[116]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#6a76fc" data-bgcolor="#ebeff2"></div>
    <p>S3 Total :</p>
    <h3 class="text-primary counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[122] == 'P'){ echo "PASS";}else if($fields[122] == 'F'){echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>
<!--s4-->
<?php
    $result = pdf2text ("assets/pdf/s4/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {              
    $Total = ($fields[54] + $fields[55]) + ($fields[62] + $fields[63]) + ($fields[71] + $fields[72]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[103] + $fields[104]) + ($fields[111] + $fields[112]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
    <p>S4 Total :</p>
    <h3 class="text-pink counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[118] == 'P'){ echo "PASS";}else if($fields[118]=='F'){echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        $Total = ($fields[55] + $fields[56]) + ($fields[63] + $fields[64]) + ($fields[72] + $fields[73]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[112] + $fields[113]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
    <p>S4 Total :</p>
    <h3 class="text-pink counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[119] == 'P'){ echo "PASS";}else if($fields[119]=='F'){echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>

<!--s5-->
<?php
    $result = pdf2text ("assets/pdf/s5/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {
              
    $Total = ($fields[54] + $fields[55]) + ($fields[62] + $fields[63]) + ($fields[70] + $fields[71]) + ($fields[78] + $fields[79]) + ($fields[85] + $fields[86]) + ($fields[94] + $fields[95]) + ($fields[101] + $fields[102]) + ($fields[110] + $fields[111]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S5 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[117] == 'P'){ echo "PASS";}else{echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        $Total = ($fields[55] + $fields[56]) + ($fields[63] + $fields[64]) + ($fields[71] + $fields[72]) + ($fields[79] + $fields[80]) + ($fields[86] + $fields[87]) + ($fields[95] + $fields[96]) + ($fields[102] + $fields[103]) + ($fields[111] + $fields[112]);
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S5 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[118] == 'P'){ echo "PASS";}else{echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>
<!--s6-->
<?php
    $result = pdf2text ("assets/pdf/s6/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {
    if ($fields[85]=='Unix') {
    $Total = ($fields[56] + $fields[57]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[103] + $fields[104]);
    }
    else{
    $Total = ($fields[56] + $fields[57]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[102] + $fields[103]);
    }
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S6 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[109] == 'P'){ echo "PASS";}else if($fields[109]=='F'){echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        if ($fields[86]=='Unix') {
            $Total = ($fields[57] + $fields[58]) + ($fields[62] + $fields[63]) + ($fields[69] + $fields[70]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[89] + $fields[90]) + ($fields[97] + $fields[98]) + ($fields[104] + $fields[105]);
        }
        else {
            $Total = ($fields[57] + $fields[58]) + ($fields[62] + $fields[63]) + ($fields[69] + $fields[70]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[103] + $fields[104]);
        }
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S6 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[110] == 'P'){ echo "PASS";}else if($fields[110]=='F'){echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>
<!--s7-->
<?php
    $result = pdf2text ("assets/pdf/s7/$i.pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="widget-simple-chart text-right card-box">
<?php
    if($fields[25] == 'Register')
    {
    $Total = ($fields[53] + $fields[54]) + ($fields[60] + $fields[61]) + ($fields[67] + $fields[68]) + ($fields[77] + $fields[78]) + ($fields[86] + $fields[87]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[109] + $fields[110]) + $fields[115] + $fields[121];
        $Average = ($Total/1300)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S7 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[128] == 'P'){ echo "PASS";}else if($fields[128]=='F'){echo "FAIL";} ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        $Total = ($fields[54] + $fields[55]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[78] + $fields[79]) + ($fields[87] + $fields[88]) + ($fields[97] + $fields[98]) + ($fields[105] + $fields[106]) + ($fields[110] + $fields[111]) + $fields[116] + $fields[122];
        $Average = ($Total/1200)*100;?>
<div class="circliful-chart" data-dimension="90" data-text="<?php echo round($Average)."%"; ?>" data-width="5" data-fontsize="14" data-percent="<?php echo round($Average); ?>" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
    <p>S7 Total :</p>
    <h3 class="text-inverse counter"><?php echo $Total ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : "; if($fields[129] == 'P'){ echo "PASS";}else if($fields[129]){echo "FAIL";} ?></p>
<?php
    }
?>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
<?php
            $con = mysqli_connect("localhost","admin","admin","campbot") or die('Unable to connect to database');
            $username = $_SESSION['username'];
            $password = $_SESSION['password'];
            $query = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            while ($data = mysqli_fetch_assoc($result)) {
                    $s1 = $data['s1attend'];
                    $s4 = $data['s4attend'];
                    $s5 = $data['s5attend'];
                    $s6 = $data['s6attend'];
                    $s7 = $data['s7attend'];
                    $s8 = $data['s8attend'];
                    $s8dt = $data['s8dtotal'];
                    $s8dp = $data['s8dpresent'];
            }
?>
                        <div class="row">
                            <div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0 m-b-30"><center>Attendance Progress</center></h4>

                        			<div class="widget-chart text-center">
                                        <div id="sparkline3"></div>
	                                	<ul class="list-inline m-t-15">
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Total Number of days in s8</h5>
	                                			<h4 class="m-b-0"><?php echo $s8dt; ?></h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Days Present in s8</h5>
	                                			<h4 class="m-b-0"><?php echo $s8dp; ?></h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Current Semester Percentage</h5>
	                                			<h4 class="m-b-0"><?php echo $s8; ?></h4>
	                                		</li>
	                                	</ul>
                                	</div>
                        		</div>

                            </div>

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->
                </div>
                <!-- end content -->

                <footer class="footer text-right">
                    2017 &copy; Akhil J &rarr; Jose T &rarr; Akash G
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        
        <!-- Counter Up  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- circliful Chart -->
        <script src="assets/plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- skycons -->
        <script src="assets/plugins/skyicons/skycons.min.js" type="text/javascript"></script>
        
        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
                $('#sparkline3').sparkline([<?php echo $s1; ?>, <?php echo $s4; ?>, <?php echo $s5; ?>, <?php echo $s6; ?>, <?php echo $s7; ?>, <?php echo $s8; ?>], {
                    type: 'pie',
                    width: '200',
                    height: '200',
                    sliceColors: ['#009688', '#dcdcdc', '#f76397', '#6a76fc', '#797979', '#00bcd4']
                });
            });

            /* BEGIN SVG WEATHER ICON 
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#6a76fc"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();    
            };
*/
        </script>
    
    </body>
</html>