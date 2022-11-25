<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Funções - Passagem de parâmetros por valor e referência</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo demonstra a diferença entre a execução de uma função passando parâmetros por valor e por referência.</p>

                <p>Quando passamos parâmetros por valor, toda a alteração de valores acontece dentro da função. Assim, quando a função <code>changeMoney()</code> termina de ser executada, a variável <code>$salario</code> permanece intacta.</p>

                <p>Já quando falamos da passagem de parâmetros por referência fazemos literalmente uma referência para o endereço de memória da variável. Por isso a alteração de valor permance mesmo após a execução da função.</p>

                <p><img src="../assets/images/ex013.png" alt="Exemplo de função com passagem de parâmetro por valor e referência"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $salario = 3000;

                    function changeMoney($salario){
                        return $salario = $salario + 1000;
                    }

                    echo '<h3>Passagem por valor</h3>';
                    echo '<p><strong>Retorno da função:</strong> ' . changeMoney($salario) . '</p>';
                    echo "<p></strong>Variável salario:</strong> $salario</p>";

                    echo '<hr>';

                    function changeMoney2(&$salario){
                        return $salario = $salario + 2000;
                    }

                    echo '<h3>Passagem por referência</h3>';
                    echo '<p><strong>Retorno da função:</strong> ' . changeMoney2($salario) . '</p>';
                    echo "<p></strong>Variável salario:</strong> $salario</p>";
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>