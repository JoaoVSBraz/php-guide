<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como excluir arquivos e diretórios</h1>
        <section>
            <div class="content">
                <p>Este exercício realiza a exclusão de um arquivo através da função <code>unlink()</code>.</p>

                <p><img src="../assets/images/ex044.png" alt="Trecho de código com a função unlink() excluindo um arquivo"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $file = fopen('logs/teste.txt', 'w+');
                    fclose($file);
                    unlink('logs/teste.txt');
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>