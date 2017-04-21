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

$html = file_get_contents_curl("http://www.knowafest.com/college-fests/state/Tamil_Nadu");
$j = 0;
//parsing begins here:
$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('td');

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
	$sql = "DELETE FROM tbl_note WHERE idn > 9";
	mysqli_query($connection, $sql);
$row = "";
$k=9;
$c=0;

foreach ($nodes as $i)
{
	$c++;
	if ($c == 1) 
	{
		$title = "On ";
		$row = $row."".$title;
	}
	if ($c == 2) 
	{
		$title = " the";
		$row = $row."".$title;
	}
	if ($c == 3) 
	{
		$title = " is the ";
		$row = $row."".$title;
	}
	if ($c == 4) 
	{
		$title = " of ";
		$row = $row."".$title;
	}
	if ($c == 5) 
	{
		$title = " will be held at ";
		$row = $row."".$title;
	}
	$metas = $doc->getElementsByTagName('td');
	$title = $nodes->item($j++)->nodeValue;
	$title = str_replace(" View More","",$title);
	$row = $row."".$title;
//	echo '<td>'."$title".'</td>';
	if($j%5==0)
	{
		$k++;
		$query = "INSERT INTO tbl_note(notify)VALUES('$row')";
		mysqli_query($connection,$query);
		$row = "";
		$c = 0;
	}
}
?>
<?php
	$query = "Select * from tbl_note";

	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}
	header('Content-Type:Application/json');
	echo json_encode(array("notification"=>$array));

?>