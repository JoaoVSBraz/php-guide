<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Introdução</h1>
        <section>
            <div class="content">
                <p>A <strong>programação orientada a objetos</strong> é um paradigma de programação que auxilia desenvolvedores a codificarem sistemas de forma mais eficiente. Ela é baseada em 4 pilares que serão estudados posterioremente: <strong>Abstração</strong>, <strong>Encapsulamento</strong>, <strong>Herança</strong> e <strong>Polimorfismo</strong>.</p>

                <p>Para compreendermos o paradigma de orientação a objetos que chamaremos a partir de agora de <strong>POO</strong>, precisamos olhar para o primeiro pilar: <strong>Abstração</strong>.</p>

                <p>A abstração é um componente fundamental da programação e permeia praticamente tudo nela. Abstrair significa tornar um conceito <strong>complexo</strong> e algo mais <strong>simples</strong>. Isto acontece através de alguns passos como, por exemplo, a quebra de um problema complexo em problemas menores. Dessa forma, a POO surgiu olhando para o mundo real e abstraindo conceitos para dentro da computação.</p>

                <p>Um componente fundamental da abstração advinda da POO são os conceitos de <strong>classe</strong>, <strong>atributo</strong> e <strong>método</strong>. <strong>Classe</strong> é uma forma de agrupar <strong>informações</strong> e <strong>comportamentos</strong>. Informações como <strong>atributos</strong> e comportamentos como <strong>métodos</strong>.</p>

                <p>Veja o exemplo de classe abaixo. A classe <code>Pessoa</code> possui dois atributos <code>nome</code> e <code>idade</code>. Além disso, possui o método <code>showInfo()</code> que exibe na tela, os atributos nome e idade num array associativo.</p>

                <p>As palavras reservadas <code>private</code> e <code>public</code> serão melhor explicadas posteriormente, mas tenha em mente que elas existem para restringir acesso a atributos e métodos.</p>

                <p><img src="../assets/images/ex018.png" alt="Classe de exemplo Pessoa contendo os atributos nome e idade, e o método show info"></p>
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
                    }

                    $joao = new Pessoa();
                    $joao->setNome('João');
                    $joao->setIdade(24);
                    print_r($joao->showInfo());
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>