<?php
include_once("conexao.php");
$instrucao="select * from meusvideos";
$fazer=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($fazer)){
    echo"<article>";
    echo"<video name='".$row['video']."' id='".$row['id']."' class='".$row['idUsuario']."' onclick='manda(this)' src=../videos/".$row['video']."></video>";
    //imagem do play
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