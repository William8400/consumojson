<?php

$url = "http://localhost/consumojson/api.php?paes=doce";

$resposta = file_get_contents($url);

echo $resposta;

$paes = json_decode($resposta, true);




?>