<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Interface</h1>
        <section>
            <div class="content">
                <p><strong>Interface</strong> é um tipo de contrato que auxilia no desenvolvimento de sotftwares ao obrigar que as informações dentro da interface sejam seguidas. Dessa forma, caso alguma classe implemente uma interface sem seguir a risca tudo que ela propõe, erros serão disparados.</p>

                <p>Para implementar uma <strong>interface</strong> é necessário utilizar a palavra reservada <code>implements</code> após o nome da classe que a implementará.</p>

                <p>O exemplo abaixo cria a classe <code>Civic</code> que implementa a interface <code>Veiculo</code>.</p>

                <p><img src="../assets/images/ex023.png" alt="Exemplo da classe Civic que implementa a interface Veiculo"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    interface Veiculo {
                        public function acelerar($velocidade);
                        public function frenar($velocidade);
                        public function trocarMarcha($marcha);
                    }

                    class Civic implements Veiculo {
                        public function acelerar($velocidade)
                        {
                            echo '<p>O veículo acelerou até ' . $velocidade . ' km/h</p>';
                        }

                        public function frenar($velocidade)
                        {
                            echo '<p>O veículo frenou até ' . $velocidade . ' km/h</p>';
                        }

                        public function trocarMarcha($marcha)
                        {
                            echo '<p>O veículo engatou a marcha ' . $marcha . '</p>';
                        }
                    }

                    $carro = new Civic();
                    $carro->trocarMarcha(1);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>