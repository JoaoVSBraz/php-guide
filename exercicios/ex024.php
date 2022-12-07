<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Classe Abstrata</h1>
        <section>
            <div class="content">
                <p><strong>Classe abstrata</strong> consiste num tipo de classe especial que não pode ser instanciada, apenas herdada. É semelhante à interface com a diferença que as classes que extendem uma classe abstrata, herdam seus atributos e métodos ao passo que o mesmo não acontece com classes que implementam uma interface.</p>

                <p>Classes abstratas são identificadas através da palavra reservada <code>abstract</code>.</p>

                <p>O exercício abaixo contém duas classes: <code>Automovel</code> e <code>Camaro</code>. A classe <code>Automovel</code> é uma classe <strong>abstrata</strong> que serve apenas de modelo para outras classes, não podendo ser instanciada diretamente. Há de se notar que a classe <code>Automovel</code> também implementa a interface <code>Veiculo</code>. Dessa forma, os três métodos informados na interface deverão estar presentes na classe abstrata que a implementa.</p>

                <p><img src="../assets/images/ex024.png" alt="Exemplo de classe abstrata"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    interface Veiculo {
                        public function acelerar($velocidade);
                        public function frenar($velocidade);
                        public function trocarMarcha($marcha);
                    }

                    abstract class Automovel implements Veiculo {
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

                    class Camaro extends Automovel {
                        public function cor(){
                            //..code
                        }
                    }

                    $camaro = new Camaro();
                    $camaro->acelerar(200);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>