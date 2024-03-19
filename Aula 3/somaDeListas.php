<?php
$numeros=[1,2,3,4,10];
//soma elementos
$somaNumeros=$numeros[0]+$numeros[1]+$numeros[2]+$numeros[3]; 
$somaFacil=array_sum($numeros);
//conta quantos elementos tem numa lista
$contarElementos = count($numeros);
$media = $somaFacil / $contarElementos;
//pesquisa se na lista tem o que eu tô procurando 
//devolve como resposta true or false
//primeiro argumento é o procurado pelo in_array
//segundo argumento é qual a lista onde procurar o valor
$existeLista = in_array(1,$numeros);
//primeiro argumento é o procurado
//segundo argumento é em qual lista vou procurar
$posicaoDoElemento= array_search(10,$numeros);
//remove o último elemento do elemento
array_poppy($numeros);
//adciona o segundo argumento no fim da lista
array_push($numeros,10);
//inverte a ordem da lista
array_reverse($numeros);
//primeiro argumento: qual lista iremos mexer
//segundo argumento: onde iremos começar a mexer(posição) na lista
//terceiro argumento: quantos elementos removeremos no processo
//quarto (em diante): quais elementos
array_splice($numeros, 1, 0, 15, "Beterraba");
//tudo que tem (): função, o que fica dentro do () se chama: argumentos
// o php, em uma conta matemática, força o texto a virar número

print_r($numeros)
?>