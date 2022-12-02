<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Métodos estáticos</h1>
        <section>
            <div class="content">
                <p><strong>Métodos estáticos</strong> são funções que podem ser utilizadas sem que haja a necessidade de instanciar um objeto através da classe. O método é acessado diretamente como podemos ver no exemplo deste exercício.</p>

                <p>Um método é identificado como estático através da palavra reservada <strong>static</strong>.</p>

                <p><img src="../assets/images/ex019.png" alt="Exemplo de uso de método estático"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    class Pessoa {
                        private $nome;
                        private $idade;

                        public function getNome(){
                            return $this->nome;
                        }

                        public function setNome($nome){
                            $this->nome = $nome;
                        }

                        public function getidade(){
                            return $this->idade;
                        }

                        public function setIdade($idade){
                            $this->idade = $idade;
                        }

                        public function showInfo(){
                            return array(
                                'nome' => $this->getNome(),
                                'idade' => $this->getIdade()
                            );
                        }

                        public static function sayHi(){
                            return '<p>Hi!</p>';
                        }
                    }

                    echo $person = Pessoa::sayHi();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>