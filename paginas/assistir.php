<?php
include_once("../php/assistirUp.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/acesso.css">
    <script src="../js/asistir.js"></script>
    <style>
        input{
            z-index: 2;
        }
        footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
            background-color: lightskyblue;
            text-align: center;

        }
        #videosMeus{
            box-sizing: border-box;
            height: 100vh;
            width: 30%;
            float: right;
        }
        a{
            margin-right: 30px;
        }
        video{
           width: 100%;
        }
      article{
        width: 100%;
      }
      #apresenta{
        float: left;
        width: 70%;
      }
    
    </style>
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
        </aside>
        <aside id="videoss" >
            <aside id="videosMeus">
                  <?php
                  include_once("../php/meusVideos.php");
                  ?>
            </aside>
        </aside>
        <aside id="apresenta">
            
        <?php
             echo"<video controls autoplay src=../videos/".$_GET['localizacao']."></video>";
             include("info.php")
        ?>
        </aside>
        
</div>
<footer>
    <a href="acesso.php">INICIO</a>
    <a href="../php/terminarSessao.php">SAIR</a>
</footer>
</body>
</html>