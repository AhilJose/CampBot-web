<?php
define('HOST','mysql.hostinger.in');
define('USER','u108130156_maste');
define('PASS','master009');
define('DB','u108130156_bot');
 
$conn = mysqli_connect(HOST,USER,PASS,DB);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
          	$array = array();
            $add = $_POST['add_no'];
            $query = "SELECT name,branch,gender,add_no FROM tbl_users WHERE add_no = '13rr119'";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            while ($data = mysqli_fetch_assoc($result)) {
				array_push($array,
					array('name'=>$data['name'],
                        'gender'=>$data['gender'],
                        'add'=>$data['add_no'],
						'branch'=>$data['branch']
						));
            }
}
		header('Content-Type:Application/json; charset=utf-8');
		echo json_encode(array("scanner"=>$array));
?>