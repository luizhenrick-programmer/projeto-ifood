<div class="text-center">
    <div class="container">
    <h1 class="display-4"><?php $username = $_SESSION['usuario']; echo '<h1 class="text-center">Bem vindo, ' .$username.'!</h1>';?></h1>
    <p class="lead text-center">Seja bem-vindo à sua área administrativa.</p>
    </div>
    <?php
        $result = exec('python ./api.py');
        echo $result;
    ?>
    <img class="img-fluid" src="includes/grafico.png" alt="">
</div> 