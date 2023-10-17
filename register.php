<?php

 include_once('config.php');

 $fullName = $_POST['fullname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 


$result = mysqli_query($conexao, "INSERT INTO usuarios(nome, idade, etnia, email, senha) VALUES('$fullName', '$email', '$password')");



//if(isset($_POST['submit'])){
//  print_r($_POST['fullName']);
//  print_r('<br>');
//  print_r($_POST['email']);
//  print_r('<br>');
//  print_r($_POST['Password']);
//}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="styleregistro.css">
    <script src="scriptRegister.js"></script>
</head>
<body>
    <form action="register.php" method="POST">
    <main class="container">
        <img class="img1" src="../imgs/fundos/fundo2 (1).png" alt="" height="631px" width="382px">
    
    <div class="text">
        <h1 class="reg">Register</h1>

    <div class="emailNome">
        <input type="text" name="" id="fullName" placeholder="Full Name...">
        
        <br>
        
        <input type="text" name="" id="email" placeholder="Email...">

        <br>
        
        <input type="password" name="" id="Password" placeholder="Password...">
    </div>


        
    </div>
    <div class="btn">
        <input type="submit" placeholder="Resgister" class="submit">
    </div>
    <div class="redesSociais">
        <img src="../imgs/icones/fb logo.png" alt="facebook">
        <img src="../imgs/icones/google logo.png" alt="google">
        <img src="../imgs/icones/apple logo.png" alt="apple">
    </div>
    </main>
    </form>
       
</body>
</html>