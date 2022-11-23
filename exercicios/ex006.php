<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Include e Require</h1>
        <section>
            <div class="content">
                <p>As funções <code>include()</code> e <code>require()</code> são funções que <strong>importam</strong> arquivos php. Cabe ressaltar que apesar de serem parecidas, são diferentes.</p>

                <p>A função <code>include()</code> importa o arquivo passado como parâmetro. Caso ele não seja encontrado, a função realiza uma busca em outro diretório padrão (include path) do PHP em busca do arquivo.</p>

                <p>A função <code>require()</code> importa o arquivo passado como parâmetro. Entretanto, caso não seja encontrado ou haja um erro no arquivo, um erro fatal é retornado.</p>

                <p>Além disso, ambas as funções possuem uma variação: <code>include_once()</code> e <code>require_once()</code>. Ambas realizam a importação de determinado arquivo uma única vez. Isto evita que o mesmo arquivo seja importado repetidas vezes causando erros.</p>

                <p>O próprio <strong>header</strong> e <strong>footer</strong> deste exercício são importados através do <code>require_once()</code>. Dessa forma, ambos são reaproveitados entre todos os exercícios evitando repetição de código.</p>

                <p><img src="../assets/images/ex006.png" alt="Exemplo das funções include_once e require_once"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>