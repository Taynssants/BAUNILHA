<?php

$listaAlunos=['Yeonjun', 'Soobin', 'HueningKai', 'Beomgyu'];
$listaNotas[8,9,7,6];

array_push($listaAlunos, 'Taehyun', 'Jungkook', 'Jin');
array_push($listaNotas, 5, 6, 8);
$aluno= array_search(7, $listaAlunos);
$nota= array_search(7, $listaNotas);
if ($nota > 5){
    echo 'variável é uma gaveta que, além de você poder colocar nomes para identificá-la, você pode pegar o conteúdo dentro dela, usar e guardar de volta.
    Dicas para um bom nome de variável:
    sempre dar um nome que seja o mais próximo possível de sua função,
    nunca dar nome que comece com número ou dígito especial,
    caso seja um nome composto, utilizar underline (_) ou letra maiúscula para separá-los (ter melhor compreensão deles).';
}

$posicaoAluno= array_search(3, $listaAlunos);
$posicaoNota= array_search(3, $listaNotas);
echo 'O aluno' $posicaoAluno 'tem a nota' $posicaoNota;
?>