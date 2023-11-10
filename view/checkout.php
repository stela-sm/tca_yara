<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Meu Carrinho </title>
</head>
<body>
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
                height: 8cm;
                background-size: cover;
            }
      
            .margin {
                
                margin: 11% 0 0;
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
    margin-top: 5%;
    
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
    .grande{
    width: 90%;
    border: 0px;
    background-color: white;
border-radius: 20px !important;
padding: 10px;
box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
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
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

      <div class="custom-radio">
  <input type="radio" id="endereco1" name="opcoes_endereco">
  <label for="endereco1" class="label_padrao">
    Rua Damásio Rodrigues Gomes, 54, Jardim Cidália, São Paulo - SP, 40527647810 <br>
    <span class="azul">Editar Endereço</span>
  </label>
</div>


<div class="custom-radio">
  <input type="radio" id="endereco2" name="opcoes_endereco">
  <label for="endereco2" class="label_padrao">
    Rua Damásio Rodrigues Gomes, 54, Jardim Cidália, São Paulo - SP, 40527647810 <br>
    <span class="azul">Editar Endereço</span>
  </label>
</div>



<button type="button" class="btn botao_modal " data-toggle="modal" data-target="#novo_endereco"><span class="azul">+ Adicionar Endereço </span></button>

      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed etapa-name" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         2. Forma de Envio
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">

    <div class="custom-radio">
  <input type="radio" id="envio1" name="opcoes_envio">
  <label for="envio1" class="label_padrao">
    Rua Damásio Rodrigues Gomes, 54, Jardim Cidália, São Paulo - SP, 40527647810 
  </label>
</div>


<div class="custom-radio">
  <input type="radio" id="envio2" name="opcoes_envio">
  <label for="envio2" class="label_padrao">
    Rua Damásio Rodrigues Gomes, 54, Jardim Cidália, São Paulo - SP, 40527647810 
  </label>
</div>



</div>

    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed etapa-name" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          3. Método de Pagamento
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
  </div>
 
 
  

    
    
  

<!-- FINAL CARD PRODUTO-->



















                    <div class="col-4">
                    <div class="card subtotal_card">
  <div class="card-body">
 <table> <tr class="subtotal_row font"><td><b>Subtotal</b></td><td class="valor_div">R$144,00</td></tr>
 </table>
<table class="margin-table">
<tr class="subtotal_row"><td class="frete">Tributos e Frete calculados na finalização da compra</td></tr></table>
<tr><td class="button_final">
    <a type="submit" class="button" href="../controller/controller_compra.php" value="<?php echo $_SESSION["USER-ID"]; ?>" name="btnCarrinho">Finalizar Compra</a>
</td></tr>
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
     function quant(op,id,quant){
        quant = parseInt(quant);
         if (quant == "1" && op == 'sub'){
            excluir(id)
         }else{
            location.href="../controller/controller_client.php?quantidade_op="+op+"&id="+id+"&quant="+quant;
     }}
     

     function excluir(id){
    if(confirm("Deseja excluir esse produto do seu carrinho?") == true){
        location.href="../controller/controller_client.php?excluir_prod="+id;
        
    }else{
       return false;
    }
}

  

    </script>
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
</html>
<?php } else{ header("Location: login.php?fase=2"); }?>
</body>
</html>