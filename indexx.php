<!DOCTYPE html>

<head>
    <title>YARA | Sua beleza, sua história</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="YARA: Sua beleza, sua história.">
    <link href="assets/style/home.css" rel="stylesheet">
    <link href="assets/style/main.css" rel="stylesheet">
    <link href="assets/style/global.css" rel="stylesheet">
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
        href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap"
        rel="stylesheet">
        <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <style id="smooth-scrollbar-style">
        body {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        [data-scrollbar] {
            display: block;
            position: relative;
        }

        .scroll-content {
            display: flow-root;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .scrollbar-track {
            position: absolute;
            opacity: 0;
            z-index: 1;
            background: rgba(222, 222, 222, .75);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: opacity 0.5s 0.5s ease-out;
            transition: opacity 0.5s 0.5s ease-out;
        }

        .scrollbar-track.show,
        .scrollbar-track:hover {
            opacity: 1;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
        }

        .scrollbar-track-x {
            bottom: 0;
            left: 0;
            width: 100%;
            height: 8px;
        }

        .scrollbar-track-y {
            top: 0;
            right: 0;
            width: 8px;
            height: 100%;
        }

        .scrollbar-thumb {
            position: absolute;
            top: 0;
            left: 0;
            width: 8px;
            height: 8px;
            background: rgba(0, 0, 0, .5);
            border-radius: 4px;
        }


        .sess-efeito {
            width: 100%;
            height: 100vh;
            position: relative;
            transition: transform 0.5s ease;
        }

        #IndexNavbar {
            transition: all cubic-bezier(0.47, 0, 0.745, 0.715) .3s;
        }


        .yara-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background-color: #fff;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 99999;
            display: block;
            pointer-events: none;
            mix-blend-mode: difference;
            transition: all .1s ease;
        }

        .yara-cursor::after {
            position: fixed;
            width: 20px;
            height: 20px;
            background-color: #000;
            transform: translate(-50%, -50%);
        }
        .modal-header{
            padding-top: 0.5rem !important;
            padding-bottom: 0.5rem !important;
        }
        @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
                            :root{
    --white: #f9f9f9;
    --green: #1A3D1F;
    --yellow:  #B9C394;
--lgreen: #B9C394;
}
                            table {
                                width: 100%;
                                border-collapse: collapse;
                            font-family: 'Questrial';
                            }
                    
                            td {
                                
                                font-size: 0.5em;
                                border: none;
                                padding: 10px;
                            }
                    
                            .esquerda {
                                text-align: left;
                                border-top: 2px gray dotted;
                                padding-bottom: 1em;
                            }
                    
                            .direita {
                                text-align: right;
                                
                                padding-bottom: 1em;
                                border-top: 2px gray dotted;
                            }
                    
                            .centro {
                                border-radius: 10px;
                                background-color: var(--yellow);
                                text-align: center;
                                color: var(--white);
                            }
                            .checkout, .checkout:hover{
                                color: var(--white);
                                text-decoration: none;
                            }
                      


    </style>
</head>

<body onselectstart="return false">
    <header>
        <nav class="navbar zdex9 white-top-hero-nav sticked d-flex justify-content-between" id="IndexNavbar"
            style="display: flex; top: 0px !important;margin: 0 !important;padding: 0 8% !important;"><button
                class="navbar-logo navbar-brand" style="padding: 0 !important;"><span
                    style=" font-family: var(--title-font) !important">Yara.</span></button>
            <div class="mobile-nav-options">
                <button class="navbar-toggler" type="button" arialabel="Open-menu">
                    <div class="top_line"></div>
                    <div class="bottom_line"></div>
                </button>
            </div>
            <div class="nav-items d-block nav-major" id="navbarNav">
                <ul class="navbar-nav mob-nav d-flex flex-row">
                    <li class="nav-item itemNo-mob">
                        <button class="nav-link active-link"><span
                                class="nav-link greenwhite"><a>Home</a></span></button>
                    </li>
                    <li class="nav-item itemNo-mob">
                        <button class="nav-link active-link"><span
                                class="nav-link greenwhite"><a>Home</a></span></button>
                    </li>
                    <li class="nav-item itemNo-mob">
                        <a href="view/login.php"><ion-icon name="person-circle-outline"></ion-icon></a>
                    </li>
                    <div class="mobileJunc d-flex flex-row justify-content-center align-center">
                        <li type="button" data-toggle="modal" data-target="#nav-cart"
                            class="areaMob nav-item shoping-bag">
                            <div class="cart-icon">
                                <span class="number-items-cart"></span>
                                <ion-icon name="bag-handle-outline"></ion-icon>
                            </div>
                        </li>
                        <div type="button" id="mobile-nav-tog" class="areaMob nav-item" data-toggle="modal"
                            data-target="#nav-mob">
                            <ion-icon name="menu-outline"></ion-icon>
                        </div>
                    </div>

                </ul>
            </div>
        </nav>
        <div class="modal-mobileNav modal fade mobile-nav modal-static" id="nav-mob" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-nav" role="document">
                <div class="modal-content modal-content-MNav">
                    <div class="modal-body">
                        <div class="nav-items d-flex flex-column nav-mobile" id="navbarNav_mob">
                            <ul class="d-flex flex-column">
                                <li class="nav-item">
                                    <button class="nav-link active-link"><span
                                            class="nav-link greenwhite"><a>Home</a></span></button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link active-link"><span
                                            class="nav-link greenwhite"><a>Shop</a></span></button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link active-link"><span
                                            class="nav-link greenwhite"><a>Sobre</a></span></button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link active-link"><span
                                            class="nav-link greenwhite"><a>Contato</a></span></button>
                                </li>
                                <li class="nav-item">
                                    <ion-icon name="person-circle-outline"></ion-icon>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-nav" style="top: 0px;"></div>
        <div class="zdex99 modal fade modal-shop-cart" id="nav-cart" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-cart-dialog" role="document">
                <div class="modal-content modal-content-cart">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Carrinho</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 0.5rem !important;">
                        <?php
                        
if(ISSET($_SESSION['ID_CLIENTE'])){?>
                        <iframe class="iframe" style="width: 100%; min-height: 70vh;"src="view/cart_layout.php" frameborder="0"></iframe>
                    
                        <table>
                            <tr>
                                <td class="esquerda">Subtotal</td>
                                <td class="direita">R$ 80,00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="centro"><a href="checkout" class="checkout">Checkout</a></td>
                            </tr>
                        </table>
                    <?php }else{ ?>
                    
                    
                        <?php }?>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <div id="viewport" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;">
        <div class="scroll-content" style="transform: translate3d(0px, -0px, 0px);">
            <main class="home-index">
                <section id="hero" class="container-fluid banner pb-4 pb-lg-0 bg-light sectionEFFjs">
                    <div class="container d-flex flex-row justify-content-center align-center">
                        <div class="row">
                            <div
                                class="magneto col-12 slogan_Hero text-center d-flex flex-row justify-content-center align-center">
                                <div class="perspectiva">
                                    <h3 class="mag-item">
                                        Sua beleza,
                                        Sua História
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="particulas position-absolute">

                    </div>
                </section>
                <section id="sobre" class="home-two-section alturaTela px-3 py-4 px-lg-0 py-lg-5 sectionEFFjs">
                    <div class="row">
                        <div class=" sobre-imgEsq col-md-6 col-sm-12 bg-red">
                            <div class="container">
                                IMG
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 bg-blue sobre-txtDir">
                            <div class="container">TXT</div>
                        </div>
                    </div>
                </section>
                <section class="text-center bg-light alturaTela px-3 py-4 px-lg-0 py-lg-5 sectionEFFjs">
                    <div class="container">
                        <div class="row">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-12 col-sm-6 produto-card-wrapper">
                                        <div class="category-item">
                                            <a class="category--img">
                                                <button class="product-favorite"
                                                    style="background: transparent !important;">
                                                    <ion-icon name="heart-outline"
                                                        style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button class="btn add-to-cart"
                                                    style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 120px, 0px); opacity: 0; pointer-events: none; bottom: 0px;">
                                                    <div class="dvb-hover-bg "
                                                        style="translate: none; rotate: none; scale: none; transform: translate(0px);">
                                                        <div class="curtain-wrapper">
                                                            <div class="curtain curtain-1"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                            <div class="curtain curtain-2"
                                                                style="translate: none; rotate: none; scale: none; transform: translate(101%); opacity: 1;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Add to card</span>
                                                </button>
                                                <div class="sm-add-to-card botao-adicionar">
                                                    <button class="btn sm-add-to-cart">
                                                        <span>Add to card</span>
                                                    </button>
                                                </div>
                                            </a>
                                            <div class="category--content">
                                                <div class="category--title">
                                                    <h3><a href="#">Grono Lamp</a></h3>
                                                </div>
                                                <div class="category--price"><span> $ 240.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <section id="sobre" class="home-two-section alturaTela px-3 py-4 px-lg-0 py-lg-5 sectionEFFjs">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 bg-blue sobre-txtDir">
                            <div class="container">TXT</div>
                        </div>
                        <div class="col-md-6 col-sm-12 bg-red sobre-imgEsq">
                            <div class="container">IMG</div>
                        </div>
                    </div>
                </section>
                <section class="bg-light position-relative alturaTela py-2 py-lg-5 sectionEFFjs">
                    <div class="container d-flex flex-row">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <div class="card bolha1-index bolha_home">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-bolha">Lorem Ipsum</h5>
                                        <p class="card-text card-txt-bolha">
                                            abca bca bcab cab ca bca bcab cab cabc a bca
                                            b cab cabcab ca b cabca bcab c
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card bolha2-index bolha_home">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-bolha">Lorem Ipsum</h5>
                                        <p class="card-text card-txt-bolha">
                                            abca bca bcab cab ca bca bcab cab cabc a bca
                                            b cab cabcab ca b cabca bcab c
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card bolha3-index bolha_home">
                                    <div class="card-body">
                                        <h5 class="card-title card-title-bolha">Lorem Ipsum</h5>
                                        <p class="card-text card-txt-bolha">
                                            abca bca bcab cab ca bca bcab cab cabc a bca
                                            b cab cabcab ca b cabca bcab c
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="alturaTela py-5 sectionEFFjs">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-12 d-flex flex-column justify-content-center justify-content-center align-items-center">
                                <h2 class="pb-3 font-size-24 font-size-lg-32 font-weight-bold text-center px-5 px-lg-0">
                                    Faça o teste
                                    vocacional do curso que você escolher!</h2>
                                <a class="btn btn-primary radius font-size-18 font-size-lg-24 font-weight-bold fazer-teste-vocacional_index"
                                    href="#">Começar</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="foot">
                <div class="particles-container">
                    <div class="dvb-particles"></div>
                </div>
                <h6 style="translate: none; rotate: none; scale: none; transform: translate(0%, 150%);">Subscribe to
                    our<br>newsletters</h6>
                <div class="footer-form"
                    style="translate: none; rotate: none; scale: none; transform: translate(0%, 130%);"><input
                        type="text" id="subscriber-email" name="email" placeholder="Email"><button
                        class="form-btn-primary" data-cursor="-white" data-dvb-btn-bg="#0084FF" data-dvb-hover-jelly=""
                        data-dvb-hover-curtains="">
                        <div class="dvb-hover-bg" style="background-color: rgb(0, 132, 255);">
                            <div class="curtain-wrapper">
                                <div class="curtain curtain-1"></div>
                                <div class="curtain curtain-2"></div>
                            </div>
                        </div>Subscribe
                    </button>
                </div>
            </footer>
        </div>
    </div>

    <div id="yara-scrollbar" class="scrollbar-track scrollbar-track-y" style="display: block;">
        <div id="yara-scrollbar-thumb" class="scrollbar-thumb scrollbar-thumb-y"
            style="height: 65.7103px; transform: translate3d(0px, 411.226px, 0px);"></div>
    </div>
    </div>
    <div class="yara-cursor"></div>
    <script>
        const sections = document.querySelectorAll('.sess-efeito');
        let currentSectionIndex = 0;

        window.addEventListener('wheel', (event) => {
            if (event.deltaY > 0 && currentSectionIndex < sections.length - 1) {
                currentSectionIndex++;
            } else if (event.deltaY < 0 && currentSectionIndex > 0) {
                currentSectionIndex--;
            }

            const yOffset = -currentSectionIndex * 100;
            sections.forEach((section, index) => {
                section.style.transform = `translateY(${yOffset}%)`;
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

    <script>
        function AtualizarNavbar() {
            var IndexNavbar = document.querySelector("#IndexNavbar");
            var FlexNavbar = document.querySelector(".flex-nav");

            if (window.scrollY === 0) {
                IndexNavbar.style.position = 'absolute'
                IndexNavbar.style.marginTop = '1.4%'
                FlexNavbar.style.transform = 'TranslateY(-100%)'
            } else {
                IndexNavbar.style.backgroundColor = 'transparent';
                IndexNavbar.style.position = 'fixed'
                IndexNavbar.style.marginTop = '0px'
                FlexNavbar.style.transform = 'none'
            }
        }
        window.addEventListener('load', AtualizarNavbar);
        window.addEventListener('scroll', AtualizarNavbar);
    </script>
    <script>
        const customScrollbar = document.querySelector('#yara-scrollbar');
        const scrollbarThumb = document.querySelector('#yara-scrollbar-thumb');

        customScrollbar.addEventListener('scroll', () => {
            const scrollPercentage = (customScrollbar.scrollTop / (customScrollbar.scrollHeight -
                customScrollbar.clientHeight)) * 100;
            const thumbPosition = (customScrollbar.clientHeight - scrollbarThumb.clientHeight) * (
                scrollPercentage / 100);

            scrollbarThumb.style.top = `${thumbPosition}px`;
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var altTela = window.innerHeight;

            var hero = document.querySelector('#hero')

            var hero_slogan = document.querySelector('.slogan_Hero')
            hero.style.height = `${altTela}px`

            var sections = document.querySelectorAll('.alturaTela');

            sections.forEach((element, index) => {
                element.style.height = `${altTela}px`;
            });


            hero_slogan.style.marginTop = `${altTela/2}px`
            var menu_mobile = document.querySelector('#nav-mob');

            var altNavbar = window.scrollY === 0 ? 80 : window.innerHeight;

            var menu = document.querySelector("#navbarIndex");
            menu.style.height = `${altNavbar}px`;
            var altGlassy = document.querySelector("#glass-menu")

            var altColor = document.querySelectorAll(".greenwhite")
            if (window.scrollY < 10) {
                altGlassy.style.display = "none"
                flex_nav.style.height = "1.71rem"
            } else {
                altColor.style.color = "black !important"
                altGlassy.style.display = "block"
            }
        })

        var target = document.querySelector(".mag-item")

        function setSheenPosition(xRatio, yRatio, distance) {
            const xOffset = (xRatio - 0.5) * 800 * distance;
            const yOffset = (yRatio - 0.5) * 800 * distance;
            target.style.setProperty('--campoX', `${xOffset}px`)
            target.style.setProperty('--campoY', `${yOffset}px`)
        }

        function handleMouseMove(event) {
            const height = window.innerHeight;
            const width = window.innerWidth;
            const distance = Math.sqrt(
                Math.pow((event.pageX - target.getBoundingClientRect().x - target.offsetWidth / 2), 2) +
                Math.pow((event.pageY - target.getBoundingClientRect().y - target.offsetHeight / 2), 2)
            );
            const intensity = Math.min(1, 300 / distance);

            const yAxisDegree = (event.pageX - target.getBoundingClientRect().x - target.offsetWidth / 2) / width * 20 *
                intensity;
            const xAxisDegree = (event.pageY - target.getBoundingClientRect().y - target.offsetHeight / 2) / height * -
                1 * 20 * intensity;

            target.style.transform = `rotateY(${yAxisDegree}deg) rotateX(${xAxisDegree}deg)`;
            setSheenPosition(
                (event.pageX - target.getBoundingClientRect().x) / width,
                (event.pageY - target.getBoundingClientRect().y) / height,
                intensity
            );
        }

        document.onmousemove = handleMouseMove;
    </script>
    <script>
        let yara_cursor = document.querySelector('.yara-cursor');

        document.addEventListener('mousemove', (event) => {
            yara_cursor.style.left = event.clientX + "px";
            yara_cursor.style.top = event.clientY + "px";
        });

        const links = Array.from(document.getElementsByTagName('a'))
        const btn = Array.from(document.getElementsByTagName('button'))
        const span = Array.from(document.getElementsByTagName('span'))
        const ion_icon = Array.from(document.getElementsByTagName('ion-icon'))
        const slogan = Array.from(document.getElementsByClassName('slogan_Hero'))

        links.forEach(link => {
            link.addEventListener('mouseover', () => {
                yara_cursor.style.transform = 'scale(1.5)'
            });

            link.addEventListener('mouseout', () => {
                yara_cursor.style.transform = 'scale(1)'
            });
        });
        ion_icon.forEach(link => {
            link.addEventListener('mouseover', () => {
                yara_cursor.style.transform = 'scale(2)'
            });

            link.addEventListener('mouseout', () => {
                yara_cursor.style.transform = 'scale(1)'
            });
        });
        btn.forEach(link => {
            link.addEventListener('mouseover', () => {
                yara_cursor.style.transform = 'scale(2)'
            });

            link.addEventListener('mouseout', () => {
                yara_cursor.style.transform = 'scale(1)'
            });
        });
        span.forEach(link => {
            link.addEventListener('mouseover', () => {
                yara_cursor.style.transform = 'scale(2)'
            });

            link.addEventListener('mouseout', () => {
                yara_cursor.style.transform = 'scale(1)'
            });
        });

        slogan.forEach(link => {
            link.addEventListener('mouseover', () => {
                yara_cursor.style.transform = 'scale(8)'
                yara_cursor.style.backgroundColor = '#000'
            });

            link.addEventListener('mouseout', () => {
                yara_cursor.style.transform = 'scale(1)'
                yara_cursor.style.backgroundColor = '#fff'
            });
        });
    </script>
    <script>
        const sections2 = document.querySelectorAll('.sectionEFFjs');
        let currentSectionIndex2 = 0;

        window.addEventListener('wheel', (event) => {
            if (event.deltaY > 0) {
                if (currentSectionIndex2 < sections2.length - 1) {
                    currentSectionIndex2++;
                }
            } else {
                if (currentSectionIndex2 > 0) {
                    currentSectionIndex2--;
                }
            }

            scrollToSection(currentSectionIndex2);
        });

        function scrollToSection(index) {
            const scrollToPosition = index * window.innerHeight;

            window.scrollTo({
                top: scrollToPosition,
                behavior: 'smooth'
            });
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>
</body>