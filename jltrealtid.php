<?php
header('Content-type: application/json; charset=utf-8');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://trafikinfo.jlt.se/rpc/hallplats.php?lineType=2&stopAreaId='.$_GET['id']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$buss = json_decode(curl_exec($ch));

curl_setopt($ch, CURLOPT_URL, 'http://trafikinfo.jlt.se/rpc/hallplats.php?lineType=1&stopAreaId='.$_GET['id']);
$sbuss = json_decode(curl_exec($ch));

curl_close($ch);
?>

