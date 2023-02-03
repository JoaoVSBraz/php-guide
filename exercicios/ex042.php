<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como criar e escrever em arquivos</h1>
        <section>
            <div class="content">
                <p>Este exercício cria um arquivo através da função <code>fopen()</code> e escreve nele através da função <code>fwrite()</code>. Após a escrita, o arquivo é fechado através da função <code>fclose()</code>.</p>

                <p>A variável <code>$file</code> torna-se do tipo <strong>resource</strong> ao receber um arquivo.</p>

                <p><img src="../assets/images/ex042.png" alt="Trecho de código com as funções fopen, fwrite e fclose"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $file = fopen('logs/log.txt', 'a+');
                    fwrite($file, 'Acessado em ' . date('Y-m-d H:i:s') . "\r\n");
                    fclose($file);
                    echo 'Arquivo gerado com sucesso';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>