<?php
include_once("../php/conexao.php");
$instrucao="select * from meusvideos where id='".$_GET['idvideo']."'";
$fazer=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($fazer)){
    echo"<article style='float:left'>";
    $instru="select nome from usuario where id='".$row['idUsuario']."'";
    $faco=mysqli_query($conexao,$instru);
    echo"<div id='ola'>";
    while($reu=mysqli_fetch_array($faco)){
        echo"<label>".$reu['nome']."</label>";
    }
    $instru="select count(idVideo) from viws where idVideo='".$row['id']."'";
    $faco=mysqli_query($conexao,$instru);
    while($reu=mysqli_fetch_array($faco)){
        echo"<label>".$reu['count(idVideo)']." visualizações</label>";
    }
    echo"<span>".$row['titulo'];
    echo"</span>";
    echo"<span>".$row['descricao'];
    echo"</span>";
    echo"</div>";
    echo"</article>";
}
?>