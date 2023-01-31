<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Insert</h1>
        <section>
            <div class="content">
                <p>Este exercício consiste na criação de uma <strong>Stored Procedure</strong> e do método <code>insert()</code> na classe <code>User</code> a fim de <strong>inserir</strong> um usuário no banco de dados. Store Procedure significa <strong>Procedimento Armazenado</strong> e define um conjunto de comandos SQL executados de uma só vez. Funciona exatamente como uma função só que no contexto de Banco de Dados.</p>

                <p>A procedure criada foi a <code>sp_user_insert</code>. Para executá-la, no contexto do MySQL,utiliza-se o comando <code>CALL</code> seguido do nome da procedure.</p>

                <p><img src="../assets/images/sp_user_insert.png" alt="Código referente a stored procedure que insere um usuário no banco de dados"></p>

                <p><img src="../assets/images/ex038.png" alt="Código da função insert que executa a stored procedure"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $aluno = new User('Sam', 'Winchester');
                    $aluno->insert();
                    echo $aluno;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>