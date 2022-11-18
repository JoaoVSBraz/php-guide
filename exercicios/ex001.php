<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Tipos de dados</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo cria algumas variáveis com os principais tipos de dados primitivos do PHP.</p>

                <p><img src="../assets/images/ex001.php.png" alt="Algumas variaveis com os principais tipos do PHP"></p>
            </div>
            <hr>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    
                    $name = 'Joao';
                    $age = 18;
                    $isTrue = false;
                    $salary = 3.700;

                    var_dump($name);
                    echo '<br>';
                    var_dump($age);
                    echo '<br>';
                    var_dump($isTrue);
                    echo '<br>';
                    var_dump($salary);
                    echo '<br>';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>