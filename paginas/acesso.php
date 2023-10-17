<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/acesso.css">
    <script src="../js/asistir.js"></script>
</head>
<body>
    <div>
        <header>
            <h1>BEM VINDO AO OCTHITANDA</h1>
            <button onclick="vem()">VER PERFIL</button>
        </header>
        <aside style="z-index:2" id="perfil">
            <?php include_once("../php/meusDados.php") ?>
            <form action="../php/carregar.php" method="post" enctype="multipart/form-data">
                <label style="width: 100%; text-align: center; font-size:11pt ;" for="">CARREGAR VIDEO NO SEU CANAL</label>
                <input type="file" name="file" id="file"><br>
                <input placeholder="Titulo" type="text" name="titulo">
                <textarea  name="descricao" placeholder="Digite a descrição do video"></textarea>
                <button  type="submit" value="" onclick="alert('Video Salvo com Sucesso')">CARREGAR</button>
            </form>
            <a href="../php/terminarSessao.php">SAIR</a>
        </aside>
        <aside id="videos" >
            
            <aside id="videosMeus">
                  <?php
                  include_once("../php/meusVideos.php");
                  ?>
            </aside>
        </aside>
</div>
</body>
</html>