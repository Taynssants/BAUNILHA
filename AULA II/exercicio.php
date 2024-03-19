<?php
//include_once copia e cola o codigo exato do arquivo solicitado
include_once('partials/header.php');
?>

<?php
include_once('components/navbar.php');
?>
$imagens=[];
$descricoes=[];
$textos=[];
$preco=[];

<div class="card" style="width: 18rem;">
  <img src=<?=$imagens[0] ?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$descricoes[0] ?></h5>
    <p class="card-text"><?=$textos[0] ?></p>
    <a href="#" class="btn btn-primary"><?=$precos?></a>
  </div>
</div>

<?php
$nomes=['gabriel','jerson','joao','helder'];
for($convidado=0;$convidado<4;$convidado++){
    echo "Voce esta convidado para minha festa
    $nomes[$convidado]";
}

for($contador=8;$contador>=0;$contador--){
    echo $contador;

}
?>
 
<?php
include_once('partials/footer.php');
?>