<?php 
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("voçê não pode acessar essa página porque não está logado. <p><a href=\"index.php\">LOGAR</a></p>");
}
?>