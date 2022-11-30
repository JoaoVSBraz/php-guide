<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Lidando com datas</h1>
        <section>
            <div class="content">
                <p>Há algumas formas de lidar com datas usando PHP. Vejamos abaixo alguns exemplos.</p>

                <p>A função <code>strtotime()</code> analisa qualquer texto em inglês e retorna o <strong>timestamp</strong>, em segundos, da data correspondente. A função recebe dois parâmetros sendo o primeiro obrigatório <strong>(datetime)</strong> e o segundo opcional <strong>(baseTimestamp)</strong>.</p>

                <p>A função <code>date()</code>, por sua vez, exibe a data e hora formatados de acordo com os parâmetros passados. A função recebe dois parâmetros sendo o primeiro obrigatório <strong>(format)</strong> e o segundo opcional <strong>(timestamp)</strong>. A documentação do PHP tem diversos exemplos com diferentes formatos de data e hora. O mais comum é <code>date('d/m/Y H:i:s')</code>.</p>

                <p>A função <code>setlocale()</code> é utilizada para configurar o fuso horário do sistema. <code>setlocale(int $category, string $locales, string ...$rest): string|false</code>.</p>

                <p>Por fim, também há como utilizar datas através da classe <strong>DateTime</strong>. Após instanciar a classe, o método <code>format()</code>, por exemplo, fica disponível.</p>

                <p><img src="../assets/images/ex017.png" alt="Exemplos do uso de datas"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
                    $john = strtotime('24-03-1998');
                    echo '<p><strong>Função date(): </strong>' . date('l, d/m/Y H:i:s', $john) . '</p>';
                    echo '<p><strong>Função strftime(): </strong>' . ucwords(strftime('%A, %e de %B de %Y')) . '</p>';

                    $data = new DateTime();
                    echo '<p><strong>Classe DateTime: </strong>' . $data->format('d/m/Y H:i:s');
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>