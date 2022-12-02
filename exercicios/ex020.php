<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Métodos mágicos</h1>
        <section>
            <div class="content">
                <p><strong>Métodos mágicos</strong> são funções executas automaticamente durante a instanciação de um objeto. Um dos métodos mágicos mais utilizados é o <strong>construtor</strong>. O método <strong>construtor</strong> nos permite popular os atributos de uma classe sem que seja necessário definirmos um por um ao chamarmos os métodos <strong>setters</strong>.</p>

                <p>Os <strong>métodos mágicos</strong> no PHP começam com dois caracteres de <strong>underline</strong>. Dessa forma, o método <strong>construtor</strong> identifica-se como <code>__construct()</code>.</p>

                <p>Outro método mágico muito utilizado é o <code>__toString()</code>. Ele basicamente converte o conteúdo informado para o tipo <strong>string</strong> sempre que o objeto é exibido na tela.</p>

                <p><img src="../assets/images/ex020.png" alt="Exemplo dos métodos mágicos __construct() e __toString()"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    class Pessoa {
                        private $nome;
                        private $idade;

                        public function __construct($nome, $idade){
                            $this->nome = $nome;
                            $this->idade = $idade;
                        }

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

                        public function __toString(){
                            return "<p><strong>$this->nome</strong>, $this->idade</p>";
                        }
                    }

                    $joao = new Pessoa('João', 24);
                    echo $joao;
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>