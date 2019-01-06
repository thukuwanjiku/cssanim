<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.pdfshift.io/v2/convert/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode(array("source" => "http://uzapoint.com/", "landscape" => false, "use_print" => false)),
    CURLOPT_HTTPHEADER => array('Content-Type:application/json'),
    CURLOPT_USERPWD => 'a6592df329be40f4890a25947d677687'
));

$response = curl_exec($curl);
file_put_contents('pdfhsift-documentation.pdf', $response);
?>
<!DOCTYPE html>
<head>
  <title>Mario Kart Animations</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="sky"></div>
  <div class="grass"></div>
  <div class="road">
    <div class="lines"></div>
    <img src="img/mario.png" class="mario">
    <img src="img/mario.png" class="mario1">
    <img src="img/mario.png" class="mario2">
    <img src="img/mario.png" class="mario3">
    <img src="img/luigi.png" class="driver_2">
    <img src="img/mario.png" class="driver_3">
    <img src="img/mario.png" class="driver_5">
    <img src="img/luigi.png" class="driver_4">
    <img src="img/luigi.png" class="driver_7">
    <img src="img/luigi.png" class="driver_6">
    <img src="img/luigi.png" class="driver_8">
  </div>
</body>