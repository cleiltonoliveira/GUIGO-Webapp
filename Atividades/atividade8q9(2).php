<?php
$tempo = $_POST['tempo'];
$velocidade = $_POST['velocidade'];
define("KMPL", 12);

function viagem($tempo, $velocidade) {
    $distancia = $tempo * $velocidade;
    $litros = $distancia / KMPL;

    echo "Tempo da viagem: $tempo h<br>";
    echo "Velocidade média da viagem: $velocidade km/h<br>";
    echo "Distância: $distancia km<br>";
    echo "Litros utilizados na viagem: $litros l<br>";
}

viagem($tempo, $velocidade);

?>