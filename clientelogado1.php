<?php
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) ){

    unset($_SESSION['email'] );
    unset($_SESSION['senha'] );
header('location:login.php');

}
$logado =$_SESSION['email'];


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
<a href="./cliente se alterando.php se alterando.php" class="list-group-item list-group-item-action bg-danger text-light">
<i class="bi-person fs-6"></i>alterar dados 
</a>
<!---esse vc faz um lance pra um botao q saia o usuario-->
<a href="./sair.php" class="list-group-item list-group-item-action bg-danger text-light">
<i class="bi-door-open fs-6"></i>sair
</a>
</div>
</div>
<div class="col-8">

</div>




</div>


      
  </div>








</main>






