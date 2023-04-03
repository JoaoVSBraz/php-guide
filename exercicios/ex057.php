<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Segurança - Criptografia em PHP</h1>
        <section>
            <div class="content">
                <p>A melhor forma de criptografar dados no PHP é através das funções <strong>openssl</strong>.</p>

                <p>O exemplo abaixo criptografa uma string, através da função <code>openssl_encrypt()</code>, usando o modelo de criptografia <strong>AES-128-CBC</strong>, e descriptografa através da função <code>openssl_decrypt()</code>.</p>

                <p>A função <code>pack()</code> transforma determinado tipo de dado em uma string binária. Ela possui dois parâmetros, o primeiro trata-se do formato e o segundo um ou mais valores.</p>

                <p><img src="../assets/images/ex057.png" alt="Exemplo de encriptação de dados com openssl no PHP"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    define('SECRET_IV', pack('a16', 'senha'));
                    define('SECRET', pack('a16', 'senha'));

                    $data = ["nome"=>"João"];

                    $openssl = openssl_encrypt(
                        json_encode($data),
                        'AES-128-CBC',
                        SECRET,
                        0,
                        SECRET_IV
                    );

                    echo($openssl);

                    $string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);
                    var_dump(json_decode($string, true));
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>