<?php 
include_once('./dao/listausuarios.php');
$conexao = new ListaUsuarios();
$cardapio = $conexao->listarCardapio();
?>

<div style="margin: auto;">
        <h1 class="text-center text-danger h1">Nossos restaurantes</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <?php if ($cardapio): ?>
                    <?php foreach ($cardapio as $comida): ?>
                        <div class="card col-4 p-0 m-2 h-100">
                            <img src="<?= $comida["url"]?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $comida['nome']; ?></h5>
                                <p class="card-text"><?php echo $comida['ingredientes']; ?></p>
                                <a href="#" class="btn btn-primary">Descubra Mais</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h4 class="text-center">Não há restaurantes cadastrados...</h4>
                <?php endif; ?>
            </div>
        </div>
</div>