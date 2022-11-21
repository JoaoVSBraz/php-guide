<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Variáveis pré-definidas (globais)</h1>
        <section>
            <div class="content">
                <p>O PHP traz consigo diversas variáveis pré-definidas criadas a fim de agilizar o desenvolvimento de aplicações web. Também são conhecidas como <strong>Arrays superglobais</strong>.</p>

                <p><img src="" alt=""></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $nome = $_GET['a'];
                    $ip = $_SERVER['REMOTE_ADDR'];
    
                    echo $nome;
                    echo '<br>';
                    echo $ip;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>