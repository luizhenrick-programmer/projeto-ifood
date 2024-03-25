<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center bg-dark mt-4">
        <ul class="nav nav-pills mb-3" role="tablist">
            <li class="nav-item"><a class="nav-link <?php echo ((!isset($_GET['page']) || empty($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''); ?>" href="?page=home">Home</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'restaurantes') ? 'active' : ''; ?>" href="?page=restaurantes">Restaurantes</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'cardapio') ? 'active' : ''; ?>" href="?page=cardapio">Cardápio</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'contato') ? 'active' : ''; ?>" href="?page=contato">Contato</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == '..') ? 'active' : ''; ?>" href="admin/index.php" target="_blank">Login</a></li>
            <li class="nav-item"><a class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'cadastrar') ? 'active' : ''; ?>" href="?page=cadastrar">Cadastro</a></li>
        </ul>
    </nav>
</div>