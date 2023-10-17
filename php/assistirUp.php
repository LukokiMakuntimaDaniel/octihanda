<?php
include_once("conexao.php");
session_start();
$idVideo=$_GET['idvideo'];
$localizacao=$_GET['localizacao'];
$idUsuario=$_GET['idusuario'];
if((strcmp($idUsuario,$_SESSION['id']))!=0 ){
    $instrucao= "insert into viws(idVideo) values('".$idVideo."')";
    mysqli_query($conexao,$instrucao);
}
?>