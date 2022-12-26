<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Inserindo dados no banco de dados com MySQL e PDO</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo executa uma das operações fundamentais em bancos de dados: <strong>criação/inserção</strong>.</p>

                <p>A linha 16 deste exercício possui dois parâmetros no lugar dos valores das colunas <strong>login</strong> e <strong>passwd</strong> que são, primeiro, atribuídos a variáveis, e posteriormente, trocados por seus respectivos valores através do método <code>bindParam()</code>.</p>

                <p><img src="../assets/images/ex031.png" alt="Operação de inserção de dados"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new PDO('mysql:host=localhost;dbname=dbphp7;', 'root', '');
                    $stmt = $conn->prepare('INSERT INTO users (login, passwd) VALUES (:LOGIN, :PASSWD)');

                    $login = 'Jose';
                    $passwd = '123456';

                    $stmt->bindParam(':LOGIN', $login);
                    $stmt->bindParam(':PASSWD', $passwd);
                    $stmt->execute();
                    echo '<p>Dados inseridos!</p>';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>