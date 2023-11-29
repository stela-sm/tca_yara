<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="../assets/style/login.css" rel="stylesheet">
    <title>Yara | Login</title>
</head>
<body class="fade-in">

    <!-- menu -->
    <header>
    <div class="menu">
        <a class="logo" href="../index.php">
            Yara.
        </a>
        <div class="menu-links">
            <a class="menu-link" href="../index.php">Home</a>
            <a class="menu-link" href="shop.php">Shop</a>
            <a class="menu-link" href="sobre.html">Sobre</a>
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
                    
                     <a class="link-forgout" href="#"data-toggle="modal" data-target="#ExemploModalCentralizado" style="font-size: 12px;">Esqueceu sua senha?</a>

                       
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
               <form class="w-100" action="../controller/controller_client.php" method="post">
                    <input type="hidden" name="cadastro" value="1">
                    <!-- nome -->
                    <div class="form-group-name">
                        <input type="text" class="name-inpt form-control" name="nome" id="nome" placeholder="Nome Completo" autocomplete="off">
                    </div>
                    <br>
                    <!-- email -->
                    <div class="form-group-name">
                        <input type="email" class="email-inpt form-control" name="email" id="nome" placeholder="Email"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- cep -->
                    <div class="form-group-name">
                        <input type="tel" class="cpf-inpt form-control" id="nome" name="cpf" placeholder="CPF"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- telefone -->
                    <div class="form-group-name">
                        <input type="tel" class="tel-inpt form-control" id="nome" name="tel" placeholder="Telefone"
                            autocomplete="off">
                    </div>
                    <br>
                    <!-- senha -->
                    <div class="form-group-senha">
                        <input type="password" class="pass-inpt form-control" id="senha" name="senha" placeholder="Password">
                    </div>
                    <br>
                    <!-- termos de uso -->
                    <div class="form-check align-items-center">
                        <input type="checkbox" class="form-check-input" id="termosDeUso" require>
                        <label class="form-check-label" for="termosDeUso" require>
                            Concordo com os <a href="../assets/terms/TERMOS.pdf" style="color:#1A3D1F; text-decoration: none; font-weight: bold;">Termos de Uso</a>
                    </div>
                    <!-- botão cadastro-->
                    <button type="submit" class="btn btn-primary w-100" style="margin-top: 30px;">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
<!-- Botão para acionar modal -->

<style>
    :root {
    --white: #f9f9f9;
    --green: #1a3d1f;
    --yellow: #B9C394;
} 
      .input_padrao{
            background-color: #dddddd !important;
            border: none !important;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px !important;
            padding: 10px !important;
            width: 100% !important;
            margin-right: 3em !important;
            border-radius: 5px !important;
        }
        
        .label_padrao{
            color:var(--green);
        }
        .salvar, .salvar:active{
        margin-top: 10px;
        background-color: transparent;
        border: none;
        cursor:pointer;
        color: var(--lgreen);
        text-transform: uppercase;        
        transition: 0.2s;        
    }
    .salvar:hover{
        scale: 0.9;
        transition: 0.2s;
    }
    .modal-footer{
        text-align: center !important;
        justify-content: center !important;
    }
    .modal-body{
        padding: 40px;
    }
    .modal{
       
    font-family: 'Questrial', sans-serif !important;
    }
.none{
    display:none;
}
.show{
    display: block;
}
.close:active{
    border: none !important;
    outline: none !important;
}
</style>
<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado"><b>Redefinir a Senha</b></h5>
        <button type="button" class="close" onclick="confirma_fechar('ExemploModalCentralizado'); limpa();"></button>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="../controller/controller_client.php" id="redefenir_form" method="post">
        <input type="hidden" name="redefinir" value="1"></input>
      <div class="modal-body">
        <label for="cel" class="label_padrao">Por favor, insira seu número de telefone celular</label><br>
        <input type="text" id="celular_input" required name="cel" class="input_padrao"></input>
      </div>
      <div class="modal-footer">
        <button type="submit" class="salvar">enviar código</button>
    </form>
      </div>


    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="verficar_modal_open" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado"><b>Redefinir a Senha</b></h5>
        <button type="button" class="close" onclick="limpa()" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="../controller/controller_client.php" id="verificar_form" method="get">
 
      <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"] ?>">
      <div class="modal-body">
      
      <input type="hidden" id="cod_verif" name="cod_verif" class="input_padrao" value="1"></input>
  <input type="hidden" name="id" value="<?php  echo $_REQUEST["id"]; ?>"> </input>
        <label for="cel" class="label_padrao">Insira o Código de verificação</label><br>
        <input type="text" id="celular_input" name="cod" class="input_padrao" required></input>
      </div>
      <div class="modal-footer">
        <button type="submit" class="salvar">verificar</button>
    </form>
      </div>


    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="autenticado_modal_open" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado"><b>Redefinir a Senha</b></h5>
        <button type="button" class="close" onclick="limpa()" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="../controller/controller_client.php" id="senha_form" method="get">
 
      <input type="hidden" name="cpf" value="<?php echo $_REQUEST["cpf"]; ?>">
      <div class="modal-body">
      
  <input type="hidden" name="senha_alt" value="1"> </input>
        <label for="cel" class="label_padrao">Defina sua nova senha</label><br>
        <input type="text" id="celular_input" name="senha" class="input_padrao" required></input>
<br><br>
        <label for="cel" class="label_padrao">Repita sua senha</label><br>
        <input type="password" id="celular_input" name="senha_rep" class="input_padrao" required></input>
      </div>
      <div class="modal-footer">
        <button type="submit" class="salvar">confirmar</button>
    </form>
      </div>


    </div>
  </div>
</div>


</body>

<!-- javascript -->
<script>
    function confirma_fechar(id){
    if(confirm("Deseja encerrar o processo de alteração de senha?") == true){
        $('#'+id).modal('hide');  
        limpa();
    }else{
        $('#'+id).modal('show'); 
    }
}
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


    function limpa(){
            document.getElementById('celular_input').value="";
  };
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

if(isset($_REQUEST["return"])){


    echo "<script>
    $('#ExemploModalCentralizado').modal('show');  
    
    </script>";
    
    }
if(isset($_REQUEST["modal"])){


    echo "<script>
    $('#verficar_modal_open').modal('show');  
    
    </script>";
    
    }


    if(isset($_REQUEST["autenticado"])){


        echo "<script>
        $('#autenticado_modal_open').modal('show');  
        
        </script>";
        
        }
      
?>

</html>