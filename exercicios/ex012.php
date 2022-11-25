<?php require_once('../partials/header.php') ?>
    <main>
        <h1></h1>
        <section>
            <div class="content">
                <p><code>$_SESSION</code> é uma variável superglobal que armazena um array associativo cotendo informações de sessão. Para começar uma sessão é necessário chamar a função <code>session_start()</code>.</p>

                <p>O exercício abaixo cria uma sessão e armazena algumas informações na variável superglobal <code>$_SESSION</code>.</p>

                <p>A função <code>session_status()</code> retorna um número inteiro que representa o <strong>status</strong> atual da seção. O trecho de código switch case exemplifica os três status possíveis.</p>

                <p>A função <code>session_id()</code> retorna o <strong>id</strong> da sessão atual do usuário.</p>

                <p>A função <code>session_unset()</code> é utilizada para <strong>limpar</strong> os dados de seção do usuário. Já a função <code>session_destroy()</code>, como o próprio nome indica, <strong>destrói</strong> a seção, isto é, ao invés de limpar as informações de sessão elas são totalmente excluídas.</p>

                <p><img src="../assets/images/ex012.png" alt="Exemplos sobre o uso de sessões"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    session_start();
                    $_SESSION['username'] = 'João';
                    $_SESSION['passwd'] = 'admin';
                    var_dump($_SESSION);

                    echo '<p><strong>Session id:</strong> ' . session_id() . '</p>';
                    
                    switch (session_status()) {
                        case PHP_SESSION_DISABLED:
                            echo '<p><strong>Session status:</strong> Sessions are disabled</p>';
                            break;
                        
                        case PHP_SESSION_NONE:
                            echo '<p><strong>Session status:</strong> Sessions are enabled, but none exists</p>';
                            break;

                        case PHP_SESSION_ACTIVE:
                            echo '<p><strong>Session status:</strong> Sessions are enabled, and one exists</p>';
                            break;
                            
                    }

                    //session_unset();

                    //session_destroy();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>