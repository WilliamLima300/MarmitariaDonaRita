<?php
    //incluir a pagina dados com as configurações

    include("dados.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmitaria Dona Rita</title>

    <link rel="stylesheet" href="./CSS/style.css">

</head>

<body>
    <!-- CABEÇALHO SITE-->

    <header class="menu-header" id="home">

        <!-- LOGOMARCA-->

        <a href="index.php">
            <img src="./images/logomarca.png" alt="logomarca">
        </a>


        <!-- MENU NAVEGAÇÃO-->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- CORPO PRINCIPAL-->

    <main>
        <!-- Banner PRIMARIO-->
        <article>
            <div class="banner-primario">
                <a href="#sobre" class="myButton">SAIBA MAIS</a>
            </div>
        </article>

        <!-- CARDAPIO-->

        <section class="main-cardapio">

            <header class="main-cardapio-header">
                <h1>Venha dar uma olhada em nossas marmitas!</h1>
                <p>Refeição completa e saudável para todos &#128077</p>
            </header>

            <?php
                if(is_array($cardapio) && !empty($cardapio)){ //verificar se tem cadastros de cardapio
				    foreach($cardapio as $key => $value){ // imprimir os cadapiors na tela
			?>
            <article>
                <a href="cardapio.php?id=<?=$value['id'];?>">
                    <img src=<?=$value['imagem'];?> alt="<?=$value['nome']?>">
                </a>

                <h2><?=$value['nome'];?></h2>
                <p>Tamanho:<?=$value['tamanho'];?></p>
                <p>Preço:<?=$value['preco'];?></p>
                <p>Ingredientes:<?=substr($value['ingredientes'], 0, 20);?>...</p>
            </article>
            <?php
				    }
                }else{
                    echo "<h1>Sem cardapios por hoje pessoal &#128077</h1>"; //caso nao tenha cardapios para imiprimir
                }
			?>

        </section>

        <!-- SOBRE DO SITE-->

        <section class="main-sobre" id="sobre">

            <header class="main-sobre-header">
                <h1>Vamos falar sobre a Marmitaria Dona Rita &#128077</h1>
            </header>

            <div class="main-sobre-div">

                <img src="./images/panela.png" alt="imagem de uma panela com ingredientes">

                <p>Refeição completa e saudável para todos é o lema da nossa querida Dona Rita, mulher guerreira,
                    viúva a 15 anos, nunca deixou faltar o leite e o pão para suas crianças. Dona Rita, faz marmitas
                    variadas e vende de porta em porta com a ajuda de seus filhos na cidade de Palmas no interior do
                    Paraná.
                    Agora com a COVID-19 teve que se reinveitar para continuar vendendo também pelo site e agora
                    com mais falicidade ainda, você pode ter as delícias da Marmitaria Dona Rita todos dias com
                    você.
                </p>


            </div>


        </section>

        <!-- CONTATO DO SITE-->

        <section class="main-contato" id="contato">

            <header class="main-contato-header">

                <h1>Entre em contato conosco &#128077!</h1>

            </header>

            <div class="main-contato-div">
                <img src="./images/mapa.png" alt="imagem com um papa ilustrativo">

                <div>
                    <h2> Você pode encontrar a Dona Rita: </h2>
                    <p> Rua: AV. NUMERO UM Nº 111 Bairro: Primeiro Cidade:Timóteo-MG </P>
                    <p>Telefone/Whatsapp: (99) 99999-9999
                </div>
            </div>


        </section>


    </main>

    <!-- RODAPE DO SITE-->

    <footer>

        <!-- NAVEGAÇÃO RODAPE DO SITE-->

        <div class="footer_nav">
            <p>Viaje pela página:</p>
            <a href="#home">Home</a>
            <a href="#sobre">Sobre</a>
            <a href="#contato">Contato</a>
        </div>

        <div class="footer_nav">
            <p>Links Úteis:</p>
            <a href="#">Politica de Privacidade</a>
            <a href="#">Termos de uso</a>
        </div>

        <div class="footer_nav">
            <p>Sobre o projeto:</p>
            <a href="#">Divulgação das marmitas Dona Rita!</a>
        </div>



    </footer>

    <!-- ASSINATURA-->

    <div class="assinatura">

        <p>Desenvolvido por William Lima Alves &reg RA:21123196-5</p>

    </div>



</body>

</html>