<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="home.php">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
</head>
<body style="background-color: #F4EDE2; margin: 0;">
   
    <div class="menu">
        
        <img src="perfil.png" class="perfil">
        <a href="Funcionario.html"><img src="funcionario.png" class="icon"></a>
        <a href="cliente.html"><img src="cliente.png" class="icon"></a>
        <a href="fornecedor.html"><img src="fornecedor.png" class="icon"></a>
        <a href="categoria.html"><img src="categoria.png" class="icon"></a>
        <a href="lancamento.html"><img src="lancamento.png.png" class="icon"></a>

    </div>

    <center>
        <div id="mensagem" style=" width: 100%; background-color: #CAAF99 ; font-size: 20px; border: solid 2px ; border-color: #592B1B; height: 35px; padding-top: 10px;">
                <span><?php
                    session_start();
                    if(isset($_SESSION['nm_funcionario'])) { 
                    $nome = $_SESSION['nm_funcionario'];
                     echo "<strong>Bem Vindo(a) " .$nome."!</strong> Tenha um ótimo dia."; 
                    } else {
                    echo "<script>alert('Você não está logado!'); window.location.href = 'login1.html';</script>";
                    }
                ?></span>
        </div>
    </center>
        <div style="display: flex; justify-content: center; align-items: center;">
        <div class="pesquisa">
            <input type="search" class="pesquisar" style="height: 32px; margin-right: -80px;" placeholder="Pesquisar..."> 
        </div>
        <a href="logout.php">
            <img src="sair.png" alt="" style="margin-left: 150px; margin-top: 30px;"> 
        </a>
        </div>
    
</body>
</html>