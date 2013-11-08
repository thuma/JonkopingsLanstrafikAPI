<?php
header('Content-type: application/json; charset=utf-8');

// Start GET
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Get intertown busses:
curl_setopt($ch, CURLOPT_URL, 'http://trafikinfo.jlt.se/rpc/hallplats.php?lineType=2&stopAreaId='.$_GET['id']);
$buss = json_decode(curl_exec($ch));

// Get town busses:
curl_setopt($ch, CURLOPT_URL, 'http://trafikinfo.jlt.se/rpc/hallplats.php?lineType=1&stopAreaId='.$_GET['id']);
$sbuss = json_decode(curl_exec($ch));

// Merge lists:
$buss->turer = array_merge($buss->turer,$sbuss->turer);
curl_close($ch);

print json_encode($buss);
?>

