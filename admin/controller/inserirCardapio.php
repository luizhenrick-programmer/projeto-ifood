<?php
include_once("../../dao/manipulacao.php");
include_once("../../model/cardapio.php");

function converte($String){
    return iconv("UTF-8", "ISO8859-1", $String);
}

$cardipio = new Cardapio();
$inserir = new ManipulaDados();

$cardipio->setNome($_POST['nomeComida']);
$cardipio->setIngredientes($_POST['ingredientesComida']);
$cardipio->setCategoria($_POST['categoriaRestaurante']);
$cardipio->setRestaurante($_POST['restauranteComida']);

$nomearquivo = $_FILES['imagemComida']['name'];
$cardipio->setUrl("img/restaurantes/".$nomearquivo);

$nomearquivosalvo = converte($_FILES['imagemComida']['name']);
$urllocalsalvo = "../../img/cardapio/".$nomearquivosalvo;
move_uploaded_file($_FILES['imagemComida']['tmp_name'], $urllocalsalvo);

$inserir->setTable('tb_cardapio');
$inserir->setFields("nome, ingredientes, categoria, restaurante, url");
$inserir->setDados("'{$cardipio->getNome()}', '{$cardipio->getIngredientes()}', '{$cardipio->getCategoria()}', '{$cardipio->getRestaurante()}', '{$cardipio->getUrl()}'");

if ($inserir->insert()) {
    header('Location: ../principal.php?page=cadrestaurante&success=true');
    exit;
} else {
    header('Location: ../principal.php?page=cadrestaurante&success=false');
    exit;
}
?>