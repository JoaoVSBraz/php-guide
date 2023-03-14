<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Usando try/catch</h1>
        <section>
            <div class="content">
                <p>Um bloco <code>try/catch</code> é uma declaração que objetiva o <strong>tratamento de exceções</strong>. Na bloco <code>try</code> executamos a terefa que pretendemos e no bloco <code>catch</code> capturamos se alguma <strong>exceção</strong> for lançada. Também há um terceiro bloco opcional chamado <code>finally</code> que basicamente é executado independente da execução do <code>try/catch</code>.</p>

                <p>O exercício abaixo lança uma exceção no bloco try, captura e exibe as informações da exceção no bloco catch e exibe uma mensagem no bloco finally.</p>

                <p><img src="/assets/images/ex051.png" alt="Exemplo do tratamento de exceções com o bloco try/catch"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    try {
                        throw new Exception("Houve um erro", 400);
                        
                    } catch (Exception $e) {
                        echo(json_encode(array(
                            "message"=>$e->getMessage(),
                            "line"=>$e->getLine(),
                            "file"=>$e->getFile(),
                            "code"=>$e->getCode()
                        )));
                    } finally {
                        echo('<p><strong>Try/catch finalizado</strong></p>');
                    }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>