<?php
require_once('pdf2text.php');
//for($i=13019911;$i<=13020030;$i++)
//{
//$i = 13019919;
//$i = 13020013;
$i = 13019930;
$result = pdf2text ("assets/pdf/s6/$i.pdf");
$fields = preg_split('/\s+/', $result);
echo "<pre>";
print_r($fields);

echo "<br><h2> Name : ".$fields[23]." ".$fields[24];
echo "<br>Roll no  : ".$fields[29];
echo "<br> Total : ".$fields[145];

echo "<br> Remarks : ".$fields[146];
//}


?>