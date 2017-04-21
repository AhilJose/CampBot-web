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
$html1 = file_get_contents_curl("http://www.knowafest.com/college-fests/state/Kerala#");
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
//define('DB_CHARSET', 'utf8');

	$connection = mysqli_connect(HOST,USER,PASS,DB);
	$sql = "DELETE FROM tbl_note";
	mysqli_query($connection, $sql);
$row = "";
$k=0;
$c=0;
//echo "<table>";
//echo "<tbody>";
//echo "<tr>";
//echo '</tr>';
//echo '</thead>';


foreach ($nodes as $i)
{
	$metas = $doc->getElementsByTagName('a');
	$title = $nodes->item($j++)->nodeValue;
	$title = mb_convert_encoding($title, "HTML-ENTITIES", "UTF-8");
	$title = trim($title);
//	echo '<td>'."$title".'</td>';
//	echo $title.'</br>';
	$k++;
		$query = "INSERT INTO tbl_note(idn,notify)VALUES('$k','$title')";
		mysqli_query($connection,$query);
}

	$query = "Select * from tbl_note";

	$result = mysqli_query($connection,$query);

	while ($row = mysqli_fetch_assoc($result)) {
		$array[] = $row;
	}
//	header('Content-Type:Application/json');
//	echo json_encode(array("notification"=>$array));

//echo "<tbody>";
//echo "<table";
?>