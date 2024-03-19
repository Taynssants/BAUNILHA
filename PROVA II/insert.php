<?php
require_once("conexao.php");



$nome=$_POST['nome_animal'];
$especie=$_POST['especie'];



try{
    $insert= $conexao->prepare("INSERT INTO animal(nome_animal, especie) VALUE (:nome_animal, :especie)");
    $insert->execute
    (
        [
            ":nome_animal"=>$nome,
            ":especie"=>$especie
        ]
    );
    header("location:index.php");
}catch(Exception $erro){
echo $erro;   

}
?>