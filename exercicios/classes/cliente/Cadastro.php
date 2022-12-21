<?php 

    namespace Cliente;

    class Cadastro extends \Cadastro {
        public function registrarVenda(){
            echo 'Venda registrada no nome de ' . $this->getNome();
        }
    }
?>