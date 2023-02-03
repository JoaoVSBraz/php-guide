<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como ler informações de arquivos</h1>
        <section>
            <div class="content">
                <p>Este exercício faz a leitura dos atributos das imagens localizadas no diretório <code>assets/images</code>.</p>

                <p>A função <code>scandir()</code> lista os arquivos e pastas dentro de um diretório.</p>

                <p>A função <code>in_array()</code> realiza a verificação se os valores do segundo parâmetro existem no array passado como primeiro parâmetro.</p>

                <p>A função <code>pathinfo()</code> retorna algumas informações sobre o arquivo como caminho, nome do arquivo e extensão.</p>

                <p>A função <code>filesize()</code> retorna o tamanho do arquivo em bytes.</p>

                <p>A função <code>filemtime()</code> retorna a data da última modificação no arquivo.</p>

                <p>A flag <code>JSON_UNESCAPED_SLASHES</code> passada na função <code>json_encode()</code> instrui o PHP a ignorar possíveis barras durante a conversão do código para string.</p>

                <p><img src="../assets/images/ex041.png" alt="Trecho de código completo deste exercício"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $images = scandir('../assets/images');
                    $data = array();

                    foreach($images as $img){
                        if(!in_array($img, array('.', '..'))){
                            $filename = '../assets/images/' . $img;
                            $info = pathinfo($filename);

                            $info["size"] = filesize($filename);
                            $info['modified'] = date('d/m/Y H:i:s', filemtime($filename));
                            $info['url'] = "http://localhost/" . str_replace('\\', '/', 'assets/images/' . $img);

                            array_push($data, $info);

                        }
                    }
                    
                    echo json_encode($data, JSON_UNESCAPED_SLASHES);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>