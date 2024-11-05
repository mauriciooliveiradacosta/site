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
</head>
<body>
      <!--aqui são os itens do menu-->
      <nav>
        <ol>
            <li>
                <a href="index.html">inicio</a>
            </li>
            <li>
                <a href="personagens.html">personagens</a>
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
   <h1>um dia</h1>
   <!-- fim do titulo-->
        <div id="container"> <!--div pai do formulário-->
            <!-- formulário-->
            <form action="" method="post">
                <h2>download</h2>
                <a href="../executável.zip" download="../executável.zip" id="baixar">baixar</a>
            </form>
            <!-- fim do formulário-->
        </div> <!--fim da div pai-->
        <!-- rodapé do site -->
        <div id="links">
            <p><a href="logout.php">sair</a></p>
        </div>
</body>
</html>