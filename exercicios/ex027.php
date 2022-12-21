<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Utilizando namespaces</h1>
        <section>
            <div class="content">
                <p>O termo <strong>namespace</strong> é utilizada para referenciar um conjunto de classes. Seu uso melhora a organização da estrutura de classes do sistema em questão.</p>

                <p>Para criar um namespace basta usar a palavra reservada <code>namespace</code> seguida do nome do namespace. <br/> Exemplo: <code>namespace Cliente</code></p>

                <p>Para utilizar classes existentes dentro de um namespace utilza-se a palavra reservada <code>use</code> <br/> Exemplo: <code>use \Cliente\Cadastro</code></p>

                <p><img src="../assets/images/namespace-cliente.png" alt="Namespace cliente"></p>
                <p><img src="../assets/images/ex027.png" alt="Namespace sendo utilizado"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 

                    use Cliente\Cadastro;

                    $cad = new Cadastro();
                    $cad->setNome('Joao');
                    $cad->setEmail('joao@email.com');
                    $cad->setSenha('123456');
                    
                    $cad->registrarVenda();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>