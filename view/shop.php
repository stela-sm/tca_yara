<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Yara | Produtos</title>
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
    <script src="assets/js/animator.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=body_test&display=swap"
        rel="stylesheet">
    <link href="https://www.cdnfonts.com/glacial-indifference-2.font" rel="stylesheet">

</head>
<?php
session_start();?>
<style>
    /*MENU*/
    

    /*FIM MENU*/
    .majorFormula {
        padding-top: 7rem;
        padding-bottom: 7rem;
    }

    @media (min-width: 1024px) {
        .conectionToShop {
            width: 33.333333%;
            padding-left: 2rem;
            padding-right: 0;
        }
    }

    @media (min-width: 768px) {
        .infCrsl_index {
            width: 100%;
        }

        .col-md-3.infCrsl_inde,
        .col-md-4.infCrsl_inde,
        .col-md-5.infCrsl_inde {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 100% !important;
        }
    }

    @media (min-width: 768px) {

        .col-md-3,
        .col-md-4,
        .col-md-5 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 100% !important;
        }
    }

    @media (min-width: 640px) {
        .sm_2x1 {
            font-size: 1.6rem;
            line-height: 1.25;
        }

        .text-green-500 {
            --text-opacity: 1;
            color: #2d333a;
            color: rgba(45, 51, 58, 1);
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

    .container-pb {
        padding-left: calc(2rem + 1.4%);
        padding-right: calc(2rem + 1.4%);
    }

    .hero {
        background-image: url(https://www.rockymountainsoap.com/cdn/shop/collections/FaceCare-2_1600x.jpg?v=1683151878);
        /*background-image: url(https://images.pexels.com/photos/807598/pexels-photo-807598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);*/
        background-size: cover;
        background-repeat: no-repeat;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        background-blend-mode: darken;
        background-color: #000000ce;
    }


    .color-white {
        color: white;
    }

    .navbar {
        justify-content: space-between;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .navbar-logo {
        display: block;
        width: 67px;
        font-size: 2.14rem !important;
    }

    ion-icon {
        font-size: 1.7rem;
    }

    .h-90 {
        height: 90%;
    }

    .carousel-ab {
        top: 5%;
    }

    .right-0 {
        right: 0;
    }

    #heightImportant {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .js.anime {
        opacity: 0;
        transform: translate3D(0px, 100px, 0px);
    }

    .js.anime-init {
        opacity: 1;
        transform: translate3D(0px, 0px, 0px);
        transition: .3s all ease;
    }

    .owl-stage {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .owl-item .item {
        width: 15rem !important;
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

    .img__cardIndex {
        border-radius: 30px;
        height: 100%;
        overflow: hidden;
    }

    .img__cardIndex img {
        width: 100%;
        height: 100%;
    }

    .owl-carousel {
        height: 100%;
    }

    .owl-stage-outer {
        height: 100%;
    }

    .owl-stage {
        height: 100%;
    }

    .carousel-progress {
        position: absolute;
        height: 2px;
        bottom: 15%;
        left: 0;
        width: 40%;
        border-radius: 10px;
        background-color: #87ab85;
    }

    .pdR-8cent {
        padding-right: 8%;
    }

    .progress-bar {
        height: 100%;
        width: 0;
        border-radius: 10px;
        background-color: #1a3d1f;
        transition: width 0.3s;
    }

    .produtos_cards_btn {
        text-decoration: none !important;
    }

    .produtos_cards_btn:hover {
        background-color: var(--soft-green) !important;
        color: #f0f0f0 !important;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.301);

    }

    .softGreen-bg {
        background-color: var(--soft-green);
    }

    .baseGreen-bg {
        background-color: var(--base-green);
    }

    .item.card-igOwl {
        height: auto !important;
    }

    .nom-prod {
        font-family: var(--title-font);
    }

    html,
    body,
    section {
        block-size: 100%;
    }

    html {

        scroll-behavior: smooth !important;
    }

    body {
        overflow-x: hidden;

    }

    section {
        height: 100vh;
        scroll-snap-align: start;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    * {
        box-sizing: border-box;
    }

    .box_anim {
        transform: translateX(400%);
        transition: transform .4s ease;
    }

    .box_anim:nth-of-type(even) {
        transform: translateX(-400%);
    }

    .box_anim.show {
        transform: translateX(0);
    }



    .body__font {
        font-family: var(--body-font) !important;
    }

    .aria_filter {
        justify-content: space-between;
        display: flex;
        flex-direction: row;
        align-items: center;

    }



    .justify-content-left {
        justify-content: left !important;
    }

    .justify-content-right {
        justify-content: right !important;
    }

    .search__navBar {
        background-color: transparent;
        max-width: 88%;
    }

    

    .junctionIonInp {
        display: flex;
    flex-direction: row;
    justify-content: center;
    padding: 1%;
    align-items: center;
    border: 1.6px solid var(--base-green);
    border-radius: 30px;
    font-size: 16px;
    color: var(--base-green);
    }

    .junctionIonInp ion-icon {
        font-size: 1.1rem;
        color: var(--base-green);
    }
    #hero{
        padding: 11%;
    }
    .viewportHero{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

.noresult{
    font-family: 'Questrial';
    height: 50vh;
    display: flex;
    font-size: 1.3em;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100vw;
}
.orderByTitle{
    font-family: 'Questrial';
    border: 1px gray solid;
    padding: 10px 15px;
    border-radius: 20px;
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
    font-family: 'Questrial', sans-serif;
    font-size: 14px;
    font-weight: bold;
    color: white;
    text-decoration: none !important;
}

.menu-link:hover {
    font-family: "Questrial", sans-serif;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
}

a.menu-link:hover {
    color: var(--soft-green) !important;
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
  background-color: var(--soft-green);
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

.fade-in {
    opacity: 0;
    animation: fadeIn 0.2s ease-in forwards;
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
    <header>
        <div class="menu">
          <a class="logo" href="#">
            Yara.
          </a>
          <div class="menu-links">
            <a class="menu-link a-home" href="../index.php">Home</a>
            <a class="menu-link a-shop" href="#">Shop</a>
            <a class="menu-link a-sobre" href="sobre.html">Sobre</a>
            <!-- ícone user -->
            <a class="menu-link" href="meuperfil.php">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-user icon-tabler icon-tabler-user-circle" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
              </svg>
            </a>
            <!-- ícone carrinho -->
            <a class="menu-link" href="carrinho.php">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon-bag icon-tabler icon-tabler-shopping-bag" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path
                  d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                </path>
                <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
              </svg>
            </a>
          </div>
    
          <!-- área responsiva do menu -->
          <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <!-- ícone menu -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
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
                  <button type="button" class="btn-close btn-modal" width="32" height="32" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <a class="menu-link" href="../index.php">Home</a>
                  <a class="menu-link" href="#">Shop</a>
                  <a class="menu-link" href="sobre.html">Sobre</a>
                  <a class="menu-link" href="#">Login</a>
                  <a class="menu-link" href="carrinho.php">Sacola</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    <main class="shop">
        <div class="viewport_shop">
            <section class="bg-white scrollPart_anim1 hero" id="hero" onselectstart="return false">
                <div class="herocurtain"></div>
                <div class="position-relative slogan viewportHero d-flex flex-row justify-center color-white">
                    <h1 class="TitleFont-primary">Explore a linha Yara e experimente o poder da natureza em cada gota. Sua pele merece esse carinho</h1>
                </div>
            </section>
            
            <div>
                <div class="container__prodV2">
                    <div class="container__prodA2">
                        <div class="row  aria_filter d-flex flex-row">
                            <div class="col-6 searchBar d-flex flex-row justify-content-left">
                                <div class="pL-4 junctionIonInp">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                        <path d="M21 21l-6 -6"></path>
                                     </svg>
                                   
<form action="shop.php"  method="get" name="search_form">
 <input type="search" name="search_Prod" id="" class="search__navBar"
                                        placeholder="Pesquisar...">
</form>        
                                </div>
                            </div>
                            <div class="col-6 orderbyDiv d-flex flex-row justify-content-right">
                                <div class="pR-4">
                              <select name="orderby" class="orderByTitle" id="orderby" onchange="ordem()">
                                        <option selected value="0" class="orderByTitle">Ordenar por</option>
                                       <option value="shop.php?ordem=" > <a >Mais vendidos</a></option></form>
                                        <option value="shop.php?ordem=ASC" ><a  >Menor preço</a></option>
                                        <option value="shop.php?ordem=DESC" ><a  >Maior preço</a></option>
                                    </select>
                                </div>
                            </div>
                        </div>
        
                    </div>
                   
                   
                   <?php
                   
                   require '../model/manager.php';
                   if((!isset($_GET["search_Prod"]))){
                    $pesquisa = "";
                  }else{
                    $pesquisa = $_GET["search_Prod"];
                  }                    
                  if((!isset($_GET["ordem"]))){
                    $ordem = "";
                  }else{
                    $ordem = $_GET["ordem"];
                  }  
                    $dados = produtos($pesquisa,$ordem);
                    if ($dados["result"]!=0){
                        echo "<div class=\"container__prod\">";
                        for($i=0;$i<$dados["num"];$i++){
                            if($dados[$i]["status"] == '1'){
                            echo " <a href=\"produto2.php?id=".$dados[$i]["id"]."\" class=\"card card__prod\">
                            <div class=\"img__container\">
                                <img src=\"media/".$dados[$i]["img"]."\"
                                    alt=\"Imagem do produto 1\">
                            </div>
    
                            <div class=\"d-flex flex-column align-items-center\">
                                <span class=\"description mb-2 text-gray-500 text-xl mt-2\">".$dados[$i]["nome"]."</span>
                                <span class=\"price mb-2 text-gray-500 text-md\">R$".$dados[$i]["valor_uni"]."</span>
                            </div>
                        </a>
                        ";

                    }}}else{
                        echo "<div class\"container-flex\"><div class=\"col-12 noresult\"> Sua busca não resultou nenhum produto, tente buscar termos diferentes!</div></div>";
                    };


                   ?>
                   
                   
                       
                    
                    
                    
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
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
    <div class="cursor"></div>
    <script>
function ordem(){
    var selectElement = document.getElementById("orderby");
            var selectedValue = selectElement.value;

            if (selectedValue) {
                window.location.href = selectedValue;
            }
        
}

        window.addEventListener("scroll", function () {
            var menu = document.querySelector(".menu")
            var links = document.querySelectorAll(".jsChangeColor")
            var scrollPosition = window.scrollY;

            if (scrollPosition > 150) {
                menu.classList.add("fixed")
                menu.style.top = "0%"
                links.forEach((element, index) => {
                    element.style.color = "#000";
                })
            } else {
                menu.classList.remove("fixed")
                menu.style.top = "2%"
                links.forEach((element, index) => {
                    element.style.color = "#fff";
                })
            }
        });
    </script>

    <script>
        const boxes = document.querySelectorAll('.box__left')
        const boxesR = document.querySelectorAll('.box__right')
        window.addEventListener('scroll', checkBoxes)

        function checkBoxes() {
            const triggerBottom = window.innerHeight / 5 * 4
            boxes.forEach(box => {
                const boxTop = box.getBoundingClientRect().top
                if (boxTop < triggerBottom) {
                    box.classList.add('show')
                } else {
                    box.classList.remove('show')
                }
            })
            boxesR.forEach(box2 => {
                const boxTop2 = box2.getBoundingClientRect().top
                if (boxTop2 < triggerBottom) {
                    box2.classList.add('show')
                } else {
                    box2.classList.remove('show')
                }
            })
        }
        checkBoxes()
    </script>

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
</body>

</html>
