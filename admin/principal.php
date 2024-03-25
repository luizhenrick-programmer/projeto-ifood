<?php
session_start();
$qualquer = $_SESSION['usuario'];
include_once("validarcookies.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="shortcut icon" href="includes/administrador.png" type="image/x-icon">
    <title>DeliciasExpress - Administrador</title>
</head>

<body class="bg-dark text-light">
    
    <?php include("includes/cabecalho.php"); ?>
    <?php include("includes/menu.php"); ?>
    <main>          
        <?php
            include_once("controller/verurl.php");
            $redirecionar = new VerUrl();
            $redirecionar->trocarUrl(@$_GET['page']);
        ?>
    </main>
    <?php include("includes/rodape.php"); ?>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.esm.min.js"></script>
    <script src=".././js/Aula30.js" defer></script>
</body>

</html>