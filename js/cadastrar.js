usuarios=JSON.parse(localStorage.getItem("usuarios")) || []
usuario=JSON.parse(localStorage.getItem("secao")) || {numero:"",senha:""}
meusVideos=JSON.parse(localStorage.getItem("videos")) || []
numero=0
senha=""
cont=0

function cadastrarVideo() {
    file =document.getElementById("file")
    ficheiro= new FileReader()
    endereco=""
    ficheiro.readAsDataURL(file.files[0])
    ficheiro.onloadend=function(event){
        endereco=event.target.result
        elemento={numero:usuario.numero,video:endereco}
        meusVideos.push(elemento)
        localStorage.setItem("videos", JSON.stringify(meusVideos))
        console.log(endereco)
    }    
}

function cadastrar(){
        file=document.getElementById("file")
        arquivo= new FileReader()
        endereco=""
        arquivo.readAsDataURL(file.files[0])
        
        arquivo.onloadend=function(event) {
            endereco=event.target.result;
            elemento={
                nome:document.getElementById("nome").value,
                email:document.getElementById("email").value,
                numero:document.getElementById("numero").value,
                senha:document.getElementById("pass").value,
                imagem:endereco
            }
            usuarios.push(elemento)
             guardar()
            localStorage.removeItem("secao")
            usuario={numero:document.getElementById("numero").value,senha:document.getElementById("pass").value}
            localStorage.setItem("secao", JSON.stringify(usuario))
           
        }
   alert("Usuario Cadastrado com sussesso")
   window.location="../paginas/acesso.html"
}

function jaTem(valor){
    novo=usuarios.filter(function(elemento) {
      return elemento.numero==valor
    })

   if(novo.length==0){
    document.getElementById("vai").disabled=false
   }else{
    alert("Numero do Usuario ja Existente")
    document.getElementById("vai").disabled=true
   }

}

function guardar(){
    localStorage.setItem("usuarios", JSON.stringify(usuarios))
}

function imagem(){
    novo=usuarios.filter(function(elemento) {
        return elemento.numero==usuario.numero && elemento.senha==usuario.senha
      })
      console.log(novo)
      document.getElementById("imagem").src=novo[0].imagem
  
}

function login(){
    novo=usuarios.filter(function(elemento) {
        return elemento.numero==document.get && elemento.senha==senha
      })  
}


function meusDados(){
    novo=usuarios.filter(function(elemento) {
        return elemento.numero==usuario.numero && elemento.senha==usuario.senha
    })
    perfil=document.getElementById("perfil")
    label=document.createElement("label")
    label.textContent="Nome: "+novo[0].nome
    perfil.appendChild(label)
    label=document.createElement("label")
    label.textContent="Numero: "+novo[0].numero
    perfil.appendChild(label)
    label=document.createElement("label")
    label.textContent="Email: "+novo[0].email
    perfil.appendChild(label)
    label=document.createElement("label")
    label.textContent="Senha: "+novo[0].senha
    perfil.appendChild(label)

}


