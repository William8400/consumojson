<?php

$url = "http://localhost/consumojson/api.php?paes=doce";

$resposta = file_get_contents($url);

$pães = json_decode($resposta, true);


echo "<p><b>Nome do pão:</b> ".$pães['nome']."</p>";

echo "<p><b>Tipo:</b> ".$pães['Tipo']."</p>";

echo "<p><b>Origem:</b> ".$pães['Origem']."</p>";

echo "<p><b>Nutrientes:</b> ".$pães['Nutrientes']."</p>";




?>