<?php

$url = "api-cafe01.json?nome=paçoca=pudim";

$resposta = file_get_contents($url);

$paçocas = json_decode($resposta, true);

$nome = $_GET['nome'];

switch($pacoca_especifica){

    case "GET":
        $paçoca_pudim = $paçocas['paçocas']['paçoca de pudim'];
        echo json_decode($paçocas);
        break;

    default:
        echo json_encode($paçocas);
        break;
}



