<?php
session_start();
include_once("conexao.php");
$nomeArquivo="";
if(file_exists("../imagem/")){
    $pasta="../imagem/"; 
    $nomeArquivo=$_FILES['file']['name'];
    $caminhoActual=$_FILES['file']['tmp_name'];
    move_uploaded_file($caminhoActual,$pasta.$nomeArquivo);
}else{
    $pasta="../imagem/";
    mkdir($pasta);
    $nomeArquivo=$_FILES['file']['name'];
    $guardadoPara = $pasta .$nomeArquivo;
    move_uploaded_file($_FILES['file']['tmp_name'], $guardadoPara);
}
$instrucao="insert into usuario(nome,email,imagem,numero,senha) values('".$_POST['nome']."','".$_POST['email']."','".$nomeArquivo."','".$_POST['numero']."','".$_POST['senha']."')";
mysqli_query($conexao,$instrucao);
$_SESSION['numero']=$_POST['numero'];
$_SESSION['senha']=$_POST['senha'];
header("location:../paginas/acesso.php")
?>