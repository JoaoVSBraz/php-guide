<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Conectando ao banco de dados com SQLServer e PDO</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo cria uma conexão com o banco de dados através do <strong>SQLServer</strong> e <strong>PDO</strong> e executa uma consulta SQL para buscar os usuários cadastrados.</p>

                <p>Basicamente a única diferença deste exercício para o anterior consiste em alguns parâmetros diferentes na string de conexão com o banco de dados e os drivers do PDO para SQL Server.</p>

                <p><img src="../assets/images/ex030.png" alt="Exemplo de conexão com o banco de dados usando SQLServer e PDO"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new PDO('sqlsrv:Database=teste;server=localhost\SQLEXPRESS2;ConnectionPooling=0', 'sa', '@Abc123');
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