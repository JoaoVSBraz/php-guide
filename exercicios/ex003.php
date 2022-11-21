<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Variáveis globais</h1>
        <section>
            <div class="content">
                <p><strong>Variáveis globais</strong> são variáveis acessíveis dentro de qualquer escopo. Entretanto, diferentemente das variáveis pré-definidas superblobais, as variáveis globais precisam ter um indentificar que as identifiquem como globais. Este identificador é atribuído através da palavra reservada <code>global</code> antes do nome da variável.</p>

                <p>No exemplo abaixo, a variável <code>$nome</code> dentro de cada função aponta para uma mesma variável fora delas.</p>

                <p><img src="../assets/images/ex003.png" alt="Exemplo de uso de uma variavel global"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $nome = 'João';

                    function firstCharacter(){
                        global $nome;

                        echo $nome . ' ' . 'Braz';
                    }

                    function secondCharacter(){
                        global $nome;

                        echo $nome . ' ' . 'Silva';
                    }

                    firstCharacter();
                    echo '<br>';
                    secondCharacter();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>