
    <?php  
    
    $conexao = mysqli_connect("localhost","root","","teste");
    //chegar conexao
 
    
    //RECUPERAR e verificar ja existe
    
    $email = $_POST['email'];
    

$sql = "SELECT Email FROM teste.dados WHERE Email='$email'";
$retorno = mysqli_query($conexao,$sql);

if(mysqli_num_rows($retorno)>0)
{

echo"Email ja cadastrado<br>";



}
else{$email =$_POST['email'];
    $data_nascimento =$_POST['data'];
    $password =$_POST['password'];
    $nome =$_POST['nome'];
    $endereço =$_POST['endereço'];
    
    $sql = "INSERT INTO teste.dados(nome,endereço,data_nascimento,senha,Email)values('$nome','$endereço','$data_nascimento','$password','$email')";
    
    $resultado = mysqli_query($conexao,$sql);
            header("Location: login.php"); 
    }
?>
    
   























































