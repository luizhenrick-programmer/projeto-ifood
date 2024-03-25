<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="./_css/main.css">
    <link rel="shortcut icon" href="img/comida.png" type="image/x-icon">
    <title>DelíciasExpress</title>
</head>
<body class="bg-dark text-light">
    <?php include("includes/cabecalho.php"); ?>
    <?php include("includes/menu.php"); ?>
    <main>
        <?php
            include_once("./controller/verurl.php");
            $verUrl = new VerUrl();
            $verUrl->trocarUrl(@$_GET["page"]);
        ?>
    </main>
    <?php include("includes/rodape.php"); ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>