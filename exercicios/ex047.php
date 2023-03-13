<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Download</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo realiza o download e cópia de uma imagem da internet. A função <code>file_get_contents()</code>, armazena o contéudo do link - neste caso uma imagem - na variável <code>$content</code>.</p>

                <p>A função <code>parse_url()</code> destrincha as partes da url da imagem para, posteriormente, acessarmos o atributo <strong>path</strong> a fim de armazenar o nome da imagem.</p>

                <p>Por fim, um novo arquivo é gerado através das funções <code>fopen()</code>, <code>fwrite()</code> e <code>fclose()</code>.</p>

                <p><img src="/assets//images/ex047.png" alt="Download e criação de imagem através da função file_get_contents"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $link = 'https://www.php.net/images/logos/php-logo.svg';
                    $content = file_get_contents($link);
                    $parse = parse_url($link);
                    $basename = basename($parse["path"]);
                    $file = fopen('images' . DIRECTORY_SEPARATOR . $basename, 'w+');
                    fwrite($file, $content);
                    fclose($file);
                ?>
                <img src="<?php echo('images' . DIRECTORY_SEPARATOR . $basename) ?>" alt="PHP imagem icon">
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>