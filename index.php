<?php
session_start();

if(isset($_POST['btnEntrar'])) {
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if($email == "matheus.sandalo5@gmail.com" && $senha == "senac123"){
     $_SESSION['nome_usuario'] = "Matheus Sandalo";
     $_SESSION['email_usuario'] = "matheus.sandalo5@gmail.com";
     $_SESSION['logado'] = true;

     header('Location: admin.php');
     exit;
   }

}


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Autenticação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

  <div class="container vh-100">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-5 border p-3 justify-content-center ">
                <h1>Login</h1>
                 <form action="" method="post" >    

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>                       
                         </div>

                         <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" required>
                         </div>

                         <button type="submit" class="btn btn-primary" name="btnEntrar" >Entrar</button>

                 </form>
            </div>
        </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>