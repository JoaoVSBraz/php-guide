<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Segurança - Command Injection</h1>
        <section>
            <div class="content">
                <p>Problemas de segurança podem surgir durante a execução de funções que executam comandos diretamente no sistema operacional. É o caso das funções <code>system()</code> e <code>exec()</code>, por exemplo.</p>

                <p>A melhor forma de evitar que códigos maliciosos não possam ser executados em funções com acesso ao sistema operacional é escapando o comando através das funções <code>escapeshellarg()</code> e <code>escapeshellcmd()</code>.</p>

                <p><img src="../assets/images/ex056.png" alt="Exemplo de uso da função system recebendo um input do usuário através de um formulário"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    if($_SERVER["REQUEST_METHOD"] === 'POST'){
                        $cmd = escapeshellarg($_POST["cmd"]);

                        echo("<pre>");
                        $comando = system($cmd, $retorno);
                        echo("<pre>");
                    }
                ?>
                <form method="post">
                    <label for="cmd">Código</label>
                    <input type="text" name="cmd" id="cmd">
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>