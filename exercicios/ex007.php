<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Estruturas de controle</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo demonstra o uso básico de duas <strong>estruturas de controle</strong>: <strong>if/else</strong> e <strong>swtich case</strong>.</p>

                <p><img src="../assets/images/ex007.png" alt="Exemplos do uso de if/else e switch case"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                $test = 1;
                echo '<h3>if/else</h3>';
                if($test){
                    echo '<p>Se $test existir, isto é renderizado</p>';
                }else{
                    echo '<p>Se não, isto é renderizado.</p>';
                }
                echo '<br/>';
                echo '<h3>switch case</h3>';
                switch($test){
                    case '1':
                        echo '<p>A variável é 1</p>';
                        break;
                    case '2':
                        echo '<p>A variável é 2</p>';
                        break;
                    default:
                        echo '<p>Nada</p>';
                }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>