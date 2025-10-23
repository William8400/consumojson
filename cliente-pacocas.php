<?php

$url = "http://localhost/consumojson/api-pacocas.php?pacocas=pacocadepudim";

$resposta = file_get_contents($url);

echo $resposta;

$paçocas = json_decode($resposta, true);





?>