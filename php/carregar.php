<?php
session_start();
include_once("conexao.php");
$verdade=true;
$aleatorio="";
while($verdade){
    $aleatorio=$_SESSION['id'].rand(0,1000000);
    $instrucao="select count(video) from meusvideos where video='".$aleatorio."'";
    $fazer=mysqli_query($conexao,$instrucao);
    while($row=mysqli_fetch_array($fazer)){
        $count=$row['count(video)'];
    }
    if($count>1){
        echo"lupe";
        $verdade=true;
    }else{
        $verdade=false;
    }
}
$nomeArquivo="";
if(file_exists("../videos/")){
    $pasta="../videos/"; 
    $nomeArquivo=$_FILES['file']['name'];
    $caminhoActual=$_FILES['file']['tmp_name'];
    move_uploaded_file($caminhoActual,$pasta.$aleatorio.".mp4");
}else{
    $pasta="../videos/";
    mkdir($pasta);
    $nomeArquivo=$_FILES['file']['name'].".mp4";
    $guardadoPara = $pasta .$aleatorio;
    move_uploaded_file($_FILES['file']['tmp_name'], $guardadoPara);
}

$instrucao="insert into meusvideos(idUsuario,video,descricao,titulo) values('". $_SESSION["id"]."','".$aleatorio.".mp4"."','".$_POST['descricao']."','".$_POST['titulo']."')";
mysqli_query($conexao,$instrucao);
header("location:../paginas/acesso.php");
?>