<?php
include_once("../../dao/manipulacao.php");
include_once("../../model/restaurante.php");

function converte($String){
    return iconv("UTF-8", "ISO8859-1", $String);
}

$restaurante = new Restaurante();
$inserir = new ManipulaDados();

$restaurante->setNome($_POST['nomeRestaurante']);
$restaurante->setDescricao($_POST['descricaoRestaurante']);
$restaurante->setCategoria($_POST['categoriaRestaurante']);

$nomearquivo = $_FILES['imagemRestaurante']['name'];
$restaurante->setUrl("img/restaurantes/".$nomearquivo);

$nomearquivosalvo = converte($_FILES['imagemRestaurante']['name']);
$urllocalsalvo = "../../img/restaurantes/".$nomearquivosalvo;
move_uploaded_file($_FILES['imagemRestaurante']['tmp_name'], $urllocalsalvo);

$inserir->setTable('tb_restaurantes');
$inserir->setFields("nome, descricao, categoria, url");
$inserir->setDados("'{$restaurante->getNome()}', '{$restaurante->getDescricao()}', '{$restaurante->getCategoria()}', '{$restaurante->getUrl()}'");

if ($inserir->insert()) {
    header('Location: ../principal.php?page=cadrestaurante&success=true');
    exit;
} else {
    header('Location: ../principal.php?page=cadrestaurante&success=false');
    exit;
}
?>
