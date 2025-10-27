<?php

/* criando uma lista de array com os 4 pokemons */
$pokemons = ["pikachu", "bulbasaur", "charmander", "squirtle"];

/* Depois faço um looping para a variável passar por cada pokémon e chamar um por um  */
foreach ($pokemons as $pokemon) {

    // depois eu monto uma url da api pokeAPI guardando uma variável nela contendo os 4 pokémons ao invéz de 1 só
    $url = "https://pokeapi.co/api/v2/pokemon/$pokemon";
    
    /* aqui eu fiz a requisição HTTP que pega os dados do json da url  */
    
    $resposta = file_get_contents($url);    
    
    /* Aqui eu converti o json em um array associativo */
    $dados = json_decode($resposta, true);
    
    /* Depois peguei as informações conforme o exercício pediu, esse ucfirts de4ixa a primeira letra em maiúscula */
    $nome = ucfirst($dados['name']);
    $tipo = ucfirst($dados['types'][0]['type']['name']); // Aqui eu peguei o tipo principal dele 
    $imagem = $dados['sprites']['front_default']; // E esse pega a Url da imagem 

    /* Depois só chamei tudo com echo */
    echo "<h2><b>Nome: </b>$nome</h2>";
    echo "<p><b>Tipo: </b>$tipo</p>";
    echo "<img src='$imagem' alt='$nome'>";
    echo "<hr>";
}



?>
