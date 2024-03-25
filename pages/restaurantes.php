<?php 
include_once('./dao/listausuarios.php');
$conexao = new ListaUsuarios();
$listaRestaurantes = $conexao->listarRestaurantes();
?>

<div style="margin: auto;">
        <h1 class="text-center text-danger h1">Nossos restaurantes</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <?php if ($listaRestaurantes): ?>
                    <?php foreach ($listaRestaurantes as $restaurante): ?>
                        <div class="card col-4 p-0 m-2 h-100">
                            <img src="<?= $restaurante["url"]?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $restaurante['nome']; ?></h5>
                                <p class="card-text"><?php echo $restaurante['descricao']; ?></p>
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