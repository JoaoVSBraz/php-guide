<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Delete</h1>
        <section>
            <div class="content">
                <p>Este exercício cria o método <code>Delete()</code> na classer <code>User</code> a fim de deletar um registro de usuário no banco de dados.</p>

                <p><img src="../assets/images/ex040.png" alt="Imagem com o código do método delete da classe User"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $user = new User();
                    $user->loadById(11);
                    $user->delete();
                    echo $user;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>