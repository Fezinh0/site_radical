<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mova- se [Página principal]</title>
    <meta name="description"
        content="O mova-se é um site educacional, com a proposta de fazer reservas e pacotes de viagens com esportes radicais.">
    <link rel="Stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="#">
</head>

<body>
    <header id="topo">

        <div>
            <h1>
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </h1>
            <nav>
                <a href="index.html" tabindex="1">Home</a> <!--Tabindex é utilizado para a acessibilidade-->
                <a href="pacotes.html" tabindex="2">Pacotes</a>
                <a href="acessorios.html" tabindex="3">Acessórios</a>
                <a href="contato.php" tabindex="4">Contato</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <div class="conteudo-info" id="conteudo-contato">
           <article class="cont-contato">
                <div class="formulario">

    <?php 
    if( isset($_POST['enviar']) ){
        // verificando os campos indicados no formulario
        if( !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['assunto']) && !empty($_POST['mensagem']) ){
        // pegar os valores nos campos dos formularios
       
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];

        // incorporar e executar o script de envio de e-mail.
        include "envia-email.php"


        //Obtendo a data
       // $data = date("Y-m-d H:i:s");
    ?> 
        <p>Seus dados foram enviados com sucesso!</p>
        <p>Em breve responderei sua mensagem.</p>
    
    <?php
        }else{
        ?>

        <p>Você deve preencher os campos obrigatórios</p>
        <p><a href="contato.php"><b>Voltar para o formulario</b></a></p>
        
    <?php
    }
    
    } else {
        
        ?>
                
                    <h2 class="titulo">Contato</h2>
                    <p>Preencha os campos abaixo para entrar em contato com nossa equipe de atendimento.</p>
                    <form action="" id="form-contato" method="post">
                       
                        <p>
                            <label for="nome">Nome:</label>
                            <input tabindex="5" required type="text" id="nome" name="nome">
                        </p>

                        <p>
                            <label for="email">E-mail:</label>
                            <input tabindex="6" required type="email" id="email" name="email">
                        </p>

                        <p>
                            <label for="telefone">Celular:</label>
                            <input tabindex="7" required type="tel" id="telefone" name="telefone">
                        </p>

                        <p>
                            <label for="assunto">Assunto:</label>
                            <input tabindex="8" required type="text" id="assunto" name="assunto">
                        </p>

                        <p>
                            <label for="mensagem">Mensagem:</label>
                            <textarea tabindex="9" name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
                        </p>

                        <p>
                            <button tabindex="10" id="limpar" type="reset" name="limpar">Limpar Campo</button>
                            <button tabindex="11" id="Enviae" type="reset" name="enviar">Enviar Dados</button>
                        </p>
        
                    </form>
                    
            <?php
                } // fim do botão enviar
                ?>
                
                </div>
           </article>
           <article class="cont-contato" id="localizacao-end">
                <div class="localizacao">
                    <h2 class="titulo">Localizar</h2>
                    <p>Rua Tito, 54 - Vila Romana<br>CEP: 05051-000 - São Paulo<br>Telefone: (11) 2888-5500<br>E-mail: lapatito@sp.senac.br</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1225686689518!2d-46.691815399999996!3d-23.528093600000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8775663b04f%3A0x923835e9005f8309!2sSenac%20Lapa%20Tito!5e0!3m2!1spt-BR!2sbr!4v1689619485684!5m2!1spt-BR!2sbr" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
           </article>
        </div>
               





        
    </main>
    
    <footer class="rodape">
        
        <div class="rodape-conteudo">

            <div id="logo-rodape">
                <a href="index.html"><img src="imagem/logo.png" alt="Logotipo"></a>
            </div>

            <div class="menu-rodape">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Terrestre</a></li>
                    <li><a href="#">Montanha</a></li>
                    <li><a href="#">Aquático</a></li>
                    <li><a href="#">Aéreo</a></li>
                </ul>
            </div>

            <div class="menu-rodape">
                <ul>
                    <li><a href="pacotes.html">Pacotes</a></li>
                    <li><a href="acessorios.html">Acessórios</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>

            <div class="redes">
                <aside>
                    <img src="imagem/facebook.png" alt="Logo do Facebook">
                    <img src="imagem/insta.png" alt="Logo do Instagram">
                    <img src="imagem/youtube.png" alt="Logo do YouTube">
                </aside>
            </div>
        </div>
        
        <div class="assinatura">
            <p>Desenvolvido por <b>Fernando Oliveira</b> Site acadêmico | Todos os direitos reservados | SENAC TITO &copy; 2023</p>
        </div>

    </footer>






















</body>

</html>