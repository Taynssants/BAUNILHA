<?php
//Crie uma lista com números, depois peça para um usuário
//uma posição e baseado em if e else imprima a posição
//de 0 a 9
$lista = [0,1,2,3,4,5,6,7,8];
$posicao = 8;
if($posicao = 0){
    echo $lista[0];
}
else if($posicao = 1){
    echo $lista[1];
}
else if($posicao = 2){
    echo $lista[2];
}
else if($posicao = 3){
    echo $lista[3];
}
else if($posicao = 4){
    echo $lista[4];
}
else if($posicao = 5){
    echo $lista[5];
}
else if($posicao = 6){
    echo $lista[6];
}
else if($posicao = 7){
    echo $lista[7];
}
else if($posicao = 8){
    echo $lista[8];
}

//crie uma lista de comidas, crie uma variável "nova_comida"
//adcione essa comida a lista no fim
$listaComida = ["feijoada", "polenta", "macarronada", "churrasco"];
$nova_comida = "Bolo de Morango";
array_push($listaComida, $nova_comida);
?>