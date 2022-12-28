<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Alterando dados no banco de dados com MySQL e PDO</h1>
        <section>
            <div class="content">
            <p>O exercício abaixo executa uma das operações fundamentais em bancos de dados: <strong>UPDATE</strong>.</p>

                <p><img src="../assets/images/ex032.png" alt="Exemplo do comando sql UPDATE"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $conn = new PDO('mysql:host=localhost;dbname=dbphp7;', 'root', '');
                    $stmt = $conn->prepare('UPDATE users SET login = :LOGIN, passwd = :PASSWD WHERE user_id = :ID');

                    $login = 'Joao';
                    $passwd = 'pass';
                    $id = 6;

                    $stmt->bindParam(':LOGIN', $login);
                    $stmt->bindParam(':PASSWD', $passwd);
                    $stmt->bindParam(':ID', $id);

                    $stmt->execute();
                    echo 'Alteração realizada!';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>