<?php 
    require('conexao.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    if(isset($_POST)){

        $query = "INSERT INTO usuário (nome,senha,email,sexo) VALUES ('$nome','$senha','$email','$sexo')";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        echo"
           <script>
           location.href = '../download.php'
          </script>
       ";
        }
?>