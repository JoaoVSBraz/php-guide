<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Operadores PHP</h1>
        <section>
            <div class="content">
                <p>O PHP, assim como todas as outras linguagens, possui diversos tipos de operadores. Este exercício foca nos operadores mais exclusivos da linguagem PHP haja vista que a maioria de todos os outros são os mesmos independente da linguagem.</p>

                <p>O operador <strong>spaceship</strong> <code><=></code> da PHP é um operador que realiza três verificações entre dois valores de uma só vez. Se o valor da <strong>esquerda</strong> for maior o resultado é <strong>1</strong>, se ambos os valores forem <strong>iguais</strong> o resultado é <strong>0</strong>, e, se o valor da <strong>direita</strong> for maior, o resultado é <strong>-1</strong>.</p>

                <p>O operador <strong>null coalescing</strong> <code>??</code> é semelhante ao if ternário. Ele retorna o <strong>primeiro valor que não for nulo</strong>. Também é possível <strong>encadear</strong> valores com o null coalescing, neste caso, o valor retornado será o primeiro valor não nulo enquanto que os outros serão ignorados.</p>

                <p><img src="../assets/images/ex004.png" alt="Exemplos de uso dos operadores spaceship e null coalescing"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php
                    //spaceship
                    $a = 10;
                    $b = 20;

                    echo $a <=> $b;
                    echo '<br>';

                    //null coalescing
                    $one = NULL;
                    $two = 'John';
                    $three = NULL;

                    $name = $one ?? $two ?? $three;
                    echo $name;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>