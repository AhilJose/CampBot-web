<?php

function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$html1 = file_get_contents_curl("http://www.vjcet.ac.in/Home.aspx");
$html = mb_convert_encoding($html1, "HTML-ENTITIES", "UTF-8");
$j = 0;
//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('tr');

?>
<?php
define('HOST','localhost');
define('USER','admin');
define('PASS','admin');
define('DB','campbot');
/*define('HOST','mysql.hostinger.in');
define('USER','u108130156_maste');
define('PASS','master009');
define('DB','u108130156_bot');*/
	$connection = mysqli_connect(HOST,USER,PASS,DB);
//	$sql = "DELETE FROM tbl_note WHERE idn > 9";
		$sql = "DELETE FROM tbl_note";
	mysqli_query($connection, $sql);

$row = "";
$c=0;
$k=0;

foreach ($nodes as $i)
{
	$metas = $doc->getElementsByTagName('a');
	$title = $nodes->item($j++)->nodeValue;
	$title = trim($title);
		$title = mb_convert_encoding($title, "HTML-ENTITIES", "UTF-8");
		$k++;
		$query = "INSERT INTO tbl_note VALUES('$k','$title')";
		mysqli_query($connection,$query);
}
?>
<?php
	$k=0;
	$array = array();
	$query = "Select * from tbl_note";

	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
		array_push($array,
			array('idn'=>$k++,
				'notify'=>$row['notify']
				));
	}
	header('Content-Type:Application/json; charset=utf-8');
	echo json_encode(array("notification"=>$array));

?>