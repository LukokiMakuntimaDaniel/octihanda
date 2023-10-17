<?php
session_start();
$_SESSION["numero"]="";
$_SESSION["senha"]="";
include_once("conexao.php");
$instrucao="select * from usuario";
$conexao=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($conexao)){
    if(strcmp($row['numero'], $_POST['number'])==0 && strcmp($row['senha'], $_POST['pass'])==0){
        $_SESSION["id"]=$row['id'];
        $_SESSION["numero"]=$row['numero'];
        $_SESSION["senha"]=$_POST['pass'];
        header("location:../paginas/acesso.php");
    }
}
echo"<script>alert('Dados Incorretos')</script>";
echo"<script>window.location.href='../index.php'</script>";
?>