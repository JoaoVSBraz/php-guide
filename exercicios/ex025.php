<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Polimorfismo</h1>
        <section>
            <div class="content">
                <p><strong>Polimorfismo</strong> vem do grego e significa várias formas. É um dos pilares da programação orientada a objetos e consiste na definição de métodos de mesmo nome mas com comportamentos diferentes entre classes.</p>

                <p>O exercício abaixo possui várias classes que compartilham o mesmo método entre si: <code>falar()</code>. Entretanto, o método <code>falar()</code>, das classes que extendem a classe <code>Animal</code>, possuem comportamentos diferentes apesar de terem o mesmo nome.</p>

                <p>Nota: o trecho de código <code>parent::falar()</code> indica que o método <code>falar()</code> está sendo chamado diretamente da classe pai da classe atual.</p>

                <p><img src="../assets/images/ex025.png" alt="Exemplo de polimorfismo"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    abstract class Animal {
                        public function falar(){
                            return 'Som';
                        }

                        public function mover(){
                            return 'Andar';
                        }
                    }

                    class Cachorro extends Animal {
                        public function falar(){
                            return 'Latir';
                        }
                    }

                    class Gato extends Animal {
                        public function falar(){
                            return 'Miar';
                        }
                    }

                    class Passaro extends Animal {
                        public function falar(){
                            return 'Canta';
                        }

                        public function mover(){
                            return 'Voar e ' . parent::mover();
                        }
                    }

                    $pluto = new Cachorro();
                    echo '<p><strong>Pluto: </strong>' . $pluto->falar() . '</p>';

                    $garfield = new Gato();
                    echo '<p><strong>Garfield: </strong>' . $garfield->falar() . '</p>';

                    $picapau = new Passaro();
                    echo '<p><strong>Picapau: </strong>' . $picapau->mover() . '</p>';
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>