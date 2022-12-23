<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Conectando ao banco de dados com MySQLi</h1>
        <section>
            <div class="content">
                <p>Este exercício realiza a conexão com o banco de dados através do MySQLi e executa duas operações: <strong>insert</strong> e <strong>select</strong>.</p>

                <p>O primeiro passo consiste na configuração da conexão com o banco de dados através da instanciação da classe <code>mysqli</code>. A classe instanciada recebe <strong>quatro</strong> parâmetros: <strong>hostname</strong>, <strong>username</strong>, <strong>password</strong> e <strong>database</strong>.</p>

                <p>Tendo a conexão aberta, o primeiro exercício, que encontra-se comentado, utiliza a variável de conexão <code>$conn</code> para preparar uma consulta SQL através do método <code>prepare()</code>. O método <code>bind_param()</code>, utilizado logo em seguida, serve para evitar que códigos maliciosos sejam executados durante o processo. Por fim, tendo os parâmetros configurados, o método <code>execute()</code> é invocado a fim de executar a consulta SQL preparada.</p>

                <p>A segunda parte deste exercício, diferentemente da anterior, executa a consulta de forma direta sem o uso do método <code>prepare()</code>. O resultado da consulta é trazido no formato de um <strong>array associativo</strong> através do método <code>fetch_assoc()</code> e posteriormente iterado a fim de trazer todos os resultados na tela.</p>

                <p><img src="../assets/images/ex028.png" alt="Conexões com o banco de dados através do MySQLi"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new mysqli('localhost', 'root', '', 'dbphp7');
                    if($conn->connect_error){
                        echo 'Error: ' . $conn->connect_error;
                    }

                    // $stmt = $conn->prepare("INSERT INTO users (login, passwd) VALUES (?, ?)");
                    // $stmt->bind_param('ss', $login, $passwd);
                    // $login = 'user';
                    // $passwd = 'password';
                    // $stmt->execute();

                    $result = $conn->query("SELECT * FROM users ORDER BY login");
                    $data = array();

                    while($row = $result->fetch_assoc()){
                        array_push($data, $row);
                    }

                    echo json_encode($data);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>