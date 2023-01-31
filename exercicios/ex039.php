<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Update</h1>
        <section>
            <div class="content">
                <p>Este exercício consiste na criação do método <code>update()</code> na classe <code>User</code> a fim de atualizar o registro de um usuário existente no banco de dados.</p>

                <p><img src="../assets/images/ex039.png" alt="Imagem com o código do método update"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $user = new User();
                    $user->loadById(10);
                    $user->update('Anjo', 'Castiel');
                    echo $user;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>