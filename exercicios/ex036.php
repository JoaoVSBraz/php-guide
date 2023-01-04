<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Select</h1>
        <section>
            <div class="content">
                <p>Neste exercício, uma classe <code>User</code> foi criada a fim de retornar instâncias de objeto com seus atributos populados pelas informações resgatadas do banco de dados.</p>
            
                <p></p>

                <p><img src="../assets/images/User.png" alt="Detalhes da classe User que implemena o padrão de projeto DAO"></p>
                <p><img src="../assets/images/ex036.png" alt="Trecho de código do exercício que instancia a classe User e exibe seus atributos na tela"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $root = new User();
                    $root->loadById(1);
                    echo($root);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>