<html lang="en">
<?php

    session_start();
   $_SESSION['username'] = "user";
    if(!isset($_SESSION['username'])){
        header("Location: login.php?fase=2");
    }else{
    ?>
    <head>
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
            #pfp {
                display: none;
            }
            #pfp_label {
                width: 3cm;
                border-radius: 50%;
                cursor: pointer;
            }
            .col-4 {
                padding: 0 4%;
                margin: 10% 0 0;
                position: absolute;
            }
            #name {
                line-height: 3cm;
                text-align: center;
                align-items: center;
                font-family: 'Berkshire Swash';
                padding-left: 0.3cm;
                color: white;
                font-size: 2.2em;
            }
            .linkmenu {
                list-style: none;
                font-family: "Questrial";
                cursor: pointer;
            }
            .corpo {
                margin-top: 2%;
            }
            .linkmenu {
                line-height: 1.5cm;
                font-size: 1.1em;
            }
            .menubar {
                background-color: white;
                border-radius: 20px;
                padding: 15px 15px 15px 25px;
                margin-left: 10%;
                text-align: justify;
                box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            }
            .container {
                min-width: none;
            }
            iframe{
                margin-left: 1cm;
            }
            i{
                margin-right: 1cm;
                width:10px;
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
                    <div class="col-4">
                        <input type="file" name="pfp" id="pfp">
                        <div class="row">
                            <label for="pfp"><img
                                src="../assets/media/user-profile-icon-free-vector.jpg"
                                id="pfp_label"
                                alt=""
                                srcset=""></label>
                            <p id="name">Laura Barbara Cruz</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end of menu -->

            <!--Corpo-->
            <div class="container CONT2">
                <div class="row corpo">
                    <!--menu lateral-->
                    <div class="col-3">
                        <ul class="menubar">
                            <li  class="linkmenu">
                            <a href="dados.php" target="iframe_perfil">  <i style="color:var(--green); margin-right:18px" class="fa-regular fa-user"></i>
                               Meu Perfil </li></a>
                            <li  class="linkmenu">
                            <a href="endereco.php" target="iframe_perfil">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-location-dot"></i>Endereços</a></li>
                            <li  class="linkmenu">
                            <a href="historico.php" target="iframe_perfil">  <i style="color:var(--green); margin-right:20px" class="fa-solid fa-clipboard-list"></i>Histórico</a></li>
                            <li  class="linkmenu">
                                <i style="color:var(--green); margin-right:20px" class="fa-solid fa-key"></i>Mudar senha</li>
                        </ul>
                    </div>

                    <div class="col-8">
                        <iframe  src="dados.php" name="iframe_perfil" id="iframe" width="150%" height="150%" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>