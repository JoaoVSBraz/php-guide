<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Funções - Função anônima</h1>
        <section>
            <div class="content">
                <p><strong>Função anônima</strong> é um conceito advindo do <strong>paradigma de programação funcional</strong>. Elas não possuem nome, portanto, não podem ser invocadas como normalmente acontece com funções normais. Tendo isso em vista, como então, executamos uma função anônima? A resposta é passando-a como <strong>valor de uma variável</strong> ou parâmetro de outra função (callback).</p>

                <p>Ao passar uma função como o <strong>valor de uma variável</strong>, ela torna-se executável, isto é, podemos chamar a função anônima utilizando a variável que a recebeu. Isto acontece no exemplo 2 deste exercício.</p>

                <p>Outra forma de executar funções anônimas é passando-as como <strong>parâmetro para outras funções</strong>. É o caso do exemplo 1 deste exercício.</p>

                <p>Uma prática comum referente ao uso de funções anônimas e callbacks é durante a iteração de arrays. É o caso das funções <code>array_map()</code> e <code>array_filter()</code>. Ambas possuem como primeiro parâmetro o array que está sendo iterado e uma função anônima (callback) como segundo parâmetro.</p>

                <p><img src="../assets/images/ex016.png" alt="Exemplo de funções anônimas"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php
                    // Exemplo 1: Função que recebe outra função como argumento
                    function exemplo(callable $callback){
                        //Algum processo lento

                        // Função executada ao fim do processo lento
                        $callback();
                    }

                    exemplo(function(){ 
                            echo '<p>Exemplo 1</p>';
                        }
                    );

                    // Exemplo 2: Função anônima atribuída a uma variável
                    $fn = function(callable $callback){
                        //Algum processo lento
                    
                        // Função executada ao fim do processo lento
                        $callback();
                    };

                    $fn(function(){echo '<p>Exemplo 2</p>';});
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>