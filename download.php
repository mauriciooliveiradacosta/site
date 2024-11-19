<?php 
include('php/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divulgação</title>
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/png">
    <script src="https://kit.fontawesome.com/cd17e1e6db.js" crossorigin="anonymous"></script> <!-- link do font awesome -->
</head>
<body>
      <!--aqui são os itens do menu-->
      <h1>One Day</h1>
      <nav>
        <ol>
            <li>
                <a href="index.php">inicio</a>
            </li>
            <li>
                <a href="catalogo.php">catálogo</a>
            </li>
                <li class="caixa"><a href="">docs</a>
                    <div class="itens">
                        <a href="#">doc 1</a>
                        <a href="#">doc 2</a>
                    </div>
                </li>
        </ol>
    </nav>
    <!-- fim do menu-->
   <!--título principal-->
   <!-- fim do titulo-->
        <div id="container"> <!--div pai do formulário-->
            <!-- formulário-->
            <form action="" method="post">
                <h2>download</h2>
                <p>clique no link abaixo para baixar o jogo</p>
                <a href="executável/" download="../executável.zip" id="baixar">baixar</a>
            </form>
            <!-- fim do formulário-->
        </div> <!--fim da div pai-->
        <!-- rodapé do site -->
        <div id="links">
            <p><a href="logout.php">sair</a></p>
        </div>
</body>
</html>