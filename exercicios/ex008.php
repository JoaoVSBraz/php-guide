<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Estruturas de repetição</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo demonstra o uso das estruturas de repetição <strong>for</strong>, <strong>foreach</strong>, <strong></strong> e <strong>do while</strong>.</p>

                <p>A função <code>count()</code>, utilizada no exemplo for, retorna o número de elementos de uma variável.</p>

                <p>A diferença entre as estruturas de repetição <strong>while</strong> e <strong>do while</strong> é que a estrutura <strong>do while</strong> executa seu bloco de instruções <strong>pelo menos uma vez</strong>. Ambas estruturas são comumente utilizadas em operações de banco de dados.</p>

                <p><img src="../assets/images/ex008.png" alt="Exemplos do uso da estrutura de repetição for e foreach"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                echo '<h3>For</h3>';
                $meses = Array(
                    'Segunda', 'Terça', 'Quarta',
                    'Quinta', 'Sexta', 'Sabado',
                    'Domingo'
                );

                for($i = 0; $i < count($meses); $i++){
                    echo "<p>$meses[$i]</p>";
                }

                echo '<hr>';

                echo '<h3>Foreach</h3>';
                foreach($meses as $mes){
                    echo "<p>$mes</p>";
                }

                echo '<hr>';

                echo '<h3>While</h3>';
                $condicao = true;
                while($condicao){
                    $num = rand(1, 5);
                    if($num === 3){
                        echo '<p>TRÊS!</p>';
                        $condicao = false;
                    }
                    echo "<p>$num</p>";
                }

                echo '<hr>';

                echo '<h3>Do While</h3>';
                $condicao2 = 1;
                do {
                    echo "<p>$condicao2</p>";
                    $condicao2++;
                } while ($condicao2 < 5);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>