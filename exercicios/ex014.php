<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Funções - Novidades na PHP 7</h1>
        <section>
            <div class="content">
                <p>Duas novidades principais surgiram na versão 7 da PHP: <strong>Declaração de tipos escalares</strong> e <strong>declaração de tipo de retorno</strong>.</p>

                <p>A declaração de tipos escalares trata-se da conversão forçada para um tipo de dado específico. Este conceito fica evidente na declaração da função <code>soma()</code>, onde informamos que todos os numertos recebidos pela função serão convertidos para o tipo inteiro.</p>

                <p>De forma semelhante, a <strong>declaração de tipo de retorno</strong> nos possibilita converter o tipo de retorno de uma função ao adicionarmos o tipo de retorno após o sinal de dois pontos logo depois do fechamento dos parênteses. Neste exercício definimos o tipo de retorno da função <code>soma()</code> para <strong>string</strong>.</p>

                <p>Nota: A função <code>array_sum()</code> realiza a soma dos valores de um array.</p>

                <p><img src="../assets/images/ex014.png" alt="Exemplo com declaração de tipos escalares e declaração de tipo de retorno em funções"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    function soma(int ...$numbers):string{
                        return array_sum($numbers);
                    }

                    echo var_dump(soma(1, 1, 1));
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>