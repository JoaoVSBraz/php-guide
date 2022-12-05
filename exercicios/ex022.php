<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Programação Orientada a Objetos - Herança</h1>
        <section>
            <div class="content">
                <p><strong>Herança</strong> é um dos 4 pilares da Programação Orientada a Objetos. Este pilar segue um princípio da engenharia conhecido por <em>especialização</em>. Fundamentalmente, especializar significa dividir conceitos em campos específicos a fim de evitar que um componente genérico fique sobrecarregado de informações.</p>

                <p>Através da <strong>Herança</strong>, componentes <strong>especialistas</strong> herdam certas informações do componente <strong>generalista</strong>. É possível identificar a herança em ação quando visualizamos a palavra reservada <code>extends</code> após a definição de uma classe especialista.</p>

                <p>O exercício abaixo cria uma classe genérica <code>Documento</code> e uma classe especialista <code>CPF</code>.</p>

                <p><img src="../assets/images/ex022.png" alt="Exemplo da classe CPF que extende a classe Documento"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>

                <?php 
                    class Documento {
                        private $numero;

                        public function getNumero(){
                            return $this->numero;
                        }

                        public function setNumero($n){
                            $this->numero = $n;
                        }
                    }

                    class CPF extends Documento {
                        public function validar(){
                            $numeroCpf = $this->getNumero();
                            //Validações
                            return true;
                        }
                    }

                    $doc = new CPF();
                    $doc->setNumero('111222333-44');
                    echo $doc->getNumero();
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>