<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Lidando com JSON</h1>
        <section>
            <div class="content">
                <p><strong>Serializar</strong> um array significa transformá-lo num outro formato, neste caso, para Javascript Object Notation (JSON). Já <strong>desserializar</strong> um array ou JSON significa transformar um conjunto de dados JSON num Array.</p>

                <p><img src="../assets/images/ex010.png" alt="Exmplos de serialização de array e desserialização de um conjunto de dados JSON"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    echo '<h3>Serializando um array</h3>';
                    $arr = Array('One' => 1, 'Two' => 2, 'Three' => 3);
                    echo json_encode($arr);

                    echo '<hr>';

                    echo '<h3>Desserializando um array</h3>';
                    
                    $arr2 = '{"One":1,"Two":2,"Three":3}';
                    $data = json_decode($arr2, true);
                    var_dump($data);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>