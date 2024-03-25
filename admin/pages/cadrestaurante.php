<?php 
include_once('.././dao/listausuarios.php');
$conexao = new ListaUsuarios();
$listaRestaurantes = $conexao->listarRestaurantes();
?>

<div class="text-center">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <h1>Cadastro de Restaurantes</h1>
    <div class="text-dark bg-white p-3 mb-4 rounded" style="width: 70%; margin: auto;">
        <div class="scrollable-table" style="max-height: 400px; overflow-y: auto;">
            <table id="tableRestaurante" class="table table-striped table-success" style="width:100%">
                <?php if ($listaRestaurantes): ?>
                    <caption>Restaurantes do DelíciasExpress</caption>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Restaurante</th>
                            <th>Descrição do Restaurante</th>
                            <th>Categoria</th>
                            <th>URL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaRestaurantes as $restaurante): ?>
                            <tr>
                                <td><?php echo $restaurante['id']; ?></td>
                                <td><?php echo $restaurante['nome']; ?></td>
                                <td><?php echo $restaurante['descricao']; ?></td>
                                <td><?php echo $restaurante['categoria']; ?></td>
                                <td><?php echo $restaurante['url']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php else: ?>
                    <h4>Não há restaurantes cadastrados...</h4>
                <?php endif; ?>
            </table>
        </div>
    </div>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Cadastrar Novo Restaurante</button>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro de Restaurante</h1>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="cadastroForm" action="./controller/inserirRestaurante.php" method="POST" enctype="multipart/form-data" name="arquivo">
                    <div class="modal-body">
                        <div class="form-group mb-4 text-start text-indent-2">
                            <label for="nomeRestaurante">Nome: </label>
                            <input type="text" class="form-control" id="nomeRestaurante" name="nomeRestaurante" required>
                        </div>
                        <div class="form-group mb-4 text-start text-indent-2">
                            <label for="descricaoRestaurante">Descrição: </label>
                            <input type="text" class="form-control" id="descricaoRestaurante" name="descricaoRestaurante" required>
                        </div>
                        <div class="form-group mb-4 text-start text-indent-2">
                            <label for="categoriaRestaurante">Categoria: </label>
                            <select class="form-select" name="categoriaRestaurante" aria-label="Default select example">
                                <option selected>Selecione a categoria</option>
                                <option value="Salgados">Salgada</option>
                                <option value="Gordurosa">Gordurosa</option>
                                <option value="Doce">Doce</option>
                            </select>
                        </div>
                        <div class="form-group mb-2 text-start text-indent-2">
                            <label for="imagemRestaurante">Imagem: </label>
                            <input type="file" class="form-control" id="imagemRestaurante" name="imagemRestaurante" accept="image/*" required>
                        </div>   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 p-0 m-1" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
    <div class="toast-body">
      Restaurante cadastrado com sucesso...
    </div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
<script>
    $(document).ready(function() {
        $('#tableRestaurante').DataTable();
    });
</script>

<?php
    if (isset($_GET['success']) && $_GET['success'] === 'true') {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function () {
                    const toast = new bootstrap.Toast(document.querySelector(".toast"));
                    toast.show();
                });
            </script>';
    }
?>

