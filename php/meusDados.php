<?php
include_once("conexao.php");
$instrucao="select * from usuario where numero='".$_SESSION['numero']."' and senha='".$_SESSION['senha']."'";
$fazer=mysqli_query($conexao,$instrucao);
while($row=mysqli_fetch_array($fazer)){
    echo" <center><img src=../imagem/".$row['imagem']."> </center>";
    echo"<label>Nome: ".$row['nome'];
    echo"</label>";
    echo"<label>Numero: ".$row['numero'];
    echo"</label>";
    echo"<label>Email: ".$row['email'];
    echo"</label>";
    //vius
    echo"<label>Senha: ".$row['senha'];
    echo"</label>";
}
?>