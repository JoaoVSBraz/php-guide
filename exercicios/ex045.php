<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como ler arquivos com fgets()</h1>
        <section>
            <div class="content">
                <p>Este exercício lê os dados de um arquivo csv linha a linha através da função <code>fgets()</code> e os transforma num array através da função <code>explode()</code>.</p>

                <p><img src="../assets/images/ex045.png" alt="Trecho de código que lê o arquivo csv e o transforma num array"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $filename = 'logs/users.csv';

                    if(file_exists($filename)){
                        $file = fopen($filename, 'r');

                        $headers = explode(',', fgets($file));

                        $data = array();

                        while($row = fgets($file)){
                            $rowData = explode(',', $row);
                            $linha = array();

                            for($i = 0; $i < count($headers); $i++){
                                $linha[$headers[$i]] = $rowData[$i];
                            }

                            array_push($data, $linha);
                        }
                        fclose($file);
                    }

                    echo str_replace('\r\n', '', json_encode($data));
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>