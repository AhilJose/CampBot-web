<?php
session_start();
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
            }
            if ($count == 1)
            {
                echo $username;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('Location: http://localhost/CampBot-web/web/home.php');
            }
            else
            {
                header('Location: http://localhost/CampBot-web/web/index.php');   
            }
        }  
        if (!empty($_POST['logout']))
        {
                unset($_SESSION['username']);
                // Delete all session variables
                session_destroy();
                // Jump to login page
                header('Location: http://localhost/CampBot-web/web/index.php');
        }
    }
?>