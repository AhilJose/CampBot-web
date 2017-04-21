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
<?php
    $result = pdf2text ("assets/pdf/s5/$_SESSION['register_no'].pdf");
    $fields = preg_split('/\s+/', $result);
?>
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="50" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
<?php
    if($fields[25] == 'Register')
    {
              
    $Total = ($fields[54] + $fields[55]) + ($fields[62] + $fields[63]) + ($fields[70] + $fields[71]) + ($fields[78] + $fields[79]) + ($fields[85] + $fields[86]) + ($fields[94] + $fields[95]) + ($fields[101] + $fields[102]) + ($fields[110] + $fields[111]);
        echo "</br> Total : $Total";
        $Average = ($Total/1200)*100;?>
    <h3 class="text-success counter"><?php echo " Percentage: ".round($Average)."%"; ?></h3>
    <p class="text-muted text-nowrap"><?php echo " Remarks : ".$fields[117]; ?></p>
<?php
    }
    elseif ($fields[26] == 'Register') {
        echo "<h2><strong>".$fields[23]." ".$fields[24]." ".$fields[25]."</strong></h2>";
        echo '<h2>'."($fields[29])";

        $Total = ($fields[55] + $fields[56]) + ($fields[63] + $fields[64]) + ($fields[71] + $fields[72]) + ($fields[79] + $fields[80]) + ($fields[86] + $fields[87]) + ($fields[95] + $fields[96]) + ($fields[102] + $fields[103]) + ($fields[111] + $fields[112]);
        echo "<br> Total : $Total";
        $Average = ($Total/1200)*100;
        echo " Percentage: ".round($Average)."%";?> </div>
        <?php
        echo " Remarks : ".$fields[118];?></div>
        <?php       
    }
    }
 }
?>
                                </div>
                            </div>
                            <!--div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="50" data-fgcolor="#5fbeaa" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-success counter">2562</h3>
                                    <p class="text-muted text-nowrap">Total Sales today</p>
                                </div>
                            </div-->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="50" data-fgcolor="#6a76fc" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-primary counter">5685</h3>
                                    <p class="text-muted text-nowrap">Daily visitors</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="50" data-fgcolor="#f76397" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-pink">$ <span class="counter">12480</span></h3>
                                    <p class="text-muted text-nowrap">Total Earning</p>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget-simple-chart text-right card-box">
                                    <div class="circliful-chart" data-dimension="90" data-text="49%" data-width="5" data-fontsize="14" data-percent="50" data-fgcolor="#98a6ad" data-bgcolor="#ebeff2"></div>
                                    <h3 class="text-inverse counter">62</h3>
                                    <p class="text-muted text-nowrap">Pending Orders</p>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




                        <div class="row">
                            <div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0 m-b-30"><center>Attendance Progress</center></h4>

                        			<div class="widget-chart text-center">
                                        <div id="sparkline3"></div>
	                                	<ul class="list-inline m-t-15">
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Target</h5>
	                                			<h4 class="m-b-0">$1000</h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Last week</h5>
	                                			<h4 class="m-b-0">$523</h4>
	                                		</li>
	                                		<li>
	                                			<h5 class="text-muted m-t-20">Last Month</h5>
	                                			<h4 class="m-b-0">$965</h4>
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


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-tabs tabs">
                        <li class="active tab">
                            <a href="index.html#home-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Activity</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="index.html#profile-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Chat</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="index.html#messages-2" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="index.html#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="index.html" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="index.html" class="text-info">Jessi</a> attended a meeting with<a href="index.html#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="index.html#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="index.html" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="index.html" class="text-info">Jessi</a> attended a meeting with<a href="index.html#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="profile-2">
                            <div class="contact-list nicescroll">
                                <ul class="list-group contacts-list">
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-1.jpg" alt="">
                                            </div>
                                            <span class="name">Chadengle</span>
                                            <i class="fa fa-circle online"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                            </div>
                                            <span class="name">Tomaslau</span>
                                            <i class="fa fa-circle online"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-3.jpg" alt="">
                                            </div>
                                            <span class="name">Stillnotdavid</span>
                                            <i class="fa fa-circle online"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-4.jpg" alt="">
                                            </div>
                                            <span class="name">Kurafire</span>
                                            <i class="fa fa-circle online"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-5.jpg" alt="">
                                            </div>
                                            <span class="name">Shahedk</span>
                                            <i class="fa fa-circle away"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-6.jpg" alt="">
                                            </div>
                                            <span class="name">Adhamdannaway</span>
                                            <i class="fa fa-circle away"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-7.jpg" alt="">
                                            </div>
                                            <span class="name">Ok</span>
                                            <i class="fa fa-circle away"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-8.jpg" alt="">
                                            </div>
                                            <span class="name">Arashasghari</span>
                                            <i class="fa fa-circle offline"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-9.jpg" alt="">
                                            </div>
                                            <span class="name">Joshaustin</span>
                                            <i class="fa fa-circle offline"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="index.html#">
                                            <div class="avatar">
                                                <img src="assets/images/users/avatar-10.jpg" alt="">
                                            </div>
                                            <span class="name">Sortino</span>
                                            <i class="fa fa-circle offline"></i>
                                        </a>
                                        <span class="clearfix"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-xs-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#6a76fc" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-xs-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#6a76fc" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-xs-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#6a76fc" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-xs-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#6a76fc" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

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
        
        <!-- Page js  -->
        <!--script src="assets/pages/jquery.dashboard.js"></script-->

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
                $('#sparkline3').sparkline([65, 90, 80, 85, 97, 100], {
                    type: 'pie',
                    width: '200',
                    height: '200',
                    sliceColors: ['#009688', '#dcdcdc', '#f76397', '#6a76fc', '#797979', '#00bcd4']
                });
            });

            /* BEGIN SVG WEATHER ICON */
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

        </script>
    
    </body>
</html>