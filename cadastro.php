<?php 
include('php/conexao.php');
if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $resultado = "INSERT INTO usuário(nome) VALUES ('$nome')";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="shortcut icon" href="../imagens/favicon.png" type="image/png">
    <link rel="stylesheet" href="estilos/menu.css">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/media.css">
</head>
<style>
    img#olho{
        top: 167px;
    }
</style>
<body>
    <nav>
        <ol>
            <li>
                <a href="index.php">inicio</a>
            </li>
            <li>
                <a href="personagens.html">personagens</a>
            </li>
            <li class="caixa"><a href="">docs</a>
                <div class="itens">
                    <a href="">doc 1</a>
                    <a href="">doc 2</a>
                </div>
            </li>
        </ol>
    </nav>
    <header>
        <h1>um dia</h1>
    </header>
    <div id="container">
        <form action="" method="post" id="form">
            <h2>cadastro</h2>
            <div id="dados">
               <input type="text" name="nome" id="nome" placeholder="Digite seu nome" autocomplete="none" required minlength="6"><label
                    for="nome"> :Digite seu nome</label>
                    <input type="email" name="email" id="mail" placeholder="Digite seu e-mail" required maxlength="24"><label for="mail">
                        :Digite seu e-mail</label>
                <input type="date" name="datanasc" id="dn" required><label for="dn">:data de nascimento</label>
                    <input type="password" name="senha" id="senha" placeholder="digite sua senha" required>
                    <img src="imagens/eye-slash-regular.svg" alt="olho" id="olho" onclick="olharsenha()" >
                <label for="senha">digite
                    sua senha</label>
                <input type="password" name="senha" id="confirmarsenha" placeholder="repita sua senha" required><label for="confirmarsenha">digite
                    sua senha</label>
            </div>
            <!-- inputs das opções de sexo-->
            <div id="sexo">
                <p><input type="radio" name="sexo" id="masc" required><label for="masc">Masculino</label></p>
                <p><input type="radio" name="sexo" id="fem"><label for="fem">Feminino</label></p>
                <p><input type="radio" name="sexo" id="outro"><label for="outro">outro</label></p>
            </div>
            <input type="submit" value="enviar" name="enviar" id="botao" >
        </form>
    </div>
    <script src="scripts/olho.js"></script>
</body>

</html>