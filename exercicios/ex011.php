<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Constantes</h1>
        <section>
            <div class="content">
                <p><strong>Constantes</strong> em PHP são definidas através da função <code>define()</code>. Ela recebe dois argumentos, o primeiro trata-se do nome da variável enquanto que o segundo trata-se de seu valor.</p>

                <p>Por convensão, constantes em PHP são escritas em letras maiúsculas.</p>

                <p><img src="../assets/images/ex011.png" alt="Exemplo da definição de uma constante"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    define('BANCO_DE_DADOS', [
                        'SERVIDOR' => '127.0.0.1',
                        'USUARIO' => 'admin',
                        'SENHA' => 'admin',
                        'DB' => 'test'
                    ]);

                    foreach (BANCO_DE_DADOS as $key => $value) {
                        echo "<p>$key = $value</p>";
                    }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>