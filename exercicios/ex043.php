<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Como trazer registros do banco de dados num arquivo CSV</h1>
        <section>
            <div class="content">
                <p>Este exercício busca os registros de usuários no banco de dados e os escreve num arquivo CSV.</p>

                <p><img src="../assets/images/ex043.png" alt="Trecho de código que resgata registros no banco de dados e os escreve num arquivo CSV"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <p><img src="../assets/images/ex043-2.png" alt="Arquivo de saída CSV"></p>
                <?php 
                    //Resgatar registros do banco de dados
                    $sql = new Sql();
                    $users = $sql->select('SELECT * FROM users ORDER BY user_id');
                    
                    //Armazenar cabeçalhos de cada coluna da tabela
                    $headers = array();
                    foreach($users[0] as $key => $value){
                        array_push($headers, $key);
                    }

                    //Criar arquivo CSV e escrever os cabeçalhos na primeira linha
                    $file = fopen('logs/users.csv', 'w+');
                    fwrite($file, implode(',', $headers) . "\r\n");

                    //Para cada linha com chave e valor, escrever o valor no arquivo CSV
                    foreach($users as $row){
                        $data = array();
                        foreach($row as $key => $value){
                            array_push($data, $value);
                        }

                        fwrite($file, implode(',', $data) . "\r\n");
                    }

                    fclose($file);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>