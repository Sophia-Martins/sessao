<?php
// Pegar dados do formulário e armazenar na variável
$id_user = $_POST['id'];
$senha_user = $_POST['nm_senha']; 

include 'conexao.php';


$select = "SELECT * FROM tb_funcionario WHERE cd_funcionario = $id_user";
$query = $conexao->query($select);
$resultado = $query->fetch_assoc();

    $id_user_banco = $resultado['cd_funcionario'];
    $senha_banco = $resultado['senha']; 

    if ($id_user == $id_user_banco && $senha_user == $senha_banco) {
        session_start();
        $_SESSION['nm_funcionario'] = $resultado['nm_funcionario']; 
        header('Location: ../inicio.php');
    } else {
        echo "<script>alert('Código ou senha inválidos!'); history.back();</script>";
    }
?>

