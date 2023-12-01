<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Meu Carrinho </title>

    
    <link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="js/cep_ajax.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
                <link rel="stylesheet" href="../assets/style/globalV2.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Yara | Meu Perfil</title>
            </head>
<body class="fade-in">
<html lang="en">
<?php

    session_start();
 
    if(isset($_SESSION['USER-ID'])){
        
    ?>

                  
        <style>
           
            footer{
                position: fixed !important;
    bottom: 0 !important;
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
#name {
                line-height: 3cm;
                font-family: 'Berkshire Swash';
                margin: 0;          
                color: white;
                font-size: 2.7em;
            }
/* responsividade menu */

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
        color: #000 !important;
    }

    a.menu-link:hover {
        color: #000 !important;
        text-decoration: underline;
    }

    .btn-modal, .btn-modal:active, .btn-modal:hover, .btn-modal::before {
        border: none;
        background-color: transparent;
        border: transparent;
        box-shadow: none;
        outline: none;
        color: #f0f0f0 !important;
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

            body{
               width: 100vw;
               display: flex;
    flex-direction: column;
    
    margin: 0;
            }
            :root {
                --white: #f9f9f9;
                --green: #1A3D1F;
                --yellow: #B9C394;
                --lgreen: #B9C394;
            }
            .row>*{
                width:auto;
            }
            
            header {
                background-image: url("../assets/media/yara_bg.png");
                height: 10cm;
                background-size: cover;
            }
      
            .margin {
                
                margin: 13% 0 0;
                position: absolute;
            }
            a, a:hover{
             text-decoration: none;
             color: #1A3D1F;

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
#voltar{
    font-family: 'Questrial';
    text-decoration: underline;
    transition: 0.2s;

}
#voltar:hover{
    cursor: pointer;
    transition: 0.2s  !important;
    scale: 0.8 !important;
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
  @media (max-width: 900px){
        #name{
            line-height: 10cm;
            font-size: 2.5em;
        }
    } @media (min-width: 900px) and (max-width: 1200px){
        #name{
            line-height: 5cm;
        }
    }
</style>


<body class="fade-in" style="display:block !important;">
    
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
              <a class="menu-link" href="#">
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
                            <p id="name">Meu Carrinho</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->


            <br>
<br>
            <div class="container container-RESP">
            <div class="row">

   
<!--CARD PRODUTO-->
<?php

require '../model/manager.php';
if(ISSET($_SESSION['USER-ID'])){
    
$id= $_SESSION['USER-ID'];
$dados= carrinho($id);
if($dados['result']=="0"){
    echo "
    
    <div class=\"col-12 vazio-col\">
    <br>
<p class=\"vazio_p\">
    Seu carrinho está vazio, veja nosso catálogo de <a href=\"shop.php\" class=\"produtos_a\">produtos</a>!
</p></div>
</div>
        </div>

    
    ";
}else{
    echo "<div class=\"col-8\">";
    $valortotal = '0';
    for($i=0;$i<$dados['num'];$i++){
    $produto = produtoBusca($dados[$i]['id_produto']);
    $valor= $dados[$i]['quantidade'] * $produto['valor'];
    
    $valortotal = $valortotal+ $valor;
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
  <button class=\"decrease-quantity\" onclick=\"quant('sub','".$dados[$i]['id_carrinho']."','".$dados[$i]['quantidade']."','".$dados[$i]['id_produto']."')\"><i class=\"fa-solid fa-minus\"></i></button>
  <span id=\"quantidade\">".$dados[$i]['quantidade']."</span>
  <button class=\"increase-quantity\" onclick=\"quant('add','".$dados[$i]['id_carrinho']."','".$dados[$i]['quantidade']."','".$dados[$i]['id_produto']."')\"><i class=\"fa-solid fa-plus\"></i></button>
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
  <br>
    ";}
    
    ?>
 

    
    
  

<!-- FINAL CARD PRODUTO-->
















<hr id="hr-div"></hr>
<br>
<a href="shop.php" id="voltar">Voltar às compras</a>


                    </div>

                    <div class="col-4">
                    <div class="card subtotal_card">
  <div class="card-body">
 <table> <tr class="subtotal_row font"><td><b>Subtotal</b></td><td class="valor_div">R$<?php echo $valortotal; ?></td></tr>
 </table>
<table class="margin-table">
<tr class="subtotal_row"><td class="frete">Tributos e Frete calculados na finalização da compra</td></tr></table>
<tr><td class="button_final">
    <a type="submit" class="button" href="checkout.php?valor=<?php echo $valortotal; ?>" value="<?php echo $_SESSION["USER-ID"]; ?>" name="btnCarrinho">Finalizar Compra</a>
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
     function quant(op,id,quant,idprod){
        quant = parseInt(quant);
         if (quant == "1" && op == 'sub'){
            excluir(id)
         }else{
            location.href="../controller/controller_client.php?quantidade_op="+op+"&id="+id+"&quant="+quant+"&idprod="+idprod;
     }}
     

     function excluir(id){
    if(confirm("Deseja excluir esse produto do seu carrinho?") == true){
        location.href="../controller/controller_client.php?excluir_prod="+id;
        
    }else{
       return false;
    }
}




    </script>



<?php }} }else{ header("Location: login.php?fase=2"); }?>


</body>
</html>