<?php
session_start();



if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']))
{
    // Acesso permitido, continue com o código.
    include_once('config.php');
    
    $Email = $_POST['email']; // Usando colchetes, não parênteses.
    $password = $_POST['password']; // Usando colchetes, não parênteses.

    $sql = "SELECT * FROM teste.dados WHERE Email = '$Email' and senha = '$password' ";
    //echo 'Email: ' . $Email; // Usando a variável $Email corretamente.
  
    //echo 'Senha: ' . $password; // Usando a variável $password corretamente.

    $result = $conexao->query($sql);
    //print_r($result);
    if(mysqli_num_rows($result)<1){

        unset($_SESSION['email'] );
        unset($_SESSION['senha'] );


       
        header('location: erro.php');


    }else{

$_SESSION['email'] = $Email;
$_SESSION['senha'] = $password;
header('Location: clientelogado1.php');


    }
}
else
{
    // Acesso não permitido, redirecione para login.php.
    header('Location: login.php');
    exit; // Terminar o script para evitar execução adicional.
}
?>