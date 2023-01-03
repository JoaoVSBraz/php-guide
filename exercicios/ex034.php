<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Usando transações</h1>
        <section>
            <div class="content">
                <p><strong>Transação</strong> é uma forma de executar operações no banco de dados, mas capaz de retornar ao estado anterior caso algum erro ocorra. Uma transação inicia com o método <code>beginTransaction()</code>. Caso o resultado esperado aconteça, executa-se o comando <code>commit()</code>, caso contrário, o método <code>rollback()</code> fica encarregado de cancelar as operações.</p>

                <p>O exercício abaixo executa uma operação de delete no usuário de id 1. Entretanto, logo após a query ser executada, o método <code>rollback()</code> foi invocado fazendo com que a operação fosse cancelada. É importante ressaltar que o método <code>beginTransaction()</code> deve ser invocado antes das operações para que um possível rollback aconteça caso algo dê errado.</p>

                <p><img src="../assets/images/ex034.png" alt="Exemplo do uso de transações e dos métodos rollback e commit"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php
                    $conn = new PDO('mysql:host=localhost;dbname=dbphp7', 'root', '');
                    $conn->beginTransaction();

                    $stmt = $conn->prepare('DELETE FROM users WHERE user_id = :ID');
                    $id = 1;
                    $stmt->bindParam(':ID', $id);
                    $stmt->execute();
                    $conn->rollBack();
                    //$conn->commit();
                    
                    echo 'Delete ok';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>