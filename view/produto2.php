<!DOCTYPE html>
<html lang="en">
<?php
          $id = $_GET['id'];
          require "../model/manager.php";
          
          $dados = pega_produto($id);?>
<head>
  <link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">
  <meta charset="UTF-8">
  <link rel="shortcut icon"   href="../assets/media/yara.ico" type="image/x-icon" sizes="128x128">
    <link rel="shortcut icon" href="../assets/media/yara.ico" type="image/x-icon" sizes="32x32">
    <link rel="shortcut icon" href="../assets/media/yara.ico" type="image/x-icon" sizes="64x64">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Yara | <?php echo $dados["nome"] ?></title>
  <link rel="stylesheet" href="../assets/style/globalV2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <link
    href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=body_test&display=swap"
    rel="stylesheet">
  <link href="https://www.cdnfonts.com/glacial-indifference-2.font" rel="stylesheet">
</head>
<?php

session_start();
if (!isset($_GET["id"])){
 
echo '<script>window.location.href = "shop.php";</script>';
}else{
?>
<style>
  /*MENU*/

  .menu.fixed {
        margin: 0px;
        box-shadow: 0 0 30px rgba(0, 0, 0, .051);

        top: 0;
        height: 80px;
        position: fixed;
        background-color: hsla(0, 0%, 99.6%, .7) !important;
        -webkit-backdrop-filter: blur(30px) !important;
        backdrop-filter: blur(10px) !important;
        z-index: 99999999;
    }
    .modal.fade.show{
        background-color: #00000057;
        -webkit-backdrop-filter: blur(30px) !important;
        backdrop-filter: blur(10px) !important;
    }
    /* menu */
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
        z-index: 99999999;
    }

    .logo {
        font-family: 'Berkshire Swash';
        font-size: 2.14rem;
        text-decoration: none !important;
        color: #000;
        cursor: pointer;
    }

    .logo:hover {
        font-family: 'Berkshire Swash';
        font-size: 2.14rem;
        text-decoration: none !important;
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
        font-size: 14px;
        font-weight: bold;
        color: #000;
        text-decoration: none !important;
    }

    .menu-link:hover {
        font-family: "Questrial", sans-serif;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
    }

    a.menu-link:hover {
        color: #000 !important;
        text-decoration: underline;
    }

    a.logo:hover {
        color: #f0f0f0 !important;
        text-decoration: underline;
    }

    .a-home,
    .a-shop,
    .a-sobre {
        position: relative;
        color: #000;
        text-decoration: underline;
    }

    .a-home:before,
    .a-shop:before,
    .a-sobre:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 2px;
        bottom: -1px;
        left: 0;
        background-color: #000;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    .a-home:hover:before,
    .a-shop:hover:before,
    .a-sobre:hover:before {
        visibility: visible;
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }

    .icon-bag,
    .icon-user {
        margin-top: -10px;
    }

    .modalJusti {
        display: flex;
        flex-direction: row;
        justify-content: end;
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

        .btn-modal,
        .btn-modal:active,
        .btn-modal:hover,
        .btn-modal::before {
            border: none;
            background-color: transparent;
            border: transparent;
            box-shadow: none;
            outline: none;
            color: #000;
        }
        .modal-header.modalJusti{
            border: none;
        }
        .modal-content {
            border-radius: 30px;
            border-style: none;
            background-color: hsla(0, 0%, 99.6%, .7) !important;
            -webkit-backdrop-filter: blur(30px) !important;
            backdrop-filter: blur(10px) !important;
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
  body {
    overflow-x: hidden;
  }

  .owl-stage {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .owl-item .item {
    width: auto !important;
  }


  .carouselCard_Index {
    height: 24rem !important;
  }

  .card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    overflow: hidden;
    background-color: #fff;
    background-clip: border-box;
    border: none !important;
    border-radius: 30px;
  }

  .card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 0.25rem;
  }


  .prod_dec {
    justify-content: center;
    align-items: center;
    display: flex;
    margin-top: -4%;
  }

  .minor_senctsML {
    color: var(--soft-green);
    opacity: .8;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 500;
  }

  .product-details {
    height: 100%;
    display: flex;
    transform: scale(1.2);
    flex-direction: column;
    justify-content: center;
  }

  @media (max-width: 1370px) {
    .product-details {
      transform: scale(1);
    }

    .transformAutoImg {
      transform: scale(1) !important;
    }
  }
  .mb-4 {
        margin-bottom: 1rem !important;
    }

    .abnt-normal {
        line-height: 1.625 !important;
    }

    .text-sm {
        font-size: .875rem;
        line-height: 1.5;
    }

    .font-light {
        font-weight: 300;
    }

    .BodyFont-primary {
        font-family: var(--body-font);
    }

    .TitleFont-primary {
        font-family: var(--title-font);
    }

    @media (min-width: 1024px) {
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    @media (min-width: 768px) {
        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }
    }

    .tracking-wide {
        letter-spacing: .025em;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #2d333a;
        color: rgba(45, 51, 58, var(--text-opacity));
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .leading-snug {
        line-height: 1.375;
    }

    .text-xs {
        font-size: .75rem;
        line-height: 1.5;
    }

    .font-semibold {
        font-weight: 600;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .inline-block {
        display: inline-block;
    }

    .border {
        border-width: 1px;
    }

    .border-solid {
        border-style: solid;
    }

    .rounded {
        border-radius: 0.25rem;
    }

    .border-gray-500 {
        --border-opacity: 1;
        border-color: #2d333a;
        border-color: rgba(45, 51, 58, var(--border-opacity));
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity));
    }

    .transition--default {
        transition-property: all;
        transition-duration: .5s;
        transition-timing-function: cubic-bezier(0, 0, .2, 1);
    }

    @media (min-width: 1024px) {
        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    @media (min-width: 768px) {
        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }
    }

    .tracking-wide {
        letter-spacing: .025em;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #2d333a;
        color: rgba(45, 51, 58, var(--text-opacity));
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .leading-snug {
        line-height: 1.375;
    }

    .text-xs {
        font-size: .75rem;
        line-height: 1.5;
    }

    .font-semibold {
        font-weight: 600;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .inline-block {
        display: inline-block;
    }

    .border {
        border-width: 1px;
    }

    .border-solid {
        border-style: solid;
    }

    .rounded {
        border-radius: 0.25rem;
    }

    .border-gray-500 {
        --border-opacity: 1;
        border-color: #2d333a;
        border-color: rgba(45, 51, 58, var(--border-opacity));
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity));
    }

    a {
        transition-property: all;
        transition-duration: .5s;
        transition-timing-function: cubic-bezier(0, 0, .2, 1);
        background-color: transparent;
        color: inherit;
        text-decoration: inherit;
    }

    * {
        box-sizing: border-box;
        border: 0 solid #abadb0;
    }

    @media (min-width: 1024px) {
        .pb-28 {
            padding-bottom: 7rem;
        }
    }

    @media (min-width: 768px) {
        .pb-16 {
            padding-bottom: 4rem;
        }
    }

    .w-full {
        width: 100%;
    }

    .pb-12 {
        padding-bottom: 3rem;
    }

    .mb-12 {
        margin-bottom: 3rem;
    }

    .items-center {
        align-items: center;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    img {
        max-width: 99.8%;
    }

    .text-left {
        text-align: left;
    }

    .w-300 {
        font-weight: 300;
    }

    ul.list-unstyled li {
        transform: translateX(0px);
        color: inherit;
        transition: all .3s cubic-bezier(0.47, 0, 0.745, 0.715);
    }

    ul.list-unstyled li:hover {
        transform: translateX(5px);
        color: inherit;
        color: white;
    }

    .link__footer:hover {
        opacity: 1 !important;
        color: white;
    }



  .logo {
    color: #000;
  }

  section {

    height: 100vh;
  }

  .container {
    margin: 0 !important;
  }

  .produto {
    margin-top: calc(51.60px + 4vh);
    margin-left: 0%;
    padding-bottom: 2%;
    margin-top: 5cm;
    margin-bottom: 5cm;
  }

  .card.transparent {
    background-color: transparent !important;
  }
  .vermelho {
  color: red;
transition: 0.3S;
}
.form-control{
  transition: 0.3s !important;
}

.fade-in-title {
    opacity: 0;
    animation: fadeIn 0.6s ease-in forwards;
    animation-delay: 0.3s; 
  }
  
.fade-in {
    opacity: 0;
    animation: fadeIn 0.5s ease-in-out forwards;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }
</style>
<body class="fade-in">
  <header onselectstart="return false">
    <div class="menu">
        <a class="logo jsChangeColor" href="#">
            Yara.
        </a>
        <div class="menu-links">
            <a class="menu-link a-home  jsChangeColor" href="../index.php">Home</a>
            <a class="menu-link a-shop  jsChangeColor" href="shop.php">Shop</a>
            <a class="menu-link a-sobre jsChangeColor" href="#">Sobre</a>
            <!-- ícone user -->
            <a class="menu-link jsChangeColor" href="meuperfil.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-user icon-tabler icon-tabler-user-circle"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                </svg>
            </a>
            <!-- ícone carrinho -->
            <a class="menu-link jsChangeColor" href="carrinho.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon-bag icon-tabler icon-tabler-shopping-bag"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                    </path>
                    <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                </svg>
            </a>
        </div>

        <!-- área responsiva do menu -->
        <button type="button" class="btn-modal " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <!-- ícone menu -->
            <svg xmlns="http://www.w3.org/2000/svg" class="jsChangeColor icon icon-tabler icon-tabler-menu-2" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 6l16 0"></path>
                <path d="M4 12l16 0"></path>
                <path d="M4 18l16 0"></path>
            </svg>
        </button>
        <!-- modal -->
        <div class="modal fade modalMenu__mob" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modalJusti">
                        <button type="button" id="insideMobMenu__closeBTN"
                            class="btn-close btn-modal mobileMenu__closeBTN" width="32" height="32"
                            data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" /></svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <a class="menu-link" href="../index.php">Home</a>
                        <a class="menu-link" href="shop.php">Shop</a>
                        <a class="menu-link" href="#">Sobre</a>
                        <a class="menu-link" href="meuperfil.php">Login</a>
                        <a class="menu-link" href="carrinho.php">Sacola</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
  <section class="produto container-fluid fade-in-title">
    <div class="container main__containerEQUAL" style="margin-left: 0;">
      <div class="row d-flex g-3">
        <div class="col-md-6 col-12 pb-3 img__produto_pag">
          <form action="../controller/controller_compra.php?adicionar_prod=1" method="post" name="form" id="add">
          <?php
          if(isset($_SESSION["USER-ID"])){$id_user=$_SESSION["USER-ID"];}
          else{$id_user="";}
          echo"
          <input type=\"hidden\" value=\"".$id."\" name=\"id\">
          <input type=\"hidden\" value=\"". $id_user ."\" name=\"cliente\">
          <input type=\"hidden\" value=\"".$dados["valor_uni"]."\" name=\"preco\">          
          <input type=\"hidden\" value=\"".$dados["nome"]."\" name=\"nome\">          
          ";
          ?>
          <img class="transformAutoImg img-fluid" width="120%"
            src="media/<?php echo $dados["img"]; ?>"
            class="img-fluid" alt="Imagem do produto">
        </div>
        <div class="col-md-6 col-12 mb-3 prod_dec pl-6 p-7">
          <div class="product-details">
            <!--                <span class="minor_senctsML pb-2">13 Scents   ·   15ML</span>-->
            <h4 class="prod_title  pb-1"><?php echo $dados["nome"];?></h4>
            <p class="value_prod  pb-2">R$<?php echo $dados["valor_uni"];?></p>
            <p class="prod_desc"><?php echo $dados["descricao"];?></p>
            <!-- <p>Not suitable for people who have a nut allergy</p> -->
            <div class="row pb-5">
            
              <div class="col-md-6 col-6">
                <!--                             <label for="QUANT">Quantidade</label>
     --> <select id="QUANT" name="qtd" require class="b_radius30 form-control">
                  <option value="" disabled selected>Quantidade</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>

                </select>
              </div>
            </div><br>
            
            <button type="button" onclick="verif()" name="adicionar_prod" class="b_radius30 buyNow btn btn-primary btn-block" value="<?php echo $dados["id"];?>">Adicionar à cesta</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </section>
  <hr class="hiddenonMajorWindow__separatorProdDesc">
  <section class="produtoDescricao container-fluid">
    <div class="container main__containerEQUAL">
      <div class="row d-md-flex g-3">
        <div class="col-md-6 col-12 mb-3 prod_dec" style="  padding-left: 0;">
          <div class="product-details">
            <div class="card card__descProd">
              <div class="card-header transparent headerNo_border" style="background-color: transparent;"
                id="headingOne">
                <button style="width: 100% !important;" class="collapsed prod_title-muta show text-left" type="button"
                  data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"
                  style="font-size: 2.7rem !important;">
                  Instruções de uso
                </button>
              </div>
              <div id="collapseOne" class="collapse show fade slide-up" aria-labelledby="headingOne"
                data-parent="#accordionExample">
                <div class="card-body">
                  <div class="aria1__cardDesc">
                    <p class="bold">O que é?</p>
                    <div><span><?php echo $dados["descricao"]; ?></span></div>
                  </div>
                  <br>
                  <div class="aria2__cardDesc">
                    <p class="bold">Modo de uso</p>
                    <span class="dot_topic"><?php echo $dados["instrucao"]; ?></span>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion" id="accordionExample">

              <div class="card card__descProd">
                <div class="card-header b-topY transparent card__openHeader" style="background-color: transparent;"
                  id="headingTwo">
                  <h5 class="mb-0">

                    <button class="btn btn-link collapsed btn__org_acc" type="button" data-toggle="collapse"
                      data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <div class="org__accordionCard">
                        <span class="uppercase bold base-green ingred__btn" style="text-decoration: none !important;">
                          Ingredientes</span>
                        <span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 9l6 6l6 -6"></path>
                          </svg>
                        </span>
                      </div>
                    </button>

                  </h5>
                </div>
                <div id="collapseTwo" class="collapse fade slide-up" aria-labelledby="headingTwo"
                  data-parent="#accordionExample">
                  <div class="card-body">
                  <?php echo $dados["ingredientes"]; ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 pb-3">
          <img width="100%" class="img_desc_Prod"
            src=  "media/<?php echo $dados["img_sec"]; ?>"
            class="img-fluid" alt="Imagem do produto">
        </div>
      </div>
    </div>
  </section>
    <hr class="hiddenonMajorWindow__separatorProdDesc-d">

  <section class="parecidos container-fluid container__prinOutros">
    <div class="container-flex main__containerINequal container__prinOutros">
      <div class="row d-flex flex-column g-3 container__prinOutros" >
        <div class="col-12 mb-3 container__prinOutros container" style="  padding-left: 0;">
          <div class="cotainter_otherProdH">
            <h2 class="prod_title">Talvez você goste</h2>
          </div>

          <div class="container-flex owl-carousel owl-theme">

<?php
$pesquisa = "";
$ordem = "";
$produtos = produtos($pesquisa, $ordem);
  for($i=0;$i<=8;$i++){
      if($produtos[$i]["status"] == '1'){
      echo "   <div class=\"item\">
      <a href=\"produto2.php?id=".$produtos[$i]["id"]."\" class=\"card card__prod\">
        <div class=\"img__container\">
          <img src=\"media/".$produtos[$i]["img"]."\" alt=\"Imagem do produto \">
          </div>
          <div class=\"d-flex flex-column align-items-center\">
            <span class=\"description mb-2 text-gray-500 text-xl mt-2\">".$produtos[$i]["nome"]."</span>
            <span class=\"price mb-2 text-gray-500 text-md\">R$".$produtos[$i]["valor_uni"]."</span>
            </div>
            </a>
          </div>
          
  ";

}}
?>

          
                   
              
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer onselectstart="return false" class="container-fluid text-light py-5" style="background-color: #1b1f23;">
        <div class="row">
            <div class="col-12 hidden_onMajorFooter mb-3">
                <div class="row rowNavFooter">
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Explore</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Home</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="view/shop.html">Shop</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="view/sobre.html">Sobre</a>
                            </li>
                        </ul>
                    </div>
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Contato</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" target="_blank"
                                    href="mailto:yaraskincare.corp@gmail.com?subject=Dúvida">info@yaracorp.com</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" target="_blank"
                                    href="api.whatsapp.com/send?phone=+5511963208060">+55 11 98328-3252</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" target="_blank" onclick="redirecionarParaMapa()">Av.
                                    Magalhães de Castro, 12.000</a>
                            </li>
                        </ul>
                    </div>
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Privacidade</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Entrega & Devolução</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Termos & condições</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Política de Privacidade</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 superMajorAriaa mb-3" style="width: 100%;">
                <div class="col-12 d-flex flex-column divColMdFooter opacity-08 text-justify" style="width: 70%;">
                    <p> Junte-se à família Yara: Inscreva-se agora para receber notificações exclusivas!</p>
                    <div class="input-group mb-3 d-flex gap5">
                        <input type="text" class="form-control inputInscreva" placeholder="Seu telefone">
                        <button class="btn btn-primary buttonInscreva btn__footerInsc" type="button">Inscrever</button>
                    </div>
                    <div class="social__port">
                        <a href="https://api.whatsapp.com/send?phone=+5511963208060" target="_blank"
                            class="social__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                <path
                                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="social__icon" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                                <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/yaraclass/" class="social__icon" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                </path>
                                <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M16.5 7.5l0 .01"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 hidden_onMobileFooter">
                <div class="row rowNavFooter">
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Explore</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Home</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="view/shop.html">Shop</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="view/sobre.html">Sobre</a>
                            </li>
                        </ul>
                    </div>
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Contato</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" target="_blank"
                                    href="mailto:yaraskincare.corp@gmail.com?subject=Dúvida">info@yaracorp.com</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" target="_blank"
                                    href="https://api.whatsapp.com/send?phone=+5511963208060">+55 11 98328-3252</a>
                            </li>
                            <li class="opacity-08" style="cursor: pointer;">
                                <a class="opacity-08 link__footer" target="_blank"
                                    onclick="redirecionarParaMapa()">Shopping Cidade Jardim</a>
                            </li>
                        </ul>
                    </div>
                    <div class="column_footer">
                        <h4 class="rem1 uppercase bold">Privacidade</h4>
                        <ul class="list-unstyled">
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Entrega & Devolução</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Termos & condições</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="#">Política de Privacidade</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-pbDocPort mt-4">
            <span class="copyright__port"> © 2023 Yara · All Rights Reserved </span>
            <span class="text-end"> Yara Corporation </span>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script defer=""
      src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
      integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
      data-cf-beacon="{&quot;rayId&quot;:&quot;7fcd9b1b58890112&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;r&quot;:1,&quot;token&quot;:&quot;57216246a37e41f6ac8b70d8066ce291&quot;,&quot;si&quot;:100}"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
      integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="../assets/js/menuMobile.js"></script>
      <script>
                window.addEventListener("scroll", function () {
            var menu = document.querySelector(".menu")
            var scrollPosition = window.scrollY;
            if (scrollPosition > 150) {
                menu.classList.add("fixed")
            } else {
                menu.classList.remove("fixed")
            }
        });
      </script>
    <script>
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
          0: {
            items: 2
          },
          600: {
            items: 3
          },
          1000: {
            items: 4
          }
        }
      })
    </script>
    <script>
      function reloadPage() {
    location.reload();
}

window.addEventListener('resize', function() {
    clearTimeout(window.reloadTimer);
    
    window.reloadTimer = setTimeout(reloadPage, 100); // Tempo em milissegundos (200ms no exemplo)
});
    </script>
    <script>
      function verificarChevron() {
        var collapseTwo = document.getElementById('collapseTwo');
        var chevronDown = document.querySelector('.icon-tabler-chevron-down');

        if (!collapseTwo.classList.contains('show')) {
          chevronDown.style.transform = "rotate(0deg)";
        } else {
          chevronDown.style.transform = "rotate(180deg)";
        }
      }

      document.addEventListener('DOMContentLoaded', function () {
        verificarChevron();

        setInterval(verificarChevron, 100);
      });

function verif(){
  var form = document.getElementById("add")
  var select = document.getElementById('QUANT');
      var valorSelecionado = select.value;

      if (valorSelecionado === '') {
        
        form.preventDefault;

        select.classList.add('vermelho');
  setTimeout(function() {
    select.classList.remove('vermelho');
  }, 3000);
      }

      else{
        form.submit();
      }
    }


    </script>


</body>

</html>
<?php } ?>