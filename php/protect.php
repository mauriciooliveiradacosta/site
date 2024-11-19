<?php 
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("voçê não pode acessar essa página porque não está logado. Se já possui conta:<p><a href=\"index.php\">LOGAR</a></p>
    <p>Se ainda não têm uma conta :<a href='../cadastro.php'>CADASTRAR-SE</a></p>
    ");
}
?>