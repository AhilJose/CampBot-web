<?php
define('HOST','mysql.hostinger.in');
define('USER','u108130156_maste');
define('PASS','master009');
define('DB','u108130156_bot');
 
$conn = mysqli_connect(HOST,USER,PASS,DB);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = "select * from tbl_users where username='$username' and password='$password'";
 
	$res = mysqli_query($conn,$sql);
	$result = array();
	while($row = mysqli_fetch_array($res)){
		array_push($result,array('name'=>$row['name'],'gender'=>$row['gender']));
	}
}

echo json_encode(array("about"=>$result));
mysqli_close($conn);
 
?>