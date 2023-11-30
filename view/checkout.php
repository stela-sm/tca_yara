<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Meu Carrinho </title>
    <link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">
    
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

  </head>
<body class="fade-in">
<html lang="en">
<?php

    session_start();
 
    if(isset($_SESSION['USER-ID'])){
    if(isset($_GET["valor"])){
            $_SESSION["valor"]=$_GET["valor"];
    };
    
    ?>
    <head>
        <script>  
        $('#meuModal').on('shown.bs.modal', function () {
  $('#meuInput').trigger('focus')
})

        $(document).ready(function(){
      // Expanda todos os itens do acordeão
      $('.collapse').addClass('show');
    });</script>
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
          
.fade-in-title {
    opacity: 0;
    animation: fadeIn 0.6s ease-in forwards;
    animation-delay: 0.5s; 
  }
  
  
.fade-in {
    opacity: 0;
    animation: fadeIn 0.4s ease-in forwards;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
           .menu {
    background-color: transparent !important;
    position: absolute; 
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 3%;
    margin: 15px 0px 0px;
    top: 0;
    z-index: 9999999999;
}

.logo {
    font-family: 'Berkshire Swash';
    font-size: 2.14rem;
    text-decoration: none !important;
    color: white !important;
    cursor: pointer;
}

.logo:hover, .logo:active, .logo::before, .logo::after {
    font-family: 'Berkshire Swash';
    font-size: 2.14rem;
    text-decoration: none !important;
    color: white !important;
}

.menu-links {
    justify-content: space-between !important;
    display: flex;
    align-items: center;
    height: 40px;
    padding: 0 1.2%;
    text-decoration: none !important;
}

.menu-link {
    margin-left: 30px;
    font-family: "Questrial", sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: white;
    text-decoration: none !important;
}

.menu-link:hover {
    font-family: "Questrial", sans-serif;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
}

a.menu-link:hover {
    color: var(--lgreen) !important;
    text-decoration: underline;
}

a.logo:hover {
    color: #f0f0f0 !important;
    text-decoration: underline;
}

.a-home, .a-shop, .a-sobre {
    position: relative;
    color: white;
    text-decoration: underline;
}

.a-home:before, .a-shop:before, .a-sobre:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: -1px;
  left: 0;
  background-color: var(--lgreen);
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.a-home:hover:before, .a-shop:hover:before, .a-sobre:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

.icon-bag, .icon-user {
    margin-top: -10px;
}

/* responsividade menu */
@media (min-width: 650px) {
    .btn-modal {
        display: none;
    }
}

@media (max-width: 650px) {
    .menu-links {
        display: none;
    }

    .modal-body {
        text-align: center;
        margin-top: -15px;
    }

    .menu-link {
        list-style: none;
        display: block;
        margin: 20px 0;
        text-align: center;
        text-decoration: none !important;
    }

    .btn-modal, .btn-modal:active, .btn-modal:hover, .btn-modal::before {
        border: none;
        background-color: transparent;
        border: transparent;
        box-shadow: none;
        outline: none;
        color: #000;
    }

    .btn-modal.transparent {
        color: transparent !important;
    }

    .modal-content {
        border-radius: 30px;
        border-style: none;
        background-color: rgba(240, 240, 240, 0.915);
    }

    .modal-dialog {
        position: fixed;
        top: 3%; 
        right: 10px;
        width: 45%; 
        height: 80%;
        margin: 0;
        transform: translate(0, 0);
    }
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
      
            .margin {
                
                margin: 14% 0 0;
                position: absolute;
            }
            a, a:hover{
             text-decoration: none;
             color: #1A3D1F;

            }
            #name {
                line-height: 3cm;
                font-family: 'Berkshire Swash';
                margin: 0;          
                color: white;
                font-size: 2.7em;
            }
    
            .prod_img{
    width: 80%;
    max-width: 2.5cm;
    border-radius: 10px
  }
  .prod_row{

    font-family: 'Questrial' !important;
box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
border-radius: 10px;
transition: 0.2s;

background-color: #f8f8f8 !important;
  }
  .prod_nome_div{
    text-align: left;
    margin-left: 14px;
    margin-bottom: 0px;
    font-size: 1rem;
  }
  .square_quant{
    border-radius: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    min-width: 80%;
    display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 15px;
  }
  .decrease-quantity, .increase-quantity,   .decrease-quantity:active, .increase-quantity:active {
    border: none;
    background-color: transparent;
    font-size: 0.7em;
    color:#1A3D1F;
cursor: pointer;
  }
  .preco{
    margin-right: 20px;
    margin-left: -20px;
  
    font-size: 1rem;
  }
  .valor__div{
    text-align: right;
    font-size: 0.5rem;
  }
  .subtotal_row{
    font-family: 'Questrial' !important;
    width: 100%;
    justify-content: space-between !important;
  }
  .subtotal_row>td{
    width: 100%;
  }
  .button {
    font-family: 'Questrial' !important;
    background-color: transparent;
    border-radius: 25px;
    border: 2px solid var(--green);
    color: var(--green);
    margin-top: 5%;
    padding: 5px 15px;
    width: 100%;
    box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
    outline: none !important;
    cursor: pointer;
    font-weight: 700;
    text-align: center;
    
}
.subtotal_card{
    border-radius: 10px;
box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
.font{
    font-size: 1.3rem;
}
.frete{
    font-size: 0.8rem;
}
.margin-table{
    margin-top: -2%;
    
}
.fa-trash-can{
    cursor: pointer;
}
.vazio_p{
    min-width: 100%;
    text-align: center;
    font-family: 'Questrial' !important;
    font-weight: 700;
    font-size: 1.4em;
}
.produtos_a, .produtos_a:hover{
    text-decoration: underline;
    cursor: pointer;

}



/* responsividade */
@media (max-width: 1199px) {
    .container-RESP{
        max-width: none !important;
    }
    .margin {
                
                margin: 18% 0 0 2%;
                position: absolute;
            }
}
@media (max-width: 930px){
.col-7{
    max-width: 50%;
}

.subtotal_row {
    font-size: 1em !important;
}
.frete{
    font-size: 0.6em;
}
.button {
    font-size: 0.8rem;
}
}
.accordion{
    
    font-family: 'Questrial' !important;
}

.etapa-name, .etapa-name:hover, .etapa-name:active{
    font-weight: bolder;
    color: #1A3D1F;
    text-transform: uppercase;
    text-decoration: none;

}
.card-header{
    background-color: white;
    border-bottom-left-radius: 0px !important;
    border-bottom-right-radius: 0px !important;
    border-top-right-radius: 15px !important;
    border-top-left-radius: 15px !important;
   
}
.card, .card-body{
    border-radius: 15px !important;
    border: none;
}
.card{
    
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
}
.custom-radio {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.custom-radio input[type="radio"] {
  display: none;
}

.custom-radio label {
  position: relative;
  padding-left: 30px; /* Espaço para a bolinha */
  cursor: pointer;
}

.custom-radio label::before {
  content: "";
  width: 15px;
  
  margin-left: 7px;
  margin-right: 6px;
  height: 15px;
  border: 1px solid GREY;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 30%;
  transform: translateY(-50%);
  background-color: transparent; /* Fundo da bolinha transparente por padrão */
}

.margin-radio label::before{
  top:50% !important;
}
.custom-radio input[type="radio"]:checked + label::before {
  background-color: black; /* Cor de fundo da bolinha quando selecionado */
}

.custom-radio input[type="radio"]:checked + label {
  background-color: #E8EDD6; 
  border-radius: 15px;
}

.label_padrao{
    width: 100%;
    padding: 5px 15px;
    align-items: center;
    justify-items: center;
    font-weight: 600;
    font-size: 0.8em;
    padding: 10px;
    border-radius: 15px;
    border: 1px #F4F4F4 solid;
}
.azul{
    color: lightseagreen;
    font-weight: 500 !important;
    
}


body{
  padding-bottom: 5cm;
  height: auto !important;
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
        width: 90%;

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
    .grande{
    width: 90%;
    border: 0px;
    background-color: white;
border-radius: 20px !important;
padding: 10px;
box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
}

form{
        width: 100%;
    }
    table{
      width: 100%;

    }
    td{
      padding: 8px;
    }
    .adicionar, .adicionar:active{
      border: none;
      background-color: transparent;
      outline: none;
      cursor: pointer;
      padding: 10px 0px;
    }
    .editar, .editar:active{
      border: none;
      background-color: transparent;
      outline: none;
      cursor: pointer;
      padding: 0px;
      font-size: 0.9em;
    }
    .resume_row{
      font-size: 0.9em;
      line-height: 10px;
      margin-top: 10px;
      padding-top: 10px;
    }
    .valor_div{
      text-align: right;
    }
    table{
      font-family: 'Questrial';
 
    }
    .th{
      font-size: 1.2em;
      padding-bottom: 10px;
    }
    .maior{
      margin-top: 2em;
    }
    .select_padrao{
      padding: 5px 10px;
      font-family: 'Questrial';
      border-radius: 5px;
      border: 1px solid gray;
      font-size: 1.2em;
    }
        </style>
        <!-- menu -->
       
        <!-- menu -->
        <header>
        <div class="menu">
          <a class="logo" href="#" style="color:#000">
              Yara.
          </a>
          <div class="menu-links">
              <a class="menu-link a-home" href="../index.php">Home</a>
              <a class="menu-link a-shop" href="shop.php">Shop</a>
              <a class="menu-link a-sobre" href="sobre.html">Sobre</a>
              <!-- ícone user -->
              <a class="menu-link" href="meuperfil.php">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon-user icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                      <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                      <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                  </svg>
              </a>
              <!-- ícone carrinho -->
              <a class="menu-link" href="carrinho.php">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon-bag icon-tabler icon-tabler-shopping-bag" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z"></path>
                      <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                   </svg>
              </a>
          </div>

       <!-- área responsiva do menu -->
       <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000">
           <!-- ícone menu -->
           <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
               <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
               <path d="M4 6l16 0"></path>
               <path d="M4 12l16 0"></path>
               <path d="M4 18l16 0"></path>
            </svg>
       </button>
         <!-- modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="btn-close btn-modal" width="32" height="32" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                     <a class="menu-link" href="../index.html">Home</a>
                     <a class="menu-link" href="shop.php">Shop</a>
                     <a class="menu-link" href="sobre.html">Sobre</a>
                     <a class="menu-link" href="meuperfil.php">Login</a>
                     <a class="menu-link" href="carrinho.php">Sacola</a>
               </div>
             </div>
           </div>
         </div>
      </div>
            <div class="container container-RESP">
                <div class="row">
                    <div class="col-6 margin">
                            <p id="name">Checkout</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->


            <br>
<br>
<form action="../controller/controller_compra.php" method="post" id="form_pedido" class="form_padrao">
  <input type="hidden" name="efetuar_pedido" value="<?php echo $_SESSION["USER-ID"]; ?>">
  <input type="hidden" name="valorget" value="<?php echo $_SESSION["valor"]; ?>">
            <div class="container container-RESP">
            <div class="row">

   

    <div class="col-8">
    <div class="accordion " id="accordionExample">
  <div class="card bg">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link etapa-name" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <B> 1. Endereço de Entrega </B>
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
      <div class="card-body">


      <?php
      require "../model/manager.php";
      $dados = buscar_endereco($_SESSION["USER-ID"]);
      
      if($dados["result"] == 0){ echo ""; }else{ 
      
              for($i=0;$i<$dados["num"];$i++){

echo"  <div class=\"custom-radio\">
<input type=\"radio\" value=\"".$dados[$i]["id"]."\" id=\"endereco".$dados[$i]["id"]."\" name=\"opcoes_endereco\">
<label for=\"endereco".$dados[$i]["id"]."\" class=\"label_padrao\">".$dados[$i]["rua"].", "; if ($dados[$i]["numero"]!=''){echo 'nº'.$dados[$i]["numero"].", ";} if ($dados[$i]["bloco"]!=''){echo 'b.'.$dados[$i]["bloco"].", ";} if ($dados[$i]["apto"]!=''){echo 'apto.'.$dados[$i]["apto"].", ";} echo $dados[$i]["bairro"].", ".$dados[$i]["cidade"].", ".$dados[$i]["estado"].", ".$dados[$i]["cep"]." - ".$dados[$i]["nome"]." <br>
<button type=\"button\" class=\"btn botao_modal editar\" data-toggle=\"modal\" data-target=\"#modal".$dados[$i]["id"]."\"><span class=\"azul\">Editar Endereço</span></button> 
</label>
</div>";
              }
            
            
            
            }
      ?>
    






<button type="button" class="btn botao_modal adicionar " data-toggle="modal" data-target="#novo_endereco"><span class="azul">+ Adicionar Endereço </span></button>

      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed etapa-name" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         2. Forma de Envio
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" >
    <div class="card-body">

    <div class="custom-radio margin-radio">
  <input type="radio" value="0" onclick="frete('GRÁTIS')" id="envio1"  name="opcoes_envio">
  <label for="envio1" class="label_padrao">
   ENVIO GRÁTIS PADRÃO - 10 dias úteis via SEDEX
  </label>
</div>




</div>

    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed etapa-name" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          3. Método de Pagamento
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" >
      <div class="card-body">
      <div class="custom-radio margin-radio" data-toggle="modal" data-target="#modalcartao">

  <input type="radio" value="credito" id="pay1" name="opcoes_pay">
  <label for="pay1" id="ultimosDigitosLabel" class="label_padrao">
   Cartão de Crédito - confirmação imediata
  </label>
</div>


<div class="custom-radio margin-radio">
  <input type="radio" value="boleto" id="pay2" name="opcoes_pay">
  <label for="pay2" class="label_padrao">
  Boleto Bancário - Vencimento em 1 dia útil
  </label>
</div>
<div class="custom-radio margin-radio">
  <input type="radio" value="pix" id="pay3" name="opcoes_pay">
  <label for="pay3" class="label_padrao">
  Pix - Código válido por 1 hora
  </label>
</div>
      </div>
    </div>
  </div>
</div>
  </div>
 
 
  

    
    
  

<!-- FINAL CARD PRODUTO-->



















                    <div class="col-4">
                    <div class="card subtotal_card">
  <div class="card-body">
 <table>
  
 <tr><td class="th" ><b>Resumo do pedido</b></td></tr>
 
 <tr class="resume_row "><td><b>Subtotal</b></td><td class="valor_div"><span id="valor"> R$<?php echo $_SESSION["valor"]; ?> </span></td></tr>
 <tr class="resume_row "><td><b>Frete</b></td><td class="valor_div"><span id="frete">---</span></td></tr>
 
 <tr class="subtotal_row font"><td><b>Total</b></td><td class="valor_div valor_final">R$<?php echo $_SESSION["valor"]; ?></td></tr>
 </table>
<table class="margin-table">
<tr><td class="button_final">
    <button type="button" class="button" onclick="verificar()" name="btnCarrinho">Finalizar Compra</button>
</td></tr>
</form>
</table>  
</div>
</div>
                    </div>
                </div>
            </div>

 </body>








    


    



<?php
if(isset($_REQUEST["msg"])){
	$cod = $_REQUEST["msg"];
	require_once "../model/msg.php";
	echo "<script>alert('" . $MSG[$cod] . "');</script>";
    unset($cod);

}
?>

<script>
 

     
     

     function excluir(id){
    var resp = confirm('Deseja excluir este este endereço?');
    if (resp == true) {
        location.href = `../controller/controller_client.php?excluir_endereco_checkout=${id}`;
    } else {
        return null;
    }
}

  

    </script>
    <!--MODAL NOVO ENDEREÇO-->
<?php
    for($i=0;$i<$dados["num"];$i++){

ECHO "
            <form id=\"endereco_edit\" action=\"../controller/controller_client.php\" method=\"post\">
            <div class=\"modal fade\" id=\"modal".$dados[$i]["id"]."\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"TituloModalCentralizado\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"TituloModalCentralizado\"><input type=\"text\" name=\"apelido\" id=\"apelido".$dados[$i]["id"]."\" class=\"input_apelido\" readonly  ondblclick=\"active(".$dados[$i]["id"].")\" value=\"".$dados[$i]["nome"]."\"></h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fechar\" onclick=\"limpa('endereco_edit')\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
                  
                  <input type=\"hidden\" name=\"endereco_edit_checkout\" value=\"".$dados[$i]["id"]."\">
                  <input type=\"hidden\" name=\"id_cliente\" value=\"".$dados[$i]["id_cliente"]."\">
                  <div class=\"modal-body\">
                  <table class=\"table_modal\">
                   
                    <tr>
                        <td>CEP:</td>
                        <td><input type=\"text\" name=\"cep\" onblur=\"buscaCep();\" onfocus=\"change(".$dados[$i]["id"].")\" id=\"cep".$dados[$i]["id"]."\" value=".$dados[$i]["cep"]." class=\"input_padrao \"></td>
                        <td>Rua:</td>
                        <td><input type=\"text\" name=\"rua\" id=\"rua".$dados[$i]["id"]."\" value=\"".$dados[$i]["rua"]."\" readonly class=\"input_padrao input2\"></td>
                    </tr>
                    <tr>
                        <td>Número:</td>
                        <td><input type=\"text\" name=\"numero\" value=\"".$dados[$i]["numero"]."\" class=\"input_padrao\"></td>
                        <td>Bairro:</td>
                        <td><input type=\"text\" name=\"bairro\" id=\"bairro".$dados[$i]["id"]."\" value=\"".$dados[$i]["bairro"]."\" readonly class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Bloco:</td>
                        <td><input type=\"text\" name=\"bloco\" value=\"".$dados[$i]["bloco"]." \"class=\"input_padrao\"></td>
                        <td>Cidade:</td>
                        <td><input type=\"text\" name=\"cidade\" readonly  id=\"cidade".$dados[$i]["id"]."\" value=\"".$dados[$i]["cidade"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                    <tr>
                        <td>Apto:</td>
                        <td><input type=\"text\" name=\"apto\"  class=\"input_padrao\" value=\"".$dados[$i]["apto"]."\"></td>
                        <td>Estado:</td>
                        <td><input type=\"text\" name=\"estado\" readonly id=\"estado".$dados[$i]["id"]."\" value=\"".$dados[$i]["estado"]."\" class=\"input_padrao input2 \"></td>
                    </tr>
                </table>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"salvar\">Salvar mudanças</button> <button class=\"salvar\">|</button> <button type=\"button\" onclick=\"excluir('".$dados[$i]["id"]."')\" class=\"salvar\">Excluir endereço</button>
                  </div>
                </div>
              </div>
            </div>
            </form>";
}?>

    <div class="modal fade" id="novo_endereco" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">

<form action="../controller/controller_compra.php" method="post" name="novo_end">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
              <h5 class="modal-title" id="TituloModalCentralizado"><input type="text" id="input-apelido-novo" name="apelido" class="input_apelido" value="Novo Endereço" style="text-decoration:underline;"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar" onclick="limpa('endereco_new')">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <input type="hidden" name="endereco_new_checkout" value="1" placeholder="">
        <input type="hidden" name="id_cliente" placeholder="" value="<?php echo $_SESSION["USER-ID"] ?>">
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




<!-- Modal -->
<div class="modal fade" id="modalcartao"  tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado"><b>Adicionar um Cartão de Crédito</b></h5>
        <button type="button" class="close" onclick="desmarcar()" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" name="cartao_form">
          <table>
            <tr>
             <td><label for="" class="label_padrao_cartao">Número do cartão</label></td> 
              <td><input type="number" id="cartaoinput" id="cartaoinput" oninput="atualizarUltimosDigitos(); javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="16" class="input_padrao"></td> 
            </tr>
            
            <tr>
              <td><label for="" class="label_padrao_cartao">Nome no cartão</label></td>
              <td><input type="text" class="input_padrao"></td>
            </tr>
            
            <tr>
              <td><label for="" class="label_padrao_cartao">Validade (mês/ano)</label></td>
              <td>
              <select name="month" id="" class="select_padrao">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
              <select name="month" id="" class="select_padrao">
                
                <option value="2">2024</option>
                <option value="3">2025</option>
                <option value="4">2026</option>
                <option value="5">2027</option>
                <option value="6">2028</option>
              </select></td>
            </tr>
            <tr>
            <td><label for="" class="label_padrao_cartao">Código de segurança (CVV)</label></td>
              <td><input type="number"   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="3" class="input_padrao cvv"></td>
            </tr>
            <tr>
              <td><label for="" class="label_padrao_cartao">Parcelas</label></td>
              <td>
              <select name="month" id="" class="select_padrao">
                <option value="1">1x - sem juros</option>
                <option value="2">2x - sem juros</option>
                <option value="3">3x - sem juros</option>
                <option value="4">4x - 5% de juros</option>
                <option value="5">5x - 6% de juros</option>
                <option value="6">6x - 7% de juros</option>
              </select></td>
            </tr>
          </table>
        </form>
      </div>
      <div class="modal-footer">
       
      <button type="button" class="salvar " data-dismiss="modal" aria-label="Fechar"> Adicionar</button>
      </div>
    </div>
  </div>
</div>
<script>
      function verificar() {
        
        var endereco = document.querySelector('input[name="opcoes_endereco"]:checked');
        var envio = document.querySelector('input[name="opcoes_envio"]:checked');
        var pay = document.querySelector('input[name="opcoes_pay"]:checked');
       
        if (endereco === null || envio === null || pay === null) {
            alert('Por favor, preencha todos os campos.');
            return false;
        }


        alert('Fazendo seu pedido...');
        var formulario = document.getElementById("form_pedido");
    formulario.submit();
        return true;
    }

    function atualizarUltimosDigitos() {
        // Obtém o valor do input
        var numeroCartao = document.getElementById('cartaoinput').value;

        var ultimosDigitos = numeroCartao.slice(-4);

        document.getElementById('ultimosDigitosLabel').innerText = 'Cartão de Crédito '+ ultimosDigitos +' - confirmação imediata ';
    }
    function desmarcar() {
      document.cartao_form.reset();
      atualizarUltimosDigitos();
      var radios = document.getElementsByName('opcoes_pay');

      for (var i = 0; i < radios.length; i++) {
        radios[i].checked = false;
      }
    }
  




    function frete(valor) {
       
            document.getElementById('frete').innerHTML = "GRÁTIS";
       
    }

   
 


    </script>


  </script>
</script>


<?php } else{ header("Location: login.php?fase=2"); }?>
</body>
</html>