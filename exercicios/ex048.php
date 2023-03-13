<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como mover arquivos</h1>
        <section>
            <div class="content">
                <p>Este exercício faz a criação de um arquivo e o move para outra pasta posteriormente. Primeiro é feita uma verificação se o arquivo já não existe, caso não exista, ele é criado através das funções <code>fopen()</code>, <code>fwrite()</code>, <code>fclose()</code>. Por fim, a função <code>rename()</code> é utilizada para mover o arquivo da pasta atual para a pasta <strong>logs</strong>.</p>

                <p><img src="/assets//images/ex048.png" alt="Exemplo de como mover um arquivo através da função rename"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $filename = 'readme.txt';
                    if(!file_exists($filename)){
                        $file = fopen($filename, 'w+');
                        fwrite($file, date('Y:m:d H:i:s'));
                        fclose($file);
                    }

                    rename($filename, 'logs' . DIRECTORY_SEPARATOR . $filename);
                    echo('Arquivo movido!');
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>