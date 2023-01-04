<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - List</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo traz três novas funcionalidades. Vejamos a seguir com mais detalhes.</p>

                <p>O método estático <code>loadList</code> da classe <code>User</code> foi criado para resgatar uma lista de usuários diretamente do banco de dados.</p>

                <p>O método <code>search()</code> da classe <code>User</code> foi criado para buscar um determinado usuário através do login.</p>

                <p>Por fim, o método <code>login()</code> foi criado a fim de resgatar determinado usuário do banco de dados através de seu login e password.</p>

                <p><img src="../assets/images/User-novos-metodos.png" alt="Métodos loadList, search e login da classe User"></p>
                <p><img src="../assets/images/ex037.png" alt="Uso dos novos métodos da classe User"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    echo('<h2>Método loadList</h2>');
                    $userList = User::loadList();
                    echo(json_encode($userList));

                    echo('<hr>');

                    echo('<h2>Método search</h2>');
                    $search = User::search('jo');
                    echo(json_encode($search));

                    echo('<hr>');

                    echo('<h2>Método login</h2>');
                    $root = new User();
                    $root->login('admin', 'root');
                    echo($root);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>