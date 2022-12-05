<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Encapsulamento</h1>
        <section>
            <div class="content">
                <p><strong>Encapsulamento</strong> consiste na definição de restrições a métodos e atributos utilizando <strong>modificadores de acesso</strong>. Há três modificadores: <strong>public</strong>, <strong>protected</strong> e <strong>private</strong>.</p>

                <p>O modificador de acesso <strong>public</strong> torna métodos e atributos <strong>públicos</strong>. Sendo assim, eles estarão acessíveis dentro da própria classe, em classes extendidas ou mesmo fora delas.</p>

                <p>O modificador de acesso <strong>protected</strong> é mais restrito e apenas permite acessar dados dentro da própria classe ou da classe extendida.</p>

                <p>Por fim, o modificador de acesso <strong>private</strong> é o mais restrito e é apenas acessível dentro da própria classe onde os dados foram definidos.</p>

                <p>O exercício abaixo cria uma classe com três atributos e diferentes tipos de modificadores de acesso. Os atributos <code>$idade</code> e <code>$senha</code> são exibidos na tela pois são acessados através de um método público da própria classe em que foram definidos.</p>

                <p><img src="../assets/images/ex021.png" alt="Exemplo de atributos com os três tipos de modificadores de acesso"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    class Pessoa {
                        public $nome;
                        protected $idade;
                        private $senha;

                        public function __construct($nome, $idade, $senha)
                        {
                            $this->nome = $nome;
                            $this->idade = $idade;
                            $this->senha = $senha;
                        }

                        public function verDados(){
                            echo $this->nome . '<br />';
                            echo $this->idade . '<br />';
                            echo $this->senha . '<br />';
                        }
                    }

                    $obj = new Pessoa('João', 24, 123456);
                    $obj->verDados();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>