<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Data Access Object</h1>
        <section>
            <div class="content">
                <p><strong>Data Access Object (DAO)</strong> é um <strong>padrão de projeto</strong> que abstrai e encapsula os mecanismos de acesso a dados da origem dos dados, isto é, ele realiza a divisão de responsabilidades uma vez que a camada de negócio não precisa conhecer detalhes da fonte dos dados.</p>

                <p>Ao invés da aplicação acessar diretamente o banco de dados, ela acessa as classes DAO, que por sua vez, realizam a comunicação com o banco de dados.</p>

                <p>O exercício abaixo instancia a classe <code>Sql</code> e usa o método <code>select()</code> para buscar todos os usuários da tabala users.</p>

                <p>É importante ressaltar que as classes e métodos do padrão de projeto DAO estarão no path <code>./exercicios/classes/dao</code>.</p>

                <p><img src="../assets/images/Sql.png" alt="Detalhes de implementação da classe Sql do padrão de projeto DAO"></p>
                <p><img src="../assets/images/ex035.png" alt="Exemplo de uso da classe Sql do padrão de projeto DAO"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $sql = new Sql();

                    $users = $sql->select('SELECT * FROM users');

                    echo json_encode($users);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>