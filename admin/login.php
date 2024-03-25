<?php
session_start();
include_once("../dao/manipulacao.php");

$nome = $_POST['username'];
$senha = $_POST['password'];
$dadoslogin = new ManipulaDados();
$dadoslogin->setTable("tb_usuarios");
//teste

if($dadoslogin->validarLogin($nome,$senha)!=0){
        setcookie("nome_usuario",$nome);
        setcookie("senha_usuario",$senha);
    $_SESSION["usuario"] = $nome;
    header("location: principal.php");
    

}else{
    header("location: ../index.php?secao=ademiro&erro=1");
}