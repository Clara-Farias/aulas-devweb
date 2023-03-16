 <?php
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   echo "Nome: " . $nome; 
   echo "Email: " . $email; 
   echo "Senha: " . $senha;

   if ($email=="clarinha@gmail.com" && $senha==123456){

    echo "Conectado";
 }
 else{

   echo "Email e senha Inválidos";
 }
   ?>
