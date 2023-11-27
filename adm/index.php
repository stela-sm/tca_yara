<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Adminstração</title>
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
        margin: 0;
        background-image: url(view/media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-attachment: fixed;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;

    }
    .row{
        align-items: center;
        align-self: center;
        justify-content: center;
        display: flex;

    }
    #col{
        background-color: #f9f9f9;
        border-radius: 20px;
        border:none;
        
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
        height: 80vh;
    }
    .adm, .row{
        font-family: 'Questrial';
        
    }
        .adm{
            font-size: 1.5em;
            margin-top: 10%;
           
        }
    .row{
        height: 26%;
    }
    .input{
        background-color: var(--lgreen);
        padding: 20px 25px 10px 25px;
        border: none;
        width: 60%;
        border-radius: 10px;

    }
   
    .title{
        font-family: 'Berkshire Swash';
        font-size: 2em;
        margin-right: 3%;
    }
    .cont{
        margin-top: 10%;
    }
    .es{
      margin-top: 15% !important;
    display: table;
    text-align: center;
    width: 100%;
    margin: auto;
color: var(--green) !important;
      
    }
    .esqueci{
        text-decoration: underline;
        color: gray;
        text-transform: none;
    color: #1A3D1F !important;
    font-weight: bold;
    cursor: pointer;
    }
    .submit{
        color: var(--green);
        font-size: 1.3em;
        background-color: transparent;
        border: none;
        text-decoration: underline;
        
        transition: 0.2s;
    }
    .submit:hover{
        transform: scale(1.1);
        transition: 0.2s;
        cursor: pointer;
    }
    @media screen and (max-width: 1300px) {
  body{
        height: 100%;
        margin: 0;
        background-image: url(view/media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: auto;
        background-attachment: initial;
  }
  .input{
        background-color: var(--lgreen);
        padding: 10px 15px 10px 15px;
        border: none;
        width: 80%;
        border-radius: 10px;

    }
    .adm{
            font-size: 1.3em;
            margin-top: 10%;
           
        }
    }.fade-in {
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
</style>
<script>
      function updateElementClass() {
      const element = document.getElementById('col');

      if (window.innerWidth <= 1000) {  // Tamanho da tela abaixo de 768 pixels
        element.classList.remove('col-5');
        element.classList.add('col-10');
      } else {
        element.classList.remove('col-10');
        element.classList.add('col-5');
      }
    }

    window.addEventListener('load', updateElementClass);
    window.addEventListener('resize', updateElementClass);


    </script>
<body class="fade-in">
    <div class="container">
        <div class="row">
            <div class="col-5" id="col">
                <div class="row adm">
                   <span class="title"> Y.  </span>   Administração
                </div>
                
                <form action="controller/controller_adm.php" method="post" name="loginform">
                    <input type="hidden" name="loginsenha" value="1">
                <div class="row">
                    <input type="text" name="login" class="input" rquired placeholder="Seu email..">
                </div>
                <br>
                <div class="row">
                    <input type="password" name="senha" class="input" required placeholder="Sua senha..">
                </div>
                <div class="row cont">
                    <button class="submit" type="submit">Continuar</button>
                </div>
                <div class="row es">
                <a class="link-forgout" href=""data-toggle="modal" class="esqueci" data-target="#ExemploModalCentralizado" style="font-size: 16px; color:black;">Esqueceu sua senha?</a><br>
               <br> <a href="../index.php" style="font-size: 14px; color:black;">Voltar ao site</a>
                </div>
                
                </form>
            </div>
        </div>
        </div>
 
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
.modal-content{
  font-family: 'Questrial';
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

      <form action="controller/controller_adm.php" id="redefenir_form" method="post">
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

      <form action="controller/controller_adm.php" id="verificar_form" method="get">
 
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

      <form action="controller/controller_adm.php" id="senha_form" method="get">
 
      <input type="hidden" name="cpf" value="<?php echo $_REQUEST["cpf"]; ?>">
      <div class="modal-body">
      
  <input type="hidden" name="senha_alt" value="1"> </input>
        <label for="cel" class="label_padrao">Defina sua nova senha</label><br>
        <input type="text" id="celular_input" name="senha" class="input_padrao" required></input>
<br><br>
        <label for="cel" class="label_padrao">Repita sua senha</label><br>
        <input type="text" id="celular_input" name="senha_rep" class="input_padrao" required></input>
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
</body>
</html>