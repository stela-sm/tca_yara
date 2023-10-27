<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
    <link href="../assets/style/login.css" rel="stylesheet">
    <title>Login</title>
</head>
<body >

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
    </header>

    <div class="login-container">
        <!-- imagem (50%) à direita -->
        <div class="image-section" style="order: 2;">
            <img src="../assets/media/planta_bg.png" alt="Imagem de Fundo">
        </div>

        <!-- formulário login -->
        <div class="form-section-login" style="order: 1;">
            <div class="login-title fade-in w-100">
                <h1 class="title-text-l mb-4">Bem vindo de volta!</h1>
                <div class="mb-3">
                    <p class="paragraph-text account">Informe seus dados para login.    
                        <a class="custom-link" style="color: #1A3D1F; text-decoration: none; font-weight: bold; cursor:pointer">Não tem conta?</a></p>
                </div>
                <!-- área do formulário -->
                <form class="w-100  " action="../controller/controller_client.php" method="post">
                    <input type="hidden" name="loginn" value="1">
                    <!-- email -->
                    <div class="form-group-email">
                        <input type="email" name="login" class="username-inpt form-control" id="usuário" placeholder="Email ou CPF" autocomplete="off">
                    </div>
                    <br>
                    <!-- senha -->
                    <div class="form-group-senha">
                        <input type="password" class="pass-inpt form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                     <!-- link senha -->
                     <div class="mb-3 mt-3">
                        <a class="link-forgout" href="#" style="font-size: 12px;">Esqueceu sua senha?</a>
                    </div>
                    <!-- botão entrar -->
                    <button type="submit" class="btn w-100">Entrar</button>
                </form>
            </div>
        </div>

        <!-- formulário cadastro -->
        <div class="form-section-cadastro " style="flex: 50%; order: 1;">
            <div class="login-title fade-in w-100">
                <h1 class="title-text-c mb-4">Seja bem vindo!</h1>
                <div class="mb-3">
                    <p class="paragraph-text login-back">Informe seus dados para cadastro.   
                        <a class="custom-link" style="color: #1A3D1F; text-decoration: none; font-weight: bold; cursor: pointer;">Já tem conta?</a></p>
                </div>
                <!-- área do formulário -->
                <form class="w-100 " action="../controller/controller_client.php" method="post">
                    <input type="hidden" name="cadastro" value="1">
                    <!-- nome -->
                    <div class="form-group-name">
                        <input type="text" class="name-inpt form-control" id="nome" placeholder="Nome Completo" autocomplete="off">
                    </div>
                    <br>
                    <!-- email -->
                    <div class="form-group-name">
                        <input type="email" class="email-inpt form-control" id="nome" placeholder="Email"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- cep -->
                    <div class="form-group-name">
                        <input type="tel" class="cpf-inpt form-control" id="nome" placeholder="CPF"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- telefone -->
                    <div class="form-group-name">
                        <input type="tel" class="tel-inpt form-control" id="nome" placeholder="Telefone"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- senha -->
                    <div class="form-group-senha">
                        <input type="password" class="pass-inpt form-control" id="senha" placeholder="Password">
                    </div>
                    <br>
                    <!-- termos de uso -->
                    <div class="form-check align-items-center">
                        <input type="checkbox" class="form-check-input" id="termosDeUso">
                        <label class="form-check-label" for="termosDeUso">
                            Concordo com os <a href="#" style="color:#1A3D1F; text-decoration: none; font-weight: bold;">Termos de Uso</a>
                    </div>
                    <!-- botão cadastro-->
                    <button type="submit" class="btn btn-primary w-100" style="margin-top: 30px;">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- javascript -->
<script>
    let p_cadastro = document.querySelector('.account') // ir para cadastro
    let p_login = document.querySelector('.login-back') // ir para login
    let cadastro_form = document.querySelector('.form-section-cadastro') // form cadastro
    let login_form = document.querySelector('.form-section-login') // form login

    p_cadastro.addEventListener('click', function () {
        login_form.style.display = "none"
        cadastro_form.style.display = "flex"
    })

    p_login.addEventListener('click', function () {
        login_form.style.display = "flex"
        cadastro_form.style.display = "none"
    }) 
</script>

<!-- 
verde escuro: #1A3D1F
verde claro: #87AB85
amarelo: #FDBE50
marrom: #85573F
-->

<?php

if(isset($_REQUEST["msg"])){

 $cod = $_REQUEST["msg"];
 require_once "../model/msg.php";
echo "<script>alert('" . $MSG[$cod] . "');</script>";

}

?>
</html>