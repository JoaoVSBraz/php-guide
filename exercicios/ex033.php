<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Deletando dados no banco de dados com MySQL e PDO</h1>
        <section>
            <div class="content">
            <p>O exercício abaixo executa uma das operações fundamentais em bancos de dados: <strong>DELETE</strong>.</p>

                <p><img src="../assets/images/ex033.png" alt="Exemplo do comando sql delete"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', '');
                    $stmt = $conn->prepare('DELETE FROM users WHERE user_id = :ID');

                    $id = 7;

                    $stmt->bindParam(':ID', $id);
                    $stmt->execute();
                    echo 'Dado deletado!';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>