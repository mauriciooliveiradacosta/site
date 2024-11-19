<?php 
    require('conexao.php');
    // declaração das variáveis para passar para o banco de dados
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confima_senha = $_POST['confirma_senha'];
    $sexo = $_POST['sexo'];

    //validação das senhas e envio para o banco de dados
    if(isset($_POST) && $senha == $confima_senha && strlen($senha) > 6) {

        $query = "INSERT INTO usuário (nome,email,senha,sexo) VALUES ('$nome','$email','$senha','$sexo')";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        echo"
           <script>
           location.href = '../download.php'
          </script>";
        }
?>