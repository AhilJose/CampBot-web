<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Minton - Responsive Admin Dashboard Template</title>

        <link href="http://localhost/CampBot/web/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="http://localhost/CampBot/web/assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="http://localhost/CampBot/web/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--link href="http://localhost/CampBot/web/assets/css/core.css" rel="stylesheet" type="text/css"-->
        <link href="http://localhost/CampBot/web/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/CampBot/web/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/CampBot/web/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/CampBot/web/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/CampBot/web/assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="http://localhost/CampBot/web/assets/css/chat_custom.css" rel="stylesheet" type="text/css">
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"-->
        <script src="http://localhost/CampBot/web/assets/js/chat_custom.js"></script>

        <!--script src="http://localhost/CampBot/web/assets/js/modernizr.min.js"></script-->
        <!--script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-72255993-1', 'auto');
            ga('send', 'pageview');
        </script-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <style type="text/css">
        body {
/*            background-image: url(assets/images/login.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
 */
            width: 100%;
            height: auto;
            overflow: hidden;
            background-image: url(http://localhost/CampBot/web/assets/images/loginAreaGr.jpg);
            background-repeat: repeat-x;
            overflow: hidden;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
    <body>


        <div class="wrapper-page">

            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-right">
                        <p class="logo"><i class="md md-equalizer"></i> <span>Total Campus Solution</span> </p>
                    </div>
                </div>

                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <div class="text-center">
                <p href="index.html" class="logo-lg"><i class="md md-equalizer"></i> <span>Login</span> </p>
            </div>

            <form class="form-horizontal m-t-20" action="index.html">

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Username">
                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password">
                        <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30">
                    <div class="col-sm-7">
                        <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your
                            password?</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="pages-register.html" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>
<div class="chat_box" id="chat">
          <!-- CHAT -->
                                <div class="card-box">
  <div class="chatheader" onclick='showhidechat()'>CampBot
  </div>

                                    <div class="chat-conversation">
                                        <ul class="conversation-list nicescroll">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Smith</i>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-sm-9 chat-inputbar">
                                                <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                            </div>
                                            <div class="col-sm-3 chat-send">
                                                <button type="submit" class="btn btn-md btn-primary btn-block waves-effect waves-light">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
                       <!-- end col--> 
</div>
          <!-- CHAT ->
                            <div class="col-lg-4">
                                <div class="card-box">
                                    <h4 class="m-t-0 m-b-20 header-title"><b>Chat</b></h4>

                                    <div class="chat-conversation">
                                        <ul class="conversation-list nicescroll">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:00</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Hello!
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="Female">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Smith</i>
                                                        <p>
                                                            Hi, How are you? What about our next meeting?
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/avatar-1.jpg" alt="male">
                                                    <i>10:01</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>John Deo</i>
                                                        <p>
                                                            Yeah everything is fine
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="clearfix odd">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                    <i>10:02</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Smith</i>
                                                        <p>
                                                            Wow that's great
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-sm-9 chat-inputbar">
                                                <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                            </div>
                                            <div class="col-sm-3 chat-send">
                                                <button type="submit" class="btn btn-md btn-primary btn-block waves-effect waves-light">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> 
                        <!-- end col--> 

    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
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

        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>