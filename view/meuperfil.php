<html lang="en">
<?php

    session_start();
 
    if(isset($_SESSION['USER-ID'])){
        
    ?>
    <head>
        
<script src="js/cep_ajax.js"></script>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
        <link href="../assets/style/meuperfil.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yara | Meu Perfil</title>
    </head>
    <body>

                  
        <style>
            body{
               max-width: 100vw;
            }
            :root {
                --white: #f9f9f9;
                --green: #1A3D1F;
                --yellow: #B9C394;
                --lgreen: #B9C394;
            }
            
            header {
                background-image: url("../assets/media/yara_bg.png");
                height: 10cm;
                background-size: cover;
            }
            #pfp {
                display: none;
            }
            #pfp_label {
                width: 3cm;
                border-radius: 50%;
                cursor: pointer;
            }
            .col-6 {
                padding: 3%;
                margin: 10% 0 0;
                position: absolute;
            }
            a, a:hover{
             text-decoration: none;
             color: #1A3D1F;

            }
            #name {
                line-height: 3cm;
                text-align: center;
                align-items: center;
                font-family: 'Berkshire Swash';
                padding-left: 0.3cm;
                color: white;
                font-size: 2.2em;
            }
            .linkmenu {
                list-style: none;
                font-family: "Questrial";
                cursor: pointer;
                line-height: 1.5cm;
                font-size: 1.1em;
            }
            .corpo {
                margin-top: 2%;
            }
           
            .menubar, .menubar_resp {
                background-color: white;
                border-radius: 20px;
                padding: 15px 15px 15px 25px;
                margin-left: 10%;
                text-align: justify;
                box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            }
            .container {
                min-width: none;
            }
            iframe{
                margin-left: 1cm;
                height: 500%;
            }
            i{
                margin-right: 1cm;
                width:10px;
            }
            #iframe_perfil{
            width: 100%;
            
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: none;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        #last{
            text-align: left;
        }
        .input_perfil{
            background-color: #dddddd;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            padding: 10px;
            width: 50%;
            margin-right: 3em;
            border-radius: 5px;
        }
        .label{
            color:var(--green);
            padding-left: -1cm;
            width: 20%;
        }
        #title{
            font-weight: 700;
            text-transform: uppercase;
            font-family: 'Questrial';
            margin-top: 0.6cm;
        }
        .divform{
            margin-left: 10%;
            
            font-family: 'Questrial';
        }      
         .submit{
            background-color: transparent;
    border-radius: 25px;
    border: 1px solid #1a3d1ffb;
    color: #1A3D1F;
    margin-top: 10px;
    box-shadow: none !important;
    outline: none !important;
    cursor: pointer;
    font-weight: bold;
    width: 60%;
padding: 10px;        
opacity: 0.7;
}
.grande{
    width: 90%;
    border: 0px;
    background-color: white;
border-radius: 20px !important;
padding: 10px;
box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
}

.apelido{
font-weight: 600;
text-transform: uppercase;
color: #B9C394;
border: 0px;
background-color: white;
border-radius: 20px ;
border-bottom:1px #B9C394 solid;
font-size: 1.1em;
}

.body_card{ 
border: 0px; 
font-size: 0.9em;
}

.botao_modal, .botao_modal:hover, .botao_modal:focus{

margin-top: -0.5%;
position: absolute;
width: 1cm;
cursor: pointer;
background-color: transparent !important;
color: var(--lgreen) !important;
border: none !important;
box-shadow: none !important;
}
.card-text{
font-size: 1.1em;
    line-height: 2em;
}
#php{
        margin-left: 6%;
    }
    .php{
        display: none;
    }
    .active{
        display: block;
    }
    .modal-footer{
        justify-content: center;
        text-align: center;
    }
    .input_padrao{
        background-color: #dddddd;
        border: none;
        border-radius: 5px;
        padding: 10px;

    }
    
    .input2, .input2:active{
        width: 100%;
        opacity: 0.5;
        outline: none;

    }
    .modal{
        font-family: 'Questrial';
        
    }
    .modal-body{
        padding: 30px;
    }
    .table_modal{
        font-weight: 600;
        color: #1A3D1F;
    }
    .input_apelido{
        background-color: transparent;
        border: none;
        color: var(--lgreen);
        font-weight: 700;
    }
    .salvar, .salvar:active{
        margin-top: 10px;
        background-color: transparent;
        border: none;
        cursor:pointer;
        color: var(--lgreen);
        text-transform: uppercase;        
        transition: 0.2s;        
    }
    .salvar:hover{
        scale: 0.9;
        transition: 0.2s;
    }
    .modal-lg{
        max-width: 800px !important;
        border-radius: 20px !important;
    }
    .modal-footer{
        padding-top: 20px;
        padding-bottom: 30px;
    }
    .margin{
        margin-top:10rem
    }
    .col-12{
        padding-left: 50px;
    }
    .menubar_resp{
        display: none;
    }
   


    @media (max-width: 992px) {
    .linkmenu{
        font-size: 0.9em;
        line-height:1.8cm ;
    }
    .menubar{
        padding: 10px 10px 10px 15px;
    }
    .linkmenu>a>i, .linkmenu>i{
        margin-right: 10px !important;
    }
    }
    @media (max-width: 768px){
        .menubar{
            display: none;
        }
        .menubar_resp{
            display: block;
            justify-items: center;
            text-align: center;
        }
        .linkmenu{
        font-size: 1.2em;
        line-height:1.6cm ;
    }
    }
    @media (max-width: 465px) {
    #name{
        font-size: 1.8em;
        margin-top: -4%;
    }
    #pfp_label{
        width: 2cm;
    }
    .logo{
        font-size: 1.5em;
    }
    .col-6 {
    margin: 20% 0 0;}
    .menu-link{
        font-size: 12px;
    }
    header{
        height: 8cm;
    }
    .linkmenu>a>i, .linkmenu>i{
        margin-right: 13px !important;
    }
    iframe{
        margin-left: -5%;
    }
   
    }


    form{
        width: 100%;
    }
        </style>
        <!-- menu -->
        <header>
            <div class="menu">
                <a class="logo" href="#">
                    Yara.
                </a>
                <div class="menu-links">
                    <a class="menu-link" href="#">Home</a>
                    <a class="menu-link" href="#">Shop</a>
                    <a class="menu-link" href="#">Sobre</a>
                    <a class="menu-link" href="#">Contato</a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 margin">
                        <input type="file" name="pfp" id="pfp">
                        <div class="row">
                            <label for="pfp"><img
                                src="../assets/media/user-profile-icon-free-vector.jpg"
                                id="pfp_label"
                                alt=""
                                srcset=""></label>
                            <p id="name"><?php echo $_SESSION["USER-NOME"]?></p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->

            <!--Corpo-->
            <div class="container CONT2 container_change">
                <div class="row corpo">
                    <!--menu lateral-->
                    <div class="col-3">
                        <ul class="menubar">
                            <li  class="linkmenu">
                            <a href="dados.php" target="iframe_perfil" style="display:inherit" onclick="endereco('1')">  <i style="color:var(--green); margin-right:18px" class="fa-regular fa-user"></i>
                               Meu Perfil </li></a>
                            <li  class="linkmenu">
                            <a onclick="endereco('0')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-location-dot"></i>Endereços</a></li>
                            <li  class="linkmenu">
                            <a  href="historico.php" target="iframe_perfil" onclick="endereco('1')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-clipboard-list"></i>Histórico</a></li>
                            <li  class="linkmenu">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-key"></i>Mudar senha</li>
                                <li  class="linkmenu" onclick="ExecutaLogout()">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-right-from-bracket"></i>Logout</li>
                        </ul>
                        <ul class="menubar_resp">
                            <li  class="linkmenu">
                            <a href="dados.php" target="iframe_perfil"  onclick="endereco('1')">  <i style="color:var(--green); margin-right:18px" class="fa-regular fa-user"></i>
                              </li></a>
                            <li  class="linkmenu">
                            <a onclick="endereco('0')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-location-dot"></i></a></li>
                            <li  class="linkmenu">
                            <a  href="historico.php" target="iframe_perfil" onclick="endereco('1')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-clipboard-list"></i></a></li>
                            <li  class="linkmenu">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-key"></i></li>
                                <li  class="linkmenu" onclick="ExecutaLogout()">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-right-from-bracket"></i></li>
                        </ul>
                    </div>
                    <div class="col-8 col_iframe">
                        <iframe  src="" name="iframe_perfil" id="iframe_perfil" width="150%" height="150%" frameborder="0"></iframe>
                  
                  
                  
             
</head>
<body>   












<div id="php" class="php2 php fade-in" >


<p id="title">Endereços <button type="button" class="btn botao_modal btn-primary" data-toggle="modal" data-target="#novo_endereco"><i class="fa-solid fa-plus"></i></button></p>
<?php
require "../model/manager.php";
$resp = buscar_endereco($_SESSION["USER-ID"]);

if($resp["result"] == 0){ echo ""; }else{ 

        for($i=0;$i<$resp["num"];$i++){
            echo


           "<table class=\"invisivel fade-in\">
            <form action=\"../controller/controller_client.php\" class=\"divform\"name=\"update\" method=\"post\">
                    <input type=\"hidden\" name=\"update_dados\" value=\"1\">
            <div class=\"card grande\">
              <h5 class=\"card-header apelido\">".$resp[$i]["nome"]."<button type=\"button\" class=\"btn botao_modal btn-primary\" data-toggle=\"modal\" data-target=\"#modal".$resp[$i]["id"]."\"><i class=\"fa-solid fa-pencil\"></i></button>
            </h5>
              <div class=\"card-body body_card\">
                <p class=\"card-text\">
                CEP: <span class=\"cep\">".$resp[$i]["cep"]."</span><br>
                <span class=\"rua\">".$resp[$i]["rua"].",</span><span class=\"numero\"> "; if (isset($resp[$i]["numero"])){echo 'nº'.$resp[$i]["numero"].", ";} if (isset($resp[$i]["bloco"])){echo 'b.'.$resp[$i]["bloco"].", ";} if (isset($resp[$i]["apto"])){echo 'apto.'.$resp[$i]["apto"].", ";} echo "</span><br>
                <span class=\"bairro\">".$resp[$i]["bairro"].", </span><span class=\"cidade\">".$resp[$i]["cidade"]." - </span><span class=\"estado\">".$resp[$i]["estado"]."</span>
                </p>
              </div>
            </div>
            </table>
            </form>
            <br>";

        }}
?>

    


                  
                    </div>
                </div>
            </div>
        </div>
        </div>

<?php

for($i=0;$i<$resp["num"];$i++){

ECHO "
            <form id=\"endereco_edit\" action=\"../controller/controller_client.php\" method=\"post\">
            <div class=\"modal fade\" id=\"modal".$resp[$i]["id"]."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"TituloModalCentralizado\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"TituloModalCentralizado\"><input type=\"text\" name=\"apelido\" id=\"apelido".$resp[$i]["id"]."\" class=\"input_apelido\" readonly  ondblclick=\"active(".$resp[$i]["id"].")\" value=\"".$resp[$i]["nome"]."\"></h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fechar\" onclick=\"limpa('endereco_edit')\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  
                  <input type=\"hidden\" name=\"endereco_edit\" value=\"".$resp[$i]["id"]."\">
                  <input type=\"hidden\" name=\"id_cliente\" value=\"".$resp[$i]["id_cliente"]."\">
                  <div class=\"modal-body\">
                  <table class=\"table_modal\">
                   
                    <tr>
                        <td>CEP:</td>
                        <td><input type=\"text\" name=\"cep\" onblur=\"buscaCep();\" onfocus=\"change(".$resp[$i]["id"].")\" id=\"cep".$resp[$i]["id"]."\" value=".$resp[$i]["cep"]." class=\"input_padrao \"></td>
                        <td>Rua:</td>
                        <td><input type=\"text\" name=\"rua\" id=\"rua".$resp[$i]["id"]."\" value=\"".$resp[$i]["rua"]."\" readonly class=\"input_padrao input2\"></td>
                    </tr>
                    <tr>
                        <td>Número:</td>
                        <td><input type=\"text\" name=\"numero\" value=\"".$resp[$i]["numero"]."\" class=\"input_padrao\"></td>
                        <td>Bairro:</td>
                        <td><input type=\"text\" name=\"bairro\" id=\"bairro".$resp[$i]["id"]."\" value=\"".$resp[$i]["bairro"]."\" readonly class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Bloco:</td>
                        <td><input type=\"text\" name=\"bloco\" value=\"".$resp[$i]["bloco"]." \"class=\"input_padrao\"></td>
                        <td>Cidade:</td>
                        <td><input type=\"text\" name=\"cidade\" readonly  id=\"cidade".$resp[$i]["id"]."\" value=\"".$resp[$i]["cidade"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Apto:</td>
                        <td><input type=\"text\" name=\"apto\"  class=\"input_padrao\" value=\"".$resp[$i]["apto"]."\"></td>
                        <td>Estado:</td>
                        <td><input type=\"text\" name=\"estado\" readonly id=\"estado".$resp[$i]["id"]."\" value=\"".$resp[$i]["estado"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                </table>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"salvar\">Salvar mudanças</button> <button class=\"salvar\">|</button> <button type=\"button\" onclick=\"excluir('".$resp[$i]["id"]."')\" class=\"salvar\">Excluir endereço</button>
                  </div>
                </div>
              </div>
            </div>
            </form>";
}?>
















                <!--MODAL NOVO ENDEREÇO-->

<div class="modal fade" id="novo_endereco" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">

          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
<form action="../controller/controller_client.php" method="post" name="novo_end">
              <h5 class="modal-title" id="TituloModalCentralizado"><input type="text" id="input-apelido-novo" name="apelido" class="input_apelido" value="Novo Endereço" style="text-decoration:underline;"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="limpa('endereco_new')">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <input type="hidden" name="endereco_new" value="1" placeholder="">
        <input type="hidden" name="id_cliente" placeholder="" value="<?php $_SESSION["USER-ID"] ?>">
        <div class="modal-body">
        <table class="table_modal">
          <tr>
            <td>CEP:</td>
            <td><input type="text" name="cep" onblur="buscaCepN();" id="input-cep-novo" placeholder="" class="input_padrao "></td>
            <td>Rua:</td>
            <td><input type="text" name="rua" id="input-rua-novo" placeholder="" readonly class="input_padrao input2"></td>
          </tr>
          <tr>
            <td>Número:</td>
            <td><input type="text" name="numero" placeholder="" class="input_padrao"></td>
            <td>Bairro:</td>
            <td><input type="text" name="bairro" id="input-bairro-novo" placeholder="" readonly class="input_padrao input2"></td>
          </tr>
          <tr>
            <td>Bloco:</td>
            <td><input type="text" name="bloco" placeholder="" class="input_padrao"></td>
            <td>Cidade:</td>
            <td><input type="text" name="cidade" readonly id="input-cidade-novo" placeholder="" class="input_padrao input2"></td>
          </tr>
          <tr>
            <td>Apto:</td>
            <td><input type="text" name="apto" class="input_padrao" placeholder=""></td>
            <td>Estado:</td>
            <td><input type="text" name="estado" readonly id="input-estado-novo" placeholder="" class="input_padrao input2"></td>
          </tr>
        </table>
        </div>
        <div class="modal-footer">
                            <button type="submit" class="salvar">Adicionar</button>
            </form>
                          </div>
            </div>
          </div>
        </div>

 </body>








    



<script>
        function ExecutaLogout() {
    var resp = confirm('Deseja sair do sistema?');
    if (resp == true) {
        location.href = "cliente_logout.php";
    } else {
        return null;
    }
}

function excluir(id){
    var resp = confirm('Deseja excluir este este endereço?');
    if (resp == true) {
        location.href = `../controller/controller_client.php?excluir_endereco=${id}`;
    } else {
        return null;
    }
}
        function limpa(id){
            document.getElementById(id).reset();
  };

        
        function change(id){
          var cep =  document.getElementById("cep"+id);
          var rua = document.getElementById("rua"+id);
          var bairro = document.getElementById("bairro"+id);
          var cidade = document.getElementById("cidade"+id);
          var estado = document.getElementById("estado"+id);
          
          cep.id = "input-cep"
          rua.id = "input-rua";
          bairro.id = "input-bairro";
          cidade.id = "input-cidade";
          estado.id = "input-estado";


        }
        function definirSrcDoIframe() {
            var iframe = document.getElementById("iframe_perfil");
            var tabela = document.getElementById("php");
            iframe.src = "dados.php"; 
            tabela.style.display="none !important";
        }

        document.addEventListener("DOMContentLoaded", definirSrcDoIframe);
    
         function endereco(id){
            var iframe = document.getElementById("iframe_perfil")
            var div = document.getElementById("php")
       if(id=="0"){ 
        iframe.style.display = "none"
        div.classList.remove("php");
        div.classList.add("active");
        div.classList.add("fade-in");
        iframe.src = ""; }
        else{
            iframe.style.display = "block"
            div.classList.remove("active");
            div.classList.add("php");
        div.style.display = "none !importante"
        div.classList.remove("fade-in");

        }
        }
        function active(num){
        var ipt = document.getElementById("apelido"+num)
        ipt.readOnly = false;

    }
    
function atualizarClasseElemento() {
    const larguraJanela = window.innerWidth;
    const elemento = document.querySelector('.margin'); 
    const col_iframe = document.querySelector('.col_iframe'); 
    const container = document.querySelector('.container'); 
    const containerflex = document.querySelector('.container-flex'); 
    const menubar = document.querySelector('.menubar'); 
    const menubar_resp = document.querySelector('.menubar_resp'); 
    const link_menu = document.querySelectorAll(".linkmenu");
    const i = document.getElementsByTagName("i");

  if (larguraJanela > 901) {
      elemento.classList.remove('col-12');
      elemento.classList.add('col-6');      
      col_iframe.classList.remove('col-9');
      col_iframe.classList.add('col-8');   
    //   containerflex.classList.add('container');
    //   containerflex.classList.remove('container-flex');
    //   menubar.style.display="block";
    //   menubar_resp.style.display="none";
    } 
    
    if (larguraJanela < 901){
      elemento.classList.remove('col-6');
      elemento.classList.add('col-12');   
      col_iframe.classList.remove('col-8');
      col_iframe.classList.add('col-9');
    //   container.classList.add('container-flex');
    //   container.classList.remove('container');    
    //   menubar.style.display="none";
    //   menubar_resp.style.display="block";
      
    }
    
  
}
setInterval(atualizarClasseElemento, 1);
atualizarClasseElemento();


    </script>
    



<?php
if(isset($_REQUEST["msg"])){
	$cod = $_REQUEST["msg"];
	require_once "../model/msg.php";
	echo "<script>alert('" . $MSG[$cod] . "');</script>";
    unset($cod);

}
?>



</html>
<?php } else{ header("Location: login.php?fase=2"); }?>