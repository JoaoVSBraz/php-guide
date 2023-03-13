<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Usando CURL</h1>
        <section>
            <div class="content">
                <p>CURL é uma ferramenta de linha de comando utilizada para realizar requisições através de diferentes protocolos. Através dele, o exercício abaixo realiza uma requisição HTTP para a ViaCEP API.</p>

                <p>A consulta começa através da função <code>curl_init()</code>. Em seguida, a função <code>curl_setopt()</code> fica encarregada de definir configurações. Por fim, a requisição é executada através da função <code>curl_exec()</code> e encerrada pela função <code>curl_close()</code>.</p>

                <p><img src="/assets/images/ex049.png" alt="Exemplo do uso da lib CURL"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $cep = '01001000';
                    $link = "https://viacep.com.br/ws/$cep/json/";

                    $curl = curl_init($link);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                    $response = curl_exec($curl);
                    curl_close($curl);

                    $data = json_decode($response, true);
                    foreach($data as $chave => $valor){
                        echo("<p><strong>$chave</strong>: $valor");
                    }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>