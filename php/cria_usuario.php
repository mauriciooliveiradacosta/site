<?php 
    require('conexao.php');
    if(isset($_POST['senha'])){
        if(strlen($_POST['senha']) < 7){
            echo "a senha deve ter pelo menos 7 caracteres";
        }
    }
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];
    if(isset($_POST)){

        $query = "INSERT INTO usuário (nome,email,senha,sexo) VALUES ('$nome','$email','$senha','$sexo')";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        echo"
           <script>
           location.href = '../download.php'
          </script>
       ";
        }
?>