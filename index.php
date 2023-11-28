<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/media/yara.ico" type="image/x-icon" sizes="128x128">
    <link rel="shortcut icon" href="assets/media/yara.ico" type="image/x-icon" sizes="32x32">
    <link rel="shortcut icon" href="assets/media/yara.ico" type="image/x-icon" sizes="64x64">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/globalV2.css">
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

    <link
        href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=body_test&display=swap"
        rel="stylesheet">
    <link href="https://www.cdnfonts.com/glacial-indifference-2.font" rel="stylesheet">
    <title>Yara | Início</title>

</head>
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
        font-size: 16px;
        font-weight: bold;
        color: #000;
        text-decoration: none !important;
    }

    .menu-link:hover {
        font-family: "Questrial", sans-serif;
        font-size: 16px;
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

    .majorFormula {
        padding-top: 15rem;
        padding-bottom: 15rem;
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
        padding-left: 4rem;
        padding-right: calc(2rem + 1.4%);
    }

    .hero {
        overflow: visible;
        display: flex;
        flex-direction: row;
        height: 100vh;
        width: 100vw;
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
        margin-top: 35px;
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

    .vh_section {
        height: 100vh;
        scroll-snap-align: start;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .Mvh_section {
        height: 50vh;
        scroll-snap-align: start;
        display: flex;
        align-items: center;
        margin-bottom: 3%;
        justify-content: center;
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

    .aria1_carousel {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .img__cardIndex {
        background-color: #f5f5f5;
        transition: all .3s cubic-bezier(0.47, 0, 0.745, 0.715);
    }

    .img__cardIndex:hover {
        background-color: #eaebeb !important;
    }

    video.index__video {
        object-fit: cover;
        position: absolute;
        min-width: 100%;
        height: auto;
        min-height: 100%;
    }

    /*RESPONSIVIDADE GERAL*/
    @media (max-width: 1024px) {
        .img_index_info {
            display: none;

        }

        .col-md-6.text-center {
            width: 100% !important;
        }

        .col-md-6.text-center.box__right {
            padding-left: 0 !important;
        }

        .yara-cursor {
            display: none !important;
        }

        .aria2_carousel {
            display: none;
        }

        .aria1_carousel {
            width: 100% !important;
        }

        .customCarouselIndicator {
            margin-left: 2.8% !important;
            display: flex !important;
            flex-direction: row !important;
            justify-content: center !important;
        }
    }

    .video__curtain {
        background-color: #000000c2;
        position: absolute;
        width: 100vw;
        height: 100vh;
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

    section {
        overflow: visible;
    }
    
.fade-in {
    opacity: 0;
    animation: fadeIn 0.4s ease-in forwards;
  }
  .fade-in-title {
    opacity: 0;
    animation: fadeIn 0.6s ease-in forwards;
    animation-delay: 0.7s; 
  }
  
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

    /*FIM RESPONSIVIDADE GERAL*/
</style>

<body onload="menu__onload()" class="fade-in">
    <!-- menu -->
    <header>
        <div class="menu">
            <a class="logo jsChangeColor" href="#">
                Yara.
            </a>
            <div class="menu-links">
                <a class="menu-link a-home  jsChangeColor" href="#">Home</a>
                <a class="menu-link a-shop  jsChangeColor" href="view/shop.php">Shop</a>
                <a class="menu-link a-sobre jsChangeColor" href="view/sobre.html">Sobre</a>
                <!-- ícone user -->
                <a class="menu-link jsChangeColor" href="view/login.php">
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
                <a class="menu-link jsChangeColor" href="view/carrinho.php">
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
                            <a class="menu-link" href="#">Home</a>
                            <a class="menu-link" href="VIEW/shop.php">Shop</a>
                            <a class="menu-link" href="view/sobre.html">Sobre</a>
                            <a class="menu-link" href="view/meuperfil.php">Login</a>
                            <a class="menu-link" href="view/carrinho.php">Sacola</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="index">
        <div class="viewport_index">
            <section class="bg-white scrollPart_anim1 hero" id="hero" onselectstart="return false">
                <div class="herocurtain">
                    <video id="heroBanner" disablepictureinpicture class="index__video" autoplay muted loop>
                        <source src="assets/media/Yara_video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="video__curtain"></div>
                <div class="position-relative fade-in-title slogan viewportHero d-flex flex-row justify-center color-white">
                    <h1 class="TitleFont-primary" style="font-size: 5rem;text-align: center;">Sua beleza, sua história
                    </h1>
                </div>
            </section>
            <section class=" scrollPart_anim majorFormula gallery__item  bg-white position-relative"
                style="    height: auto !important;" id="heightImportant">
                <div class="container-fluid">
                    <div class="row rowVeryImportant rowSectionTXT__carouselMB-includeShopHTML">
                        <div data-speed=".9" class=" conectionToShop gallery__left box__left">
                            <div  class="col-md-4 text-center box__left paddingOnResponsiveLeftBox">
                                <h4 class="title_section pb-1 TitleFont-primary text-justify" style="margin-left:-2%;"> Destaques</h4>
                                <p style="  margin-left: 0%;" class="desc_section BodyFont-primary text-justify">Os
                                    produtos Yara proporcionam uma experiência singular no cuidado da pele. Com fórmulas
                                    cuidadosamente elaboradas, inteiramente naturais e veganas, nossa linha inspira
                                    autenticidade, nutrindo e realçando a beleza da sua pele de maneira consciente e
                                    altamente eficaz.</p><br>
                                <a href="view/shop.php" class="b_radius30 viewNow btn btn-primary btn-block">VER TODOS OS
                                    PRODUTOS</a>
                            </div>
                        </div>
                        <div style="overflow: hidden;" id="container__interaShopCarousel" data-speed=".9"
                            id="heightImportant" class=" gallery__right col-md-7">
                            
                            <div class="owl-carousel owl-theme">



                            <?php
                            require 'model/manager.php';
                            $produtos = produtos("","");
                            for($i=0;$i<=5;$i++){
                                if($produtos[$i]["status"] == '1'){
                                echo "   <div class=\"item\">
                                <a href=\"view/produto2.php?id=".$produtos[$i]["id"]."\" class=\"card card__prod nonScale card__prod_index\">
                                  <div class=\"img__container\" >
                                    <img class=\"img__container\" src=\"view/media/".$produtos[$i]["img"]."\" alt=\"Imagem do produto \">
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
        </div>
        </section>
        <section class="vh_section carouselIndex scrollPart_anim5" onselectstart="return false"
            style="height: 80vh !important;">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"
                style="height: 70vh; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
                <ol class="carousel-indicators customCarouselIndicator">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bolinhaCarousel">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-number-1-small"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10l2 -2v8"></path>
                        </svg>
                    </li>
                    <li class="bolinhaCarousel" data-target="#carouselExampleIndicators" data-slide-to="1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-number-2-small"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 8h3a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h3"></path>
                        </svg>
                    </li>
                </ol>
                <div class="carousel-inner h-100cent" >
                    <div class="carousel-item active h-100cent" style="background-color: var(--base-green);">
                        <div class="contentA d-flex flex-row h-100cent" style="width: 100%; ">
                            <div class="aria1_carousel" style="width: 50%">
                                <div class="contentTxt">
                                    <div>
                                        <p
                                            class="font-light abnt-normal text-sm color-white capitalize f3rem title__font super__carouselRep">
                                            Limpeza profunda </p>
                                    </div>
                                    <p class="color-white BodyFont-primary  h2__carousel f1dot5_rem"  style="font-family:'Questrial'; margin-top:-2rem;">Oferecemos uma limpeza profunda e delicada, respeitando a pele. Nossos produtos naturais removem impurezas, revelando a beleza natural. Com ingredientes de qualidade, nossa abordagem holística busca equilíbrio e revitalização. Escolha nossa linha para uma jornada de autocuidado, celebrando sua beleza que brilha de dentro para fora. </p>
                                </div>
                            </div>
                            <div class="aria2_carousel" style="width: 50%;">
                                <img class="d-block w-100 h-100cent"
                                    src="assets/media/bglimpeza.jpg"
                                    alt="Segundo Slide">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item h-100cent secondHidden_car" style="background-color: var(--soft-green);">
                        <div class="contentA d-flex flex-row h-100cent" style="width: 100%;">
                            <div class="aria1_carousel" style="width: 50%">
                                <div class="contentTxt">
                                    <div>
                                        <p
                                            class="font-light abnt-normal text-sm color-white capitalize title__font f3rem super__carouselRep">
                                            Tratamento eficaz</p>
                                    </div>
                                    <p class="color-white BodyFont-primary  h2__carousel f1dot5_rem" style="font-family:'Questrial'; margin-top:-2rem;"> Oferecemos uma linha de cuidados exclusiva com ingredientes naturais, veganos e testados sem crueldade. Nossos produtos farmacêuticos garantem eficácia, sendo recomendados por 9 a cada 10 profissionais de saúde. Proporcionamos uma jornada de cuidados que respeita, realça e celebra a beleza autêntica e única da sua pele, revelando uma radiância duradoura.</p>
                                </div>
                            </div>
                            <div class="aria2_carousel" style="width: 50%;">
                                <img class="d-block w-100 h-100cent"
                                    src="assets/media/Download free image of Green background, water drops frame about water drops, nature photos, drop backgrounds, water, and green textured background drop 3843354.jpeg"
                                    alt="Segundo Slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Mvh_section info_section-I scrollPart_anim4 box__right mobileTXT"
            style="background-color: var(--base-green);">
            <div class="container-pb pb-28">
                <div class="row d-flex flex-row justify-content-center align-center items-center flex-wrap mobileTXT">
                    <div class="col-12 box__left mobileTXTinside mobileTXTinside">
                        <h4 class="title_section pb-1 TitleFont-primary text-left color-white">Limpeza</h4>
                        <p class="desc_section BodyFont-primary text-justify color-white" >A eficácia dos produtos Yara é
                            o resultado de anos de pesquisa e dedicação à qualidade. Desenvolvidos com fórmulas
                            inovadoras e naturais, nossos produtos oferecem resultados visíveis, proporcionando uma
                            experiência de cuidados com a pele excepcionalmente eficaz. </p>
                        <a href="view/shop.html"
                            class="b_radius30 viewNow btn btn-primary btn-block color-white border-white">Descubra</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="Mvh_section info_section-I scrollPart_anim3" style="margin-top: 7%;">
            <div class="container-pb pb-28 secTotalIndex" style="padding-right: 4rem;">
                <div
                    class="positionResp_Ind row d-flex flex-row justify-content-center align-center items-center flex-wrap">
                    <div class="col-md-6 px-8 img_index_info img_indexInfo1">
                        <picture>
                            <img class="borderR-30 " style="width: 90% !important;transform: rotate(62deg);"
                                src="https://mysa-skincare.com/uploads/transforms/bc9e33244d2d8a7bebbefa89bb319b9f/500/Hand-Wash_d3867277feb154defec9b24a5714fadb.webp"
                                alt="Imagem">
                        </picture>
                    </div>
                    <div class="col-md-6 text-center box__right" style="width: 41.666667%;   padding-left: 4rem;
            ">
                        <h4 class="title_section pb-1 TitleFont-primary text-justify">Meio Ambiente</h4>
                        <p style="   margin-left: 2%;"
                            class="desc_section BodyFont-primary text-justify txtcmmarginRight__in">Nossos produtos são
                            cuidadosamente elaborados a partir de ingredientes naturais, colhidos na essência da
                            natureza. Combinamos elementos orgânicos para criar formulações delicadas que nutrem e
                            revitalizam sua pele, respeitando sua beleza única.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="Mvh_section info_section-I  scrollPart_anim4 box__right">
            <div class="container-pb pb-28 secTotalIndex eficazImportant__secIndexanFooter">
                <div
                    class="positionResp_Ind row d-flex flex-row justify-content-center align-center items-center flex-wrap">
                    <div class="col-md-6 text-center box__left" style="width: 41.666667%;
          padding-left: 1.6%;">
                        <h4 class="title_section pb-1 TitleFont-primary text-justify">Nossa especialidade</h4>
                        <p style="    margin-left: 2%;"
                            class="desc_section BodyFont-primary text-justify txtcmmarginLeft__in txtcmmarginRight__in">
                            A eficácia dos produtos Yara é o resultado de anos de pesquisa e dedicação à qualidade.
                            Desenvolvidos com fórmulas inovadoras e naturais, nossos produtos oferecem resultados
                            visíveis, proporcionando uma experiência de cuidados com a pele excepcionalmente eficaz.
                    </div>
                    <div class="col-md-6 px-8  img_index_info img_indexInfo2" style="width: 50% !important;">
                        <picture>
                            <img class="borderR-30 " style="width: 90% !important;transform: rotate(-62deg);"
                                src="https://mysa-skincare.com/uploads/transforms/bc9e33244d2d8a7bebbefa89bb319b9f/496/Cuticle-Oil_2020-10-15-085737_d3867277feb154defec9b24a5714fadb.webp"
                                alt="Imagem">
                        </picture>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </main>
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
                                <a class="opacity-08 link__footer" href="">Home</a>
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
                                <a class="opacity-08 link__footer" href="assets/terms/ENTREGA.pdf">Entrega & Devolução</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="assets/terms/TERMOS.pdf">Termos & condições</a>
                            </li>
                            <li class="opacity-08">
                                <a class="opacity-08 link__footer" href="assets/terms/PRIVACIDADE.pdf">Política de Privacidade</a>
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
    <script>
        function mostrarModal() {
            var btnModal = document.querySelector('.btn-modal');
            var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            var mobileMenu__closeBTN = document.querySelector('.mobileMenu__closeBTN');
            var modalMenu__mob = document.querySelector('.modalMenu__mob');
            var insideMobMenu__closeBTN = document.querySelector('#insideMobMenu__closeBTN');

            btnModal.addEventListener('click', function () {
                modal.show();
                btnModal.classList.add('transparent');
            });

            modal._element.addEventListener('hidden.bs.modal', function () {
                btnModal.classList.remove('transparent');
            });

            if (!modalMenu__mob.classList.contains('show')) {
                mobileMenu__closeBTN.style.display = "block";
            } else {
                mobileMenu__closeBTN.style.display = "none";
            }

            // Garantindo que o botão dentro do modal seja sempre visível
            insideMobMenu__closeBTN.style.display = "block";

            insideMobMenu__closeBTN.addEventListener('click', function () {
                modal.hide();
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            mostrarModal();

            setInterval(mostrarModal, 100);
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/animator.js"></script>
    <script>
        var container = document.getElementById("container__interaShopCarousel");
        var cursor = document.querySelector(".custom-cursor");
        document.addEventListener("mousemove", function (event) {
            cursor.style.display = "block"; // Exibe o cursor
            var containerRect = container.getBoundingClientRect();
            var offsetX = event.clientX - containerRect.left;
            var offsetY = event.clientY - containerRect.top;
            cursor.style.left = offsetX + "px";
            cursor.style.top = offsetY + "px";
        });
        // Verifica periodicamente a posição do cursor
        setInterval(function () {
            var cursorRect = cursor.getBoundingClientRect();
            var cursorLeft = cursorRect.left;
            var cursorTop = cursorRect.top;
            var containerRect = container.getBoundingClientRect();
            var containerLeft = containerRect.left;
            var containerTop = containerRect.top;
            var containerRight = containerLeft + container.offsetWidth;
            var containerBottom = containerTop + container.offsetHeight;
            // Se o cursor estiver fora dos limites, oculta o cursor
            if (cursorLeft < containerLeft || cursorTop < containerTop || cursorLeft > containerRight ||
                cursorTop > containerBottom) {
                cursor.style.display = "none";
                cursor.classList.remove("active");
            } else {
                cursor.style.display = "block";
                cursor.classList.add("active");
            }
        }, 100);
    </script>
    <script>
        function redirecionarParaMapa() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    var destino =
                        "Shopping+Cidade+Jardim+-+Av.+Magalhães+de+Castro,+12.000+-+Cidade+Jardim,+São+Paulo+-+SP,+05502-001"; // Substitua com o endereço de destino
                    var url = `https://www.google.com/maps/dir/${latitude},${longitude}/${destino}`;
                    window.open(url, "_blank");
                });
            } else {
                var url =
                    `https://www.google.com/maps/place/Av.+Magalh%C3%A3es+de+Castro,+12.000+-+Jardim+Panorama,+S%C3%A3o+Paulo+-+SP,+05676-120/@-23.5987839,-46.6974921,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce57307be2503b:0x12bb82312323efb0!8m2!3d-23.5987839!4d-46.6974921!16s%2Fg%2F11bw3ws2wn?entry=ttu`
                window.open(url, "_blank");
            }
        }
    </script>
    <script>
        var video = document.querySelector('#heroBanner');
        video.disablePictureInPicture = true
    </script>
    <script>
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

        function menu__onload() {
            var links = document.querySelectorAll(".jsChangeColor")
            links.forEach((element, index) => {
                element.style.color = "#fff";
            })
        }
    </script>
    <script src="assets/js/packery.pkgd.min.js"></script>
    <script>
        const cursor = document.querySelector(".cursor");
        const links = document.querySelectorAll("nav ul li a");
        const navlinks = document.querySelectorAll("nav ul li");
        document.addEventListener("mousemove", (e) => {
            let leftPosition = e.pageX + 4;
            let topPosition = e.pageY + 4;
            cursor.style.left = leftPosition + "px";
            cursor.style.top = topPosition + "px";
        })
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
    <script src="https://unpkg.com/packery@2/dist/packery.pkgd.min.js"></script>
    <script>
        var root = document.documentElement;
        root.className += ' js';

        function boxTop(idBox) {
            var boxOffset = $(idBox).offset().top;
            return boxOffset;
        }
        $(document).ready(function () {
            var $target = $('.anime'),
                animationClass = 'anime-init',
                windowHeight = $(window).height(),
                offset = windowHeight - (windowHeight / 4);

            function animeScroll() {
                var documentTop = $(document).scrollTop();
                $target.each(function () {
                    if (documentTop > boxTop(this) - offset) {
                        $(this).addClass(animationClass);
                    } else {
                        $(this).removeClass(animationClass);
                    }
                });
            }
            animeScroll();
            $(document).scroll(function () {
                setTimeout(function () {
                    animeScroll()
                }, 150);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('a.smooth-scroll').on('click', function (e) {
                if (this.hash !== '') {
                    e.preventDefault();
                    const target = $(this.hash);
                    const targetOffset = target.offset().top;
                    $('html, body').animate({
                        scrollTop: targetOffset
                    }, 600);
                }
            });
        });
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
    <script>
        // Função para definir a altura da seção com base na altura da janela
        function setSectionHeight() {
            const windowHeight = window.innerHeight;
            const section = document.getElementById("heightImportant"); // Seleciona a seção por ID
            /* section.style.height = windowHeight + "px"; */
        }
        // Chame a função inicialmente e sempre que a janela for redimensionada
        window.addEventListener('load', setSectionHeight);
        window.addEventListener('resize', setSectionHeight);
        /*     hero = document.querySelector('#hero')
            hero.style.Height = window.innerHeight + "px" */
        /* 
            HeightImportant = document.querySelector('#heightImportant')
            heightImportant.style.height = window.innerHeight + "!important" */
        function tamSection() {
            const windowHeight = window.innerHeight;
            const windowHeightper2 = windowHeight / 2;
            const hero = document.querySelector('#hero')
            const ig_section = document.querySelector('#ig_section')
            const aFunJS = document.querySelector('.aFunJS')
            const sections = document.querySelectorAll(".sectionHeight");
            height = window.innerHeight + 100
            hero.style.height = window.innerHeight + "px"
            sections.forEach(section => {
                section.style.height = windowHeight + 'px';
            });
        }
        window.addEventListener('load', tamSection);
        window.addEventListener('resize', tamSection);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    400: {
                        items: 2,
                        nav: false,
                    },
                    600: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 3,
                        nav: false,
                        loop: true,
                    },
                },
            });
            var progressBar = document.querySelector(".progress-bar");
            owl.on("changed.owl.carousel", function (event) {
                var currentItem = event.item.index;
                var totalItems = event.item.count;
                var percent = (currentItem / totalItems) * 100;
                progressBar.style.width = percent + "%";
            });
            var isDragging = false;
            var startX;
            owl.on("mousedown touchstart", function (event) {
                isDragging = true;
                startX = event.pageX || event.originalEvent.touches[0].pageX;
            });
            owl.on("mouseup touchend", function () {
                isDragging = false;
            });
            owl.on("mousemove touchmove", function (event) {
                if (!isDragging) return;
                var currentX = event.pageX || event.originalEvent.touches[0].pageX;
                var dragDistance = currentX - startX;
                var slideWidth = owl.width();
                var slidesCount = owl.find(".owl-item").length;
                var dragPercent = (dragDistance / slideWidth) * 100;
                var currentItem = owl.trigger("to.owl.carousel", dragPercent * (slidesCount - 1) * -
                    0.01);
                startX = currentX;
            });
        });
    </script>
</body>

</html>