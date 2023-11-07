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
      
            .col-6 {
                
                margin: 10% 0 0;
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
                            <p id="name">Meu Carrinho</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->


            <br>
<br>
            <div class="container">
                <div class="row">
                    <div class="col-8 ">


<!--CARD PRODUTO-->
<?php

require '../model/manager.php';
if(ISSET($_SESSION['USER-ID'])){
$id= $_SESSION['USER-ID'];
$dados= carrinho($id);
for($i=0;$i<$dados['result'];$i++){
    $produto = produtoBusca($dados[$i]['id_produto']);
    $valor= $dados[$i]['quantidade'] * $produto['valor'];
    echo "
    <div class=\"card prod_row\">
  <div class=\"card-body\">
    
<div class=\"container-flex\">
<div class=\"row\">
<div class=\"col-7 d-flex align-items-center img_div\">
    <img src=\"media/".$produto['img']."\" class=\"prod_img\"alt=\"\">
    <p class=\"d-flex  prod_nome_div\">
   " .$produto['nome']."</p>
    </div>
    <div class=\"col-3 d-flex align-items-center add_div\">
    <div class=\"square_quant\">
  <button class=\"decrease-quantity\" onclick=\"quant('sub','".$dados[$i]['id_carrinho']."')\"><i class=\"fa-solid fa-minus\"></i></button>
  <span id=\"quantidade\">".$dados[$i]['quantidade']."</span>
  <button class=\"increase-quantity\" onclick=\"quant('add','".$dados[$i]['id_carrinho']."')\"><i class=\"fa-solid fa-plus\"></i></button>
  </div>
  </div>
  <div class=\"col-2 d-flex align-items-center preco_div\">
     <span class=\"preco\"> R$".$valor." </span>
      
    <a type=\"button\" onclick=\"excluir('".$dados[$i]['id_carrinho']."')\"><i class=\"fa-regular fa-trash-can\"></i></a>
  </div>    
  </div>
  </div>
    </div>
  </div>
    ";}}
    
    ?>
 
  

    
    
  

<!-- FINAL CARD PRODUTO-->







<br>



<div class="card prod_row">
  <div class="card-body">
  
<div class=" container-flex">
    <div class=" row">
    <div class="col-7 d-flex align-items-center img_div">
        <img src="media/produto_UAaRUhol_img_.jpeg" class="prod_img"alt="">

    <p class="d-flex  prod_nome_div">
        Óleo de limpeza - Aloe Vera</p>
    </div>
    <div class="col-3 d-flex align-items-center add_div">
    <div class="square_quant">
  <button class="decrease-quantity" onclick="quant('sub','1')"><i class="fa-solid fa-minus"></i></button>
  <span id="quantidade">1</span>
  <button class="increase-quantity" onclick="quant('add','1')"><i class="fa-solid fa-plus"></i></button>
  </div>

    </div>
<div class="col-2 d-flex align-items-center preco_div">
   <span class="preco"> R$177,00 </span>
</div>    
</div>
</div>
    </table>
  </div>
</div>







<hr id="hr-div"></hr>



                    </div>

                    <div class="col-4">
                    <div class="card subtotal_card">
  <div class="card-body">
 <table> <tr class="subtotal_row font"><td><b>Subtotal</b></td><td class="valor_div">R$177,00</td></tr>
 </table>
<table class="margin-table">
<tr class="subtotal_row"><td class="frete">Tributos e Frete calculados na finalização da compra</td></tr></table>
<tr><td class="button_final">
    <input type="submit" class="button" value="Finalizar Compra" name="btnCarrinho" />
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
     function quant(op,id){

            location.href="../controller/controller_client.php?quantidade_op="+op+"&id="+id;
     }
     

     function excluir(id){
    if(confirm("Deseja excluir esse produto do seu carrinho?") == true){
        location.href="../controller/controller_client.php?excluir_prod="+id;
        
    }else{
       return false;
    }
}



    </script>

</html>
<?php } else{ header("Location: login.php?fase=2"); }?>
</body>
</html>