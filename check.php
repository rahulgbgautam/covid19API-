<?php

$data = file_get_contents('https://api.rootnet.in/covid19-in/stats/latest');

$coronadata = json_decode($data,true);

echo "<pre>";

print_r($coronadata);


?>