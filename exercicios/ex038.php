<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>DAO - Insert</h1>
        <section>
            <div class="content">
                <p></p>

                <p><img src="" alt=""></p>
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