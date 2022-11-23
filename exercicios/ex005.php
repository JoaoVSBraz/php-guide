<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Lidando com strings</h1>
        <section>
            <div class="content">
                <p>A função <code>strpos()</code> retorna a posição de um termo buscado. Ela recebe <strong>dois</strong> argumentos principais. O primeiro trata-se da string onde queremos realizar a busca. O segundo, trata-se do termo buscado.</p>

                <p>A função <code>substr()</code> retorna uma parte de uma string. Ela recebe <strong>três</strong> argumentos. O primeiro sendo a string, o segundo o início e o terceiro, o fim.</p>

                <p>A função <code>strlen()</code> retorna o tamnho de uma string. Recebe apenas <strong>um</strong> argumento sendo a própria string.</p>

                <p><img src="../assets/images/ex005.png" alt="Exemplo de uso das funções strpos, substr e strlen"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    $frase = "A repetição é a mãe do aprendizado";
                    $palavra = "mãe";
                    $q = strpos($frase, $palavra);

                    $texto = substr($frase, 0, $q);
                    echo $texto;
                    echo '<br>';
                    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
                    echo $texto2;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>