<?php require_once('../partials/header.php') ?>
<?php require_once('../autoload.php') ?>
    <main>
        <h1>Lidando com arquivos - Upload</h1>
        <section>
            <div class="content">
                <p>O exercício abaixo realiza o <strong>upload</strong> de um arquivo através de um formulário. Há trrês aspectos importantes que devem ser levados em conta na criação do formulário: <strong>action</strong>, <strong>method</strong> e <strong>enctype</strong>.</p>

                <p><strong>Action</strong> trata-se do lugar para onde os dados serão enviados. Quando o atributo action é omitido os dados são enviados para a página que contém o formulário.</p>

                <p><strong>Method</strong> trata-se do método <strong>HTTP</strong> pelo qual a requisição será realizada para o servidor. Para o envio de informações sensíveis ou arquivos utiliza-se o método <strong>POST</strong>.</p>

                <p><strong>Enctype</strong> trata-se do atributo que define o tipo de dado que o formulário enviará ao servidor. Por padrão, o valor do enctype é <em>application/x-www-form-urlencoded</em>. Já para o envio de arquivos, o processo é um pouco diferente pois, o valor do ectype deve ser <em>multipart/form-data</em> o que informa ao servidor que os dados serão enviados em partes, uma para cada arquivo mais uma para o texto do corpo do formulário que pode ser enviado com eles.</p>

                <p>No PHP, existem algumas variávels globais utilizadas para resgatar o conteúdo enviado por formulários. Para formulários com método <strong>GET</strong>, utiliza-se a variável global <code>$_GET</code>. Para formulários com método <strong>POST</strong>, utiliza-se a variável global <code>$_POST</code>. Entretanto, se o conteúdo do formulário enviado forem arquivos, a variável global utilizada deve ser <code>$_FILES</code>.</p>

                <p>Por fim, outra questão importante que devemos manter em mente quando falamos de envio de arquivos para um servidor é o <strong>diretório temporário</strong>. O diretório temporário basicamente é um diretório encarregado de receber as partes do arquivo. Dessa forma, o servidor só armazena o arquivo quando ele foi totalmente transferido para o diretório temporário.</p>

                <p><img src="/assets/images/ex046.png" alt="Trechos de código utilizando as variáveis globais do PHP para lidar com arquivos"></p>
            </div>
            <div class="result">
                <h2>Saída</h2>
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="fileUpload">
                    <button type="submit">Send</button>
                </form>
                <?php
                    if($_SERVER["REQUEST_METHOD"] === "POST"){
                        $file = $_FILES["fileUpload"];

                        if($file["error"]){
                            throw new Exception("Error: " . $file["error"]);
                        }

                        $dirUploads = "uploads";

                        if(!is_dir($dirUploads)){
                            mkdir($dirUploads);
                        }

                        if(move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
                            echo "Upload realizado";
                        }else{
                            throw new Exception("Erro");
                            
                        }
                        
                    }
                ?>
            </div>
        </section>
    </main>
<?php require_once('../partials/footer.php') ?>