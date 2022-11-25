<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Lidando com arrays</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo demonstra a criação de dois arrays - <strong>unidimensional (vetor)</strong> e <strong>bidimensional (matriz)</strong>.</p>

                <p><img src="../assets/images/ex009.png" alt="Exemplos de array unidimensional e bidimensional"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    echo '<h3>Array unidimensional (vetor)</h3>';
                    $pessoas = Array('João', 'Maria', 'José');
                    print_r($pessoas);

                    echo '<hr>';

                    echo '<h3>Array bidimensional (matriz)</h3>';
                    $carros = Array(
                        'GM' => Array('Cobalt', 'Onix', 'Camaro'),
                        'Ford' => Array('Fiesta', 'Fusion', 'Eco Sport')
                    );

                    print_r($carros);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>