<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Conectando ao banco de dados com MySQL e PDO</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo cria uma conexão com o banco de dados através do <strong>MySQL</strong> e <strong>PDO</strong> e executa uma consulta SQL para buscar os usuários cadastrados.</p>

                <p><strong>PHP Data Object</strong> (<strong>PDO</strong>) consiste numa camada de abstração de acesso à dados, o que significa que, independente do banco que dados utilizado, as funções para emitir consultas e buscar dados continuam as mesmas.</p>

                <p>A string de conexão é passada durante a instanciação da classe <strong>PDO</strong> a qual recebe <strong>três</strong> parâmetros em seu método construtor: <code>$dsn</code>, <code>$user</code> e <code>$pass</code>. O parâmetro <code>$dsn</code> trata-se do <strong>database source</strong>, isto é, tipo, nome e local do banco de dados. Por fim, os parâmetros <code>$user</code> e <code>$pass</code> correspondem ao usuário e senha respectivamente.

                <p><img src="../assets/images/ex029.png" alt="Exemplo de conexão com o banco de dados usando MySQL e PDo"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new PDO('mysql:dbname=dbphp7;host=localhost;', 'root', '');
                    $stmt = $conn->prepare('SELECT * FROM users ORDER BY user_id');
                    $stmt->execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($results as $row) {
                        foreach ($row as $key => $value) {
                            echo "<p><strong>$key: </strong> $value</p>";
                        }
                    }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>