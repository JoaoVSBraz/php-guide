<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Tratando erros</h1>
        <section>
            <div class="content">
                <p>Há mais de uma forma do PHP informar o usuário comportamentos inesperados. Pode ser através de <strong>exceções (exceptions)</strong>, <strong>erros (errors)</strong>, <strong>notícias (notice)</strong> ou <strong>avisos (warning)</strong>.</p>

                <p>O exercício abaixo utiliza a função <code>set_error_handler()</code> para definir outra função para lidar com o erro da divisão por zero.</p>

                <p><img src="/assets/images/ex052.png" alt="Lidando com erros no PHP"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    function error_handler($code, $message, $file, $line){
                        echo(json_encode(array(
                            "code"=>$code,
                            "message"=>$message,
                            "file"=>$file,
                            "line"=>$line
                        )));
                    }
                    set_error_handler("error_handler");
                    echo(100 / 0);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>