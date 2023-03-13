<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Usando cookies</h1>
        <section>
            <div class="content">
                <p>Cookies são pequenos arquivos temporários utilizados para armazenar algum tipo de informação na máquina do usuário. São bastante utilizados em e-comerces e mecanismos de busca a fim de capturar os interesses dos usuários.</p>

                <p>Um cookie na linguagem PHP é definido através da função <code>setcookie($name, $value, $expiresDate)</code>.</p>

                <p><img src="/assets/images/ex050.png" alt="Exemplo do uso de cookie através da função setcookie"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    setcookie('meu_cookie', 'teste', time() + 60);
                    echo('Cookie gerado');
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>