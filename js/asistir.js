cont=2

function manda(objecto){
    window.location.href="../paginas/assistir.php?localizacao="+objecto.getAttribute("name")+"&idvideo="+objecto.getAttribute("id")+"&idusuario="+objecto.getAttribute("class")+"  ";
}

function vem(){
    if(cont%2==0){
        document.getElementById("perfil").style.display="block"
    }else{
        document.getElementById("perfil").style.display="none"
    }
    cont++
   
}