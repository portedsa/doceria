<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
    header('Location: login.php');
    exit;
}

$logado = $_SESSION['email'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once('config.php');
    
    // Receba os dados do formulário
    $nome = $_POST['nomealtera'];
    $novoEmail = $_POST['emailaltera'];
    $endereco = $_POST['enderecoaltera'];
    $dataNascimento = $_POST['datadenascimentoaltera'];
    $senha = $_POST['senhausuario'];

    // Verifique se o novo endereço de e-mail já está em uso por outro usuário
    $verificaEmail = "SELECT email FROM dados WHERE Email = '$novoEmail' AND Email != '$logado'";
    $result = $conexao->query($verificaEmail);

    if ($result->num_rows > 0) {
        echo "Este endereço de e-mail já está em uso por outro usuário.";
    } else {
        // Atualize os dados no banco de dados
        $sql = "UPDATE dados SET nome='$nome', Email='$novoEmail', endereço='$endereco', data_nascimento='$dataNascimento', senha='$senha' WHERE Email='$logado'";

        if ($conexao->query($sql) === TRUE) {
            echo "Dados atualizados com sucesso!";
            $_SESSION['Email'] = $novoEmail; // Atualize a sessão com o novo e-mail
        } else {
            echo "Erro ao atualizar dados: " . $conexao->error;
        }
    }
}

?>

















<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilomaloka.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="./imagens/logotipos/Delicias da vó Rita pintadp.png">
   <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Doces Rita</title>
   
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-bar  bg-danger-subtle  border-bottom shadow-sm mb-3  ">
    <div class="container">
        <a class="navbar-brand text-white" href="/imagens/logotipos/Delicias vovó Rita logo.png">
            <b>Doces Rita</b>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target=".navbar-collapse"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav flex-grow-1">
                <li class="nav-item">
                <a class="nav-link active text-white" href="./index.php">
                        <b>Home</b>
                    </a>
                </li>
         
                   
                </ul>
            </div>
        </div>
    </div>
</nav>


<main class="flex-fill">
  <div class="container">
<h1>Minha Conta</h1>
<div class="row gx-3">
<div class="col-4">
<div class="list-group">
<a href="./cliente com dados.php" class="list-group-item list-group-item-action bg-danger text-light">
<i class="bi-person fs-6"></i>Dados Pessoais
</a>
<a href="./cliente se alterando.php" class="list-group-item list-group-item-action bg-danger text-light">
<i class="bi-person fs-6"></i>alterar dados 
</a>
<!---esse vc faz um lance pra um botao q saia o usuario-->
<a href="./sair.php" class="list-group-item list-group-item-action bg-danger text-light">
    <i class="bi-door-open fs-6"></i>sair
    </a>
</div>
</div>
<div class="col-8">
    <form action="./cliente se alterando.php" method="POST" class="col-12 col-md-8 col-lg-6">

        <div class="form-floating mb-3">
        
           <h5>Senha</h5> <input type="password" id="senhausuario" name="senhausuario"    class="form-control ">
        
            
        
        
        </div>
        
        <div class="form-floating mb-3">
        
            <h5>E-mail</E-mail></h5> <input type="emal" id="emailaltera" name="emailaltera"   class="form-control ">
         
             
         
         
         </div>
        
         <div class="form-floating mb-3">
        
            <h5>Endereço</h5> <input type="text" id="enderecoaltera"  name="enderecoaltera"class="form-control ">
         
             
         
         
         </div>
        
         <div class="form-floating mb-3">
        
            <h5>Data de Nascimento</h5> <input type="date" id="datadenascimentoaltera"   name="datadenascimentoaltera"class="form-control ">
         
             
         
         
         </div>
         <div class="form-floating mb-3">
        
            <h5>Nome Completo</h5> <input type="text" id="nomealtera" name="nomealtera" class="form-control ">
         
             
         
         
         </div>
        <button type="submit" name="submit"  class="btn btn-danger"><b>Salvar</b></button>
        </form>
        
        
        
        
        </div>
        
        
        
        
        </div>
        
        
                        
                    </div>
        
        
        
        
        
        
        
        
                </main>
