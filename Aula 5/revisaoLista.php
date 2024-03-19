<?php
//Lista é do tipo complexo
$lista = ["Beatriz", 0,0,0.5,false];
//o echo só imprime tipos primitivos
echo $lista[0];
//imprime a posição 0 da lista
print_r($lista);
//imprime a lista toda

array_push($lista,"martelo");
//adciona a palavra martelo na lista
array_pop($lista);
 //vai apagar o último elemento da lista (nesse caso, o martelo)
 array_splice($lista,0,1,"marmita");

?>