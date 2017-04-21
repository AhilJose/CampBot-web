<?php
  session_start();
  if (isset($_SESSION['username']))
  {
    header('Location: home.php');
  }
  else {
        $msg=" ";
//    include 'Permission.php';
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Campus Assistance</title>

        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--link href="http://localhost/CampBot-web/web/assets/css/core.css" rel="stylesheet" type="text/css"-->
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">
        <link href="assets/css/chat_custom.css" rel="stylesheet" type="text/css">
        <script src="assets/js/chat_custom.js"></script>

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <style type="text/css">
        body {
            width: 100%;
            height: auto;
            overflow: hidden;
            background-image: url(assets/images/loginAreaGr.jpg);
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
                        <p class="logo"><i class="md md-equalizer"></i> <span>Campus Assistance</span> </p>
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
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (!empty($_POST['Username']))
        {      
            $con = mysqli_connect("localhost","admin","admin","campbot") or die('Unable to connect to database');
            $username = $_POST['Username'];
            $password = $_POST['Password'];
            $query = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            while ($data = mysqli_fetch_assoc($result)) {
                    $_SESSION['name'] = $data['name'];
                    $_SESSION['gender'] = $data['gender'];
                    $_SESSION['addmission_no'] = $data['add_no'];
                    $_SESSION['register_no'] = $data['regno'];
            }

            if ($count == 1)
            {
//                echo $username;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('Location: home.php');
            }
            else
            {
                $msg = "Incorrect credentials";            
                header('Location: index.php');
            }
        }
    } 
?>
            <form class="form-horizontal m-t-20" method="POST" action="">

                <div class="form-group">
                    <center><h4 style="color: Red"><?php if($msg){ echo $msg;} ?></h4></center>
                    <div class="col-xs-12">
                        <input class="form-control" name="Username" type="text" required="" placeholder="Username">
                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" name="Password" type="password" required="" placeholder="Password">
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
                        <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- CHAT -->
<div class="chat_box" id="chat">
                                <div class="card-box">
  <div class="chatheader" onclick='showhidechat()'>CampBot
  </div>

                                    <div class="chat-conversation">
                                        <ul class="conversation-list nicescroll">
                                            <li class="clearfix">
                                                <div class="chat-avatar">
                                                    <img src="assets/images/users/avatar-0.png" alt="Female">
                                                    <i>Now</i>
                                                </div>
                                                <div class="conversation-text">
                                                    <div class="ctext-wrap">
                                                        <i>Bot</i>
                                                        <p>What can I do for you?</br>Install Android App for more Information.</p>
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
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>
        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <!-- Moment  -->
        <script src="assets/plugins/moment/moment.js"></script>

	</body>
</html>