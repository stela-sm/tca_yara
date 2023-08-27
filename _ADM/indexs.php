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
    </style>
</head>

<body onselectstart="return false">
    <header>
        <nav class="navbar white-top-hero-nav sticked d-flex justify-content-between" id="IndexNavbar"
            style="display: flex; top: 0px !important;margin: 0 !important;padding: 0 8% !important;"><button
                class="navbar-logo navbar-brand" style="padding: 0 !important;"><span
                    style=" font-family: var(--title-font) !important">Yara.</span></button>
            <div class="mobile-nav-options"><button class="navbar-toggler" type="button" arialabel="Open-menu">
                    <div class="top_line"></div>
                    <div class="bottom_line"></div>
                </button>
                <div class="mobile-cart shoping-bag"><svg xmlns="http://www.w3.org/2000/svg" width="29.481" height="35"
                        viewBox="0 0 29.481 35">
                        <path id="Path_385" data-name="Path 385"
                            d="M1450.495,272.231c-.022-.947-.084-1.9-.144-2.825-.022-.349-.045-.7-.065-1.047q-.111-1.878-.225-3.754c-.156-2.584-.318-5.258-.459-7.888a3.556,3.556,0,0,0-3.872-3.744h-1.373a9.841,9.841,0,0,0-2.333-6.118,8.087,8.087,0,0,0-12.087-.49,9.488,9.488,0,0,0-2.808,6.608H1425.8a3.58,3.58,0,0,0-3.889,3.727c-.075,1.518-.171,3.063-.263,4.556-.05.8-.1,1.61-.146,2.415-.048.832-.1,1.662-.154,2.492-.126,1.993-.257,4.053-.327,6.086a6.341,6.341,0,0,0,1.761,4.671,6.455,6.455,0,0,0,4.691,1.957c2.623,0,5.309.006,8.1.006,2.7,0,5.505,0,8.442,0a6.381,6.381,0,0,0,6.48-6.649Zm-24.762-16.595h2.035l1.461.025h13.05l1.451.013c.28,0,.557-.006.827-.012a16.094,16.094,0,0,1,1.785.029c.367.034.554.419.577.786.11,1.794.215,3.619.318,5.384q.073,1.247.145,2.494.058,1,.115,1.99c.1,1.709.2,3.478.317,5.217a4.325,4.325,0,0,1-.609,2.994,3.61,3.61,0,0,1-3.07,1.655c-5.348.016-10.829.017-16.757,0a3.7,3.7,0,0,1-2.676-1.132,3.647,3.647,0,0,1-1.027-2.672c.054-1.691.162-3.415.267-5.082q.062-.984.12-1.968.1-1.643.2-3.284c.1-1.744.213-3.548.311-5.323C1424.62,255.877,1424.869,255.637,1425.732,255.636Zm4.1-2.68c0-.035.008-.069.012-.1a12.335,12.335,0,0,1,.254-1.564,6.268,6.268,0,0,1,2.7-3.839,5.257,5.257,0,0,1,6.107.142,6.71,6.71,0,0,1,2.758,5.364Z"
                            transform="translate(-1421.016 -243.885)"></path>
                    </svg><span></span></div>
            </div>
            <div class="nav-items d-block" id="navbarNav">
                <ul class="navbar-nav d-flex flex-row">
                <?php
                            require_once "model/manager.php";
                            $dados= pegaMenusSubmenus("r"); //chama função dos menus com a folder "r"
                            $dadosSUB = pegasubmenu("r"); //chama função dos submenus com a folder "r"
                           
                           if(isset($dados["result"]) && $dados["result"] != 0){  // se vier resultado da função dos menus

                            $ii=0; //variavel ii (contagem de submenus) = 0 
                            //enquando i for menor que a quantidade de menus...
                            for($i = 0;$i<$dados["num"];$i++){
                              echo "<div class=\"nav-item\">
                              <div class=\"dropdown\">
                              <li class=\"nav-item\">
                              <button class=\"nav-link active-link\"><span
                                      class=\"nav-link greenwhite\"><a style='color:black; text-decoration:none;' href=''".$dados[$i]["URL_MENU"]."'>".$dados[$i]["NOME_MENU"]."</a></span></button>
                          </li>
                          <div class=\"dropdown-content\">";

                              for($count = 0; $count < $dadosSUB["num"] ; $count++){
                                if($dados[$i]["ID_MENU"] == $dadosSUB[$count]["ID_MENU_FK"] && $count<$dados["num"] ){
                                  echo"
                                  
                                  <a style='color:black; text-decoration:none;' href='".$dadosSUB[$count]["URL_SUBMENU"]."'>".$dadosSUB[$count]["NOME_SUBMENU"]."</a> </br>
    
                             
                                          
                                  "; // echo do dropdown
                                
                                
                                } //fecha if
                              }echo"</div></div></div>";
                            }
                            }
                    
                          
                           ?>
         
                   
        
        <ion-icon name="person-circle-outline" class="dropdown-icon"></ion-icon>
        <li class="nav-item">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </li> 
<style>
.scroll-content/* Estilos para o dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    text-align: left;
    padding: 10px 15px 10px 15px;
    display: none;    
    font-size: .40rem;
    position: absolute;
    background-color: transparent;
    max-width: 100px;
    border-radius: 10px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Estilo para o ícone */
.dropdown-icon {
    cursor: pointer;
}
</style>
                    <li type="button" data-toggle="modal" data-target="#nav-cart" class="nav-item shoping-bag">
                        <div class="cart-icon">
                            <span class="number-items-cart"></span>
                            <ion-icon name="bag-handle-outline"></ion-icon>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="flex-nav" style="top: 0px;"></div>
        <div class="modal fade modal-shop-cart" id="nav-cart" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-cart-dialog" role="document">
                <div class="modal-content modal-content-cart">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Carrinho</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
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
                                                <button class="product-favorite"style="background: transparent !important;">
                                                    <ion-icon name="heart-outline" style="background: transparent !important;"></ion-icon>
                                                </button>
                                                <img id="product-img" alt="Grono Lamp" loading="lazy"
                                                    src="assets/img_base.webp"><button
                                                    class="btn add-to-cart"
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
                                    <h4>2</h4>
                                </div>
                                <div class="item">
                                    <h4>3</h4>
                                </div>
                                <div class="item">
                                    <h4>4</h4>
                                </div>
                                <div class="item">
                                    <h4>5</h4>
                                </div>
                                <div class="item">
                                    <h4>6</h4>
                                </div>
                                <div class="item">
                                    <h4>7</h4>
                                </div>
                                <div class="item">
                                    <h4>8</h4>
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
                    <div class="container">
                        <div class="row">

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

            var altNavbar = window.scrollY === 0 ? 80 : window.innerHeight;

            var menu = document.querySelector("#navbarIndex");
            menu.style.height = `${altNavbar}px`;
            var altGlassy = document.querySelector("#glass-menu")
            var altColor = document.querySelectorAll(".greenwhite")
            if (window.scrollY < 10) {
                altColor.style.color = "#fff !important"
                altGlassy.style.display = "none"
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
