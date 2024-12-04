<?php 
if(!isset($_SESSION)){ //inicia a seção
    session_start();
}
// encerra a seção e redireciona a página para o arquivo index
session_destroy();
header("location: ../index.php")
?>