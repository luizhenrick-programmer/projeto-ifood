<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center bg-dark mt-4">
        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link <?php echo ((!isset($_GET['page']) || empty($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''); ?>" href="?page=home">Home</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'cadrestaurante') ? 'active' : ''; ?>" href="?page=cadrestaurante">Cadastrar Restaurante</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'cadcardapio') ? 'active' : ''; ?>" href="?page=cadcardapio">Cadastrar Cardápio</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'manutrestaurante') ? 'active' : ''; ?>" href="?page=manutrestaurante">Manut. Restaurante</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'manutcardapio') ? 'active' : ''; ?>" href="?page=manutcardapio">Manut. Cardápio</a></li>
        </ul>
    </nav>
</div>