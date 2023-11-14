<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/adm_new_style.css">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
:root{
    --white: #f9f9f9;
    --green: #1A3D1F;
    --yellow:  #B9C394;
--lgreen: #B9C394;
}
body{
    
 font-family: 'Questrial' !important;
    padding: 60px;
}
.prod_background{
 font-family: 'Questrial';
background-color: #ececec;
height: 3cm;
width: 100%;
border-radius: 15px;
padding: 10px;
display: flex;
align-items: center;
transition: 0.2s;
}
.prod_background:hover{
transform: scale(0.91);
cursor: pointer;
transition: 0.2s;
}
.imagem {
 flex-shrink: 0;
 margin-right: 20px; /* Espaçamento entre a imagem e o texto */
        }
 .texto {
  flex-grow: 1; /* Ocupa todo o espaço restante */
 padding-top: 1em;
  }
 .quantidade{
    margin-left: 2rem;
  }
  #remover,#adicionar{
    border-radius: 50%;
    padding: 5px;
    padding-top: 0px;
    padding-bottom: 0px;
    text-align: center;

  }
  #remover{
    background-color: transparent;
    color: gray;
    border: 1px gray solid;
  }
  #adicionar{
    background-color: var(--yellow);
    color: var(--white);
    border: 1px var(--yellow) solid;
  }







  .prod_img{
    width: 100%;
    max-width: 3cm;
    border-radius: 10px
  }
  .prod_row{

    font-family: 'Questrial' !important;

box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
border-radius: 10px;
padding: 15px 0px;
transition: 0.2s;
  }
  .prod_nome_div{
    text-align: left;
    margin-left: 14px;
    margin-bottom: 0px;
    font-size: 1.2rem;
  }
  .square_quant{
    border-radius: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    min-width: 80%;
    display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 5px 15px;
  }
  .decrease-quantity, .increase-quantity,   .decrease-quantity:active, .increase-quantity:active {
    border: none;
    background-color: transparent;
    font-size: 1.6em;
cursor: pointer;
  }
  .preco{
    margin-right: 10%;
  
    font-size: 1.2rem;
  }
</style>
<body>
                 
<?php
require '../model/manager.php';

$_SESSION['ID_CLIENTE']=1;
if(ISSET($_SESSION['ID_CLIENTE'])){
$id= $_SESSION['ID_CLIENTE'];
$dados= carrinho($id);
for($i=0;$i<$dados['result'];$i++){
    $produto = produtoBusca($dados[$i]['id_produto']);
    $valor= $dados[$i]['quantidade'] * $produto['valor'];
    echo "
    <div class=\"prod_background\">
        <img src=\"media/".$produto['img']."\" alt=\"Imagem\" class=\"imagem\" height=\"100\">
        <div class=\"texto\">
            <p>".$produto['nome']."</p>
            <p>R$ ".$valor." <span class=\"quantidade\"><button id=\"remover\"><i class=\"fa-solid fa-minus\"></i></button>
                <span id=\"quantidade\">".$dados[$i]['quantidade']."</span>
                <button id=\"adicionar\"><i class=\"fa-solid fa-plus\"></i></button>
            </span></p>
        </div>
    </div>
    <br>";}}else{

    }
    ?>
   



<div class="prod_div container-flex">
    <div class="prod_row row">
    <div class="col-9 d-flex align-items-center img_div">
        <img src="media/produto_UAaRUhol_img_.jpeg" class="prod_img"alt="">

    <p class="d-flex  prod_nome_div">
        Óleo de limpeza - Aloe Vera</p>
    </div>
    <div class="col-2 d-flex align-items-center add_div">
    <div class="square_quant">
  <button class="decrease-quantity" onclick="quant('sub','1')">-</button>
  <span id="quantidade">1</span>
  <button class="increase-quantity" onclick="quant('add','1')">+</button>
  </div>

    </div>
<div class="col-1 d-flex align-items-center preco_div">
   <span class="preco"> R$10,00 </span>
    <i class="fa-regular fa-trash-can"></i>
</div>    
</div>
</div>









    <script>
     function quant(op,id){

            location.href="../controller/controller_client.php?quantidade_op="+op+"&id="+id;
     }
     


    </script>
</body>
</html>