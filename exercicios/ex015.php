<?php require_once('../partials/header.php') ?>
    <main>
        <h1>Funções - Função recursiva</h1>
        <section>
            <div class="content">
                <p><strong>Função recursiva</strong> é uma função que chama a si mesma durante sua execução. No exemplo abaixo, temos um array que contém outros arrays dentro de si. Dessa forma, escrevemos o código para percorrer o primeiro nível e chamamos novamente a função para percorrer os níveis subsequentes.</p>

                <p>A variável <code>$hierarquia</code> neste exercício serve como base de dados para execução da atividade. Estes dados poderiam vir de qualquer outro lugar como por exemplo de um banco de dados, de um arquivo JSON, etc.</p>

                <p><img src="../assets/images/ex015.png" alt="Exemplo de função recursiva"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <?php 
                    $hierarquia = array(
                        array(
                            'nome_cargo' => 'CEO',
                            'subordinados' => array(
                                array(
                                    'nome_cargo' => 'Diretor Comercial',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'Gerente de Vendas'
                                        )
                                    )
                                ),
                                array(
                                    'nome_cargo' => 'Diretor Financeiro',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'Gerente de Contas a Pagar'
                                        )
                                    )
                                ),
                                array(
                                    'nome_cargo' => 'Diretor de Tecnologia da Informação',
                                    'subordinados' => array(
                                        array(
                                            'nome_cargo' => 'Gerente da Fábrica de Software',
                                            'subordinados' => array(
                                                array(
                                                    'nome_cargo' => 'Supervisor de Desenvolvimento Web'
                                                ),
                                                array(
                                                    'nome_cargo' => 'Supervisor de Suporte Técnico'
                                                ),
                                                array(
                                                    'nome_cargo' => 'Supervisor de Redes'
                                                ),
                                                array(
                                                    'nome_cargo' => 'Supervisor de Banco de Dados'
                                                )
                                            )
                                        )
                                    )
                                )
                            )
                        )
                    );

                    function hierarquia($cargos){
                        $html = '<ul style="width: 80%; margin: 0 auto;">';

                        foreach($cargos as $cargo){
                            $html .= '<li style="margin: 0 auto;">';
                                $html .= $cargo['nome_cargo'];

                                if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                                    $html .= hierarquia($cargo['subordinados']);
                                }

                            $html .= '</li>';
                        }

                        $html .= '</ul>';

                        return $html;
                    };

                    echo hierarquia($hierarquia);
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>