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

    <header class="menu-header">

        <!-- LOGOMARCA-->

        <a href="index.php">
            <img src="./images/logomarca.png" alt="logomarca">
        </a>


        <!-- MENU NAVEGAÇÃO-->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Sobre</a></li>
                <li><a href="index.php">Contato</a></li>
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

        <section id="main-cardapio2">

            <header id="main-cardapio-header2">
                <h1>Fique a vontade e escolha!</h1>
                <p>Refeição completa e saudável para todos &#128077</p>
            </header>

            <?php
                if(isset($_GET['id']) && !empty($_GET['id'])){ // validando a variavel ID

                    $id = $_GET['id'];
                
                    foreach($cardapio as $key => $value){ // imprimir o cardapio selecionado pela ID na Tela
                        if($value['id']==$id){
            ?>
            <article>
                <a href="cardapio.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>
                        alt="<?=$value['nome']?>"></a>
                <h2><?=$value['nome'];?></h2>
                <p>Tamanho:<?=$value['tamanho'];?></p>
                <p>Preço:<?=$value['preco'];?></p>
                <p>Ingredientes:<?=$value['ingredientes'];?></p>
            </article>
            <?php
                        }
                    }
                }else{
                    echo "<p>Escolha outro prato &#128077<p>";
                }
            ?>

        </section>

        <section id="main-cardapio3">

            <header id="main-cardapio-header3">
                <h1>Veja outras opções &#128077</h1>

            </header>

            <?php
                $id = $_GET['id']; 
                
                foreach($cardapio as $key => $value){// Imprimir as outras opções menos a selecionada na tela
                    if($value['id']!=$id){
            ?>
            <article>
                <a href="cardapio.php?id=<?=$value['id'];?>">
                    <h2><?=$value['nome'];?></h2>
                </a>



            </article>
            <?php
                    }
                }
            ?>

        </section>



    </main>

    <!-- RODAPE DO SITE-->

    <footer>

        <!-- NAVEGAÇÃO RODAPE DO SITE-->

        <div class="footer_nav">
            <p>Viaje pela página:</p>
            <a href="index.php">Home</a>
            <a href="index.php">Sobre</a>
            <a href="index.php">Contato</a>
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