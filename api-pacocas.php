<?php

header("Content-type: application/json; charset=UTF-8 ");
header("Access-Control-Allow-Origin: *");

$pacocas = json_decode(file_get_contents("pacoca.json"), true);

$pacoca_especifica = $_GET['pacocas'];


switch($pacoca_especifica){

    case "pacocadepudim":
        $pacoca_pudim = $pacocas['paçocas']['paçoca de pudim'];
        echo json_encode($pacoca_pudim);
        break;

    case "pacocadeovo":
        $pacoca_de_ovo = $pacocas['paçocas']['paçoca de ovo'];
        echo json_encode($pacoca_de_ovo);
        break;
    
    default:
        echo json_encode($pacocas);
        break;
}


