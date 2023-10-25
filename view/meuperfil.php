<html lang="en">
<?php

    session_start();
   $_SESSION['username'] = "user";
    if(!isset($_SESSION['username'])){
        header("Location: login.php?fase=2");
    }else{
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
            }
            .corpo {
                margin-top: 2%;
            }
            .linkmenu {
                line-height: 1.5cm;
                font-size: 1.1em;
            }
            .menubar {
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
            }
            i{
                margin-right: 1cm;
                width:10px;
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
                    <div class="col-6">
                        <input type="file" name="pfp" id="pfp">
                        <div class="row">
                            <label for="pfp"><img
                                src="../assets/media/user-profile-icon-free-vector.jpg"
                                id="pfp_label"
                                alt=""
                                srcset=""></label>
                            <p id="name">Laura Barbara Cruz</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->

            <!--Corpo-->
            <div class="container CONT2">
                <div class="row corpo">
                    <!--menu lateral-->
                    <div class="col-3">
                        <ul class="menubar">
                            <li  class="linkmenu">
                            <a href="dados.php" target="iframe_perfil"  onclick="endereco('1')">  <i style="color:var(--green); margin-right:18px" class="fa-regular fa-user"></i>
                               Meu Perfil </li></a>
                            <li  class="linkmenu">
                            <a onclick="endereco('0')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-location-dot"></i>Endereços</a></li>
                            <li  class="linkmenu">
                            <a  href="historico.php" target="iframe_perfil" onclick="endereco('1')">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-clipboard-list"></i>Histórico</a></li>
                            <li  class="linkmenu">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-key"></i>Mudar senha</li>
                        </ul>
                    </div>

                    <div class="col-8">
                        <iframe  src="" name="iframe_perfil" id="iframe_perfil" width="150%" height="150%" frameborder="0"></iframe>
                  
                  
                  
                  
    <style>
        #iframe_perfil{
            max-width: 100%;
            
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
            margin-top: 0.8cm;
        }
        .divform{
            margin-left: 5%;
            
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
    </style>
</head>
<body>
    <?php
    
    $_SESSION['nome'] = "Laura Barbara Cruz";
    $_SESSION['telefone'] = "11963220905";
    $_SESSION['cpf'] = "40527647810";
    $_SESSION['email'] = "laura@gmail.com";
    
    ?>















<p id="title">Endereços</p>
<?php
$_SESSION["USER-ID"] = "1";
require "../model/manager.php";
$resp = buscar_endereco($_SESSION["USER-ID"]);

if($resp["result"] == 0){ echo ""; }else{ 

        for($i=0;$i<$resp["num"];$i++){
            echo


           "<table class=\"invisivel\">
            <form action=\"../controller/controller_client.php\" class=\"divform\"name=\"update\" method=\"post\">
                    <input type=\"hidden\" name=\"update_dados\" value=\"1\">
            <div class=\"card grande\">
              <h5 class=\"card-header apelido\">".$resp[$i]["nome"]."<button type=\"button\" class=\"btn botao_modal btn-primary\" data-toggle=\"modal\" data-target=\"#modal".$resp[$i]["id"]."\"><i class=\"fa-solid fa-pencil\"></i></button>
            </h5>
              <div class=\"card-body body_card\">
                <p class=\"card-text\">
                CEP: <span class=\"cep\">".$resp[$i]["cep"]."</span><br>
                <span class=\"rua\">".$resp[$i]["rua"].",</span><span class=\"numero\"> ".$resp[$i]["numero"]."</span><br>
                <span class=\"bairro\">".$resp[$i]["bairro"].", </span><span class=\"cidade\">".$resp[$i]["cidade"]." - </span><span class=\"estado\">".$resp[$i]["estado"]."</span>
                </p>
              </div>
            </div>
            </table>
            </form>
            <br>";


            ECHO "
            <div class=\"modal fade\" id=\"modal".$resp[$i]["id"]."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"TituloModalCentralizado\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"TituloModalCentralizado\"><input type=\"text\" id=\"apelido".$resp[$i]["id"]."\" class=\"input_apelido\"disabled  ondblclick=\"active(".$resp[$i]["id"].")\" value=\"".$resp[$i]["nome"]."\"></h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fechar\" onclick=\"limpa()\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <form id=\"endereco_edit\" action=\"../controller/controller_client.php\" method=\"post\">
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
                        <td><input type=\"text\" name=\"numero\" value=".$resp[$i]["numero"]." class=\"input_padrao\"></td>
                        <td>Bairro:</td>
                        <td><input type=\"text\" name=\"bairro\" id=\"bairro".$resp[$i]["id"]."\" value=".$resp[$i]["bairro"]." readonly class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Bloco:</td>
                        <td><input type=\"text\" name=\"bloco\" value=".$resp[$i]["bloco"]." class=\"input_padrao\"></td>
                        <td>Cidade:</td>
                        <td><input type=\"text\" name=\"cidade\" readonly  id=\"cidade".$resp[$i]["id"]."\" value=\"".$resp[$i]["cidade"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Apto:</td>
                        <td><input type=\"text\" name=\"apto\"  class=\"input_padrao\" value=".$resp[$i]["apto"]."></td>
                        <td>Estado:</td>
                        <td><input type=\"text\" name=\"estado\" readonly id=\"estado".$resp[$i]["id"]."\" value=\"".$resp[$i]["estado"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                </table>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"salvar\">Salvar mudanças</button>
                  </div>
                </div>
              </div>
            </div>
            </form>";
        }}
?>

    

   
                  
                  
                    </div>
                </div>
            </div>
        </div>
    </body>








    



    <script>
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
            var tabela = document.getElementsByClassName("grande");
            iframe.src = "dados.php"; 
            tabela.style.display="none !important";
        }

        document.addEventListener("DOMContentLoaded", definirSrcDoIframe);
    
         function endereco(id){
            var iframe = document.getElementById("iframe_perfil")
            var div = document.getElementsByClassName("card")
       if(id=="0"){ 
        iframe.style.display = "none"
        div.style.display = "block"
        iframe.src = ""; }
        else{
            iframe.style.display = "block"
        div.style.display = "none"
        }
        }
        function active(num){
        var ipt = document.getElementById("apelido"+num)
        ipt.disabled = false;

    }

    </script>
    

<
<style>
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
</style>
<?php
if(isset($_REQUEST["msg"])){
	$cod = $_REQUEST["msg"];
	require_once "../model/msg.php";
	echo "<script>alert('" . $MSG[$cod] . "');</script>";
    unset($cod);
}
?>
</html>
<?php } ?>