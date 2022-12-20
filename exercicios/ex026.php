<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Autoload de classes</h1>
        <section>
            <div class="content">
                <p><strong>Autoload</strong> consiste no carregamento automático de arquivos. Neste caso, carregamento automático de classes. Isto acontece através da função <code>spl_autoload_register()</code> que registra uma função a fim de carregar o arquivo da classe. Um ponto importante é que a função registrada como <strong>autoload</strong> será executada automaticamente sempre que uma classe for instanciada.</p>

                <p>Este exercício instancia a classe <code>Animal</code> presente na pasta de classes e imprime na tela o resultado do método <code>falar()</code>.</p>

                <p><img src="../assets/images/autoload.png" alt=""></p>
                <p><img src="../assets/images/ex026.png" alt=""></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    
                    $cachorro = new Animal();
                    echo $cachorro->falar();

                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>