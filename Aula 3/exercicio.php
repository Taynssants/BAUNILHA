<?php
//um array de nomes que tenha 6 nomes
//no meio do array, quero que coloquem 2 nomes
//remova o segundo nome
//substitua o terceiro nome por pudim

$txtNomes=["Yeonjun","Soobin", "Beomgyu", "Tahyun", "HueningKai", "Tayná"];
array_splice($txtNomes,2,0, ["Gaby", "Pedro"]);
array_splice($txtNomes,1,1,);
array_splice($txtNomes,2,1,"Pudim");


print_r($txtNomes);
?>