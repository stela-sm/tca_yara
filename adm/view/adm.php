<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   <script>
      function ExecutaLogout(){
            var resp= confirm('Deseja sair do sistema?');
        if(resp == true){
          location.href="adm_logout.php";
        }else{
            return null;
        }
        }

        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


function confirma(){
    document.getElementById("auto").addEventListener("submit", function(event) {
      event.preventDefault();
      if (window.confirm("Tem certeza de que deseja alterar seus dados? Será necessário refazer seu login")) {
        
        this.submit();
      } else {
        
      }
    });}

   </script>
    <title>Yara | Painel</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
    @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
    :root{
        --white: #f9f9f9;
        --green: #1A3D1F;
        --yellow:  #eeb249;
    }
    .dropdown-container {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: #1A3D1F;
  font-family: 'Glacial Indifference';
  padding: 5px 10px;
  text-decoration: none;
  display: block;
  transition: 0.2s;
}

.dropdown-content a:hover {
  color: #1A3D1F;
  font-family: 'Glacial Indifference';
  padding: 5px 10px;
  text-decoration: underline;
  transition: 0.2s;
  display: block;
}

/* Mostrando o dropdown ao passar o mouse */
.dropdown-container:hover .dropdown-content {
  display: block;
}
    body{
      background-color: #f9f9f9;
        height: 100%;
        margin: 0;
        background-image: url(media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-attachment: fixed;
        
    }
    .painel, .menu{
       
        padding-left: 5%;
        padding-right: 5%;
        padding-top: 2%;
        
    }
    header{
      
      padding-left: 3%;
        padding-right: 3%;
        padding-top: 1%;
    }
    .menu, .painel{
font-family: 'Glacial Indifference', sans-serif;
color: var(--green);

    }
    .painel{
        padding: 20px;
        background-color: var(--white);
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    width: 100%;
    border-radius: 20px;
        height: 55vh ;
        margin-top:-4em;}
        
    .menubar{
        background-color: var(--white);
        padding-top:20px;
        padding-bottom:20px;
        border-radius: 20px;
        height: 55vh ;
        margin-top:-4em;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }
   .nav> .nav-link{
        color: var(--green);
    }
    .navbar-brand, .nav-link{
        color:var(--white);
        font-family: 'Berkshire Swash', cursive;
    }
    .navbar-brand{
        font-size: 3.5em;
    }
    .nav-link{
        font-size: 1.3em;
        font-family: 'Glacial Indifference', sans-serif;;
    }
    .titulo{
        color: var(--white);
        height: 30vh;
        vertical-align: middle; display: table-cell;
        position: relative;
    }
    .title{
        font-family: 'Berkshire Swash', cursive;
        font-size: 3.3em;
        padding-top: 1em;
    
    }
    .subtitle{
        font-size: 1.8em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }
    #voltar{
        background-color: var(--white);
        font-family: 'Glacial Indifference', sans-serif;
        padding: 15px 20px 15px 20px;
        font-size: 1.3em;        
        width: 100%;
        border: none;
        border-radius: 30px;
        margin-top: -1.7em;
        margin-right: 1.2em;

    }
    i{
        margin-right: 0.5em;
    }
    .active{
color: #eeb249;
    }

    iframe{
      width: 100%;
      height: 100%;
    }
    .link2{
      display:none;
    }

    @media screen and (max-width: 1739px) {
      #voltar{
        background-color: var(--white);
        font-family: 'Glacial Indifference', sans-serif;
        padding: 15px 20px 15px 20px;
        font-size: 1em;
        border: none;
        width: 100%;
        border-radius: 30px;
        margin-top: -1.7em;
        margin-right: 1.2em;

    }   .nav-link{
        font-size: 1.1em;
        font-family: 'Glacial Indifference', sans-serif;;
    }
   
    }

    @media screen and (max-width: 1520px) {
       .nav-link{
        font-size: 1.6em;
        font-family: 'Glacial Indifference', sans-serif;
        padding-left: 1em;
    }
    .link1{
      display:none;
    }
    .link2{
      display: block;

      margin-bottom: 5%;
      
    }
    
      
    .menubar{
        background-color: var(--white);
        padding-top:20px;
        padding-bottom:20px;
        height: fit-content;
        border-radius: 20px;
        justify-content: center;
        align-items: center;
        display: flex;
        margin-top:-2em;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    }
  .flex-column{
    display: flex;
  }
    
  .icon{
    margin-right: -1cm;
    font-size: 0.6em;
  }
  }
  @media screen and (max-width: 1300px) {
  body{
        height: 100%;
        margin: 0;
        background-image: url(media/yara_bg.png);
        background-repeat: no-repeat;
        background-size: auto;
        background-attachment: initial;
        
        
    }
  
  .icon{
    margin-right: -1cm;
    font-size: 0.6em;
  }
.menubar, .painel{
  margin-top: -3em;
}
.subtitle{
        font-size: 1.4em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }
}

  @media screen and (max-width: 671px) {
    .link2{
        font-size: 1.5em;
        font-family: 'Glacial Indifference', sans-serif;
        padding-left: 1em;
        margin-bottom: 10%;
    }
    #voltar{
       display: none;

    }
    .title{
        font-family: 'Berkshire Swash', cursive;
        font-size: 3.1em;
        padding-top: 1.5em;
    
    }
    .subtitle{
        font-size: 1.3em;
        margin-top: -1em;
        font-family: 'Glacial Indifference', sans-serif;
    }

  }

  @media screen and (max-width: 360px) {
    .col-1{
      display: none;
   
    }
  }
  .col-10{
    margin-left: 0.5cm;
    }
  .col-2{
    margin-left: -0.5cm;
  }
    </style>
<body>
    <header>
      <nav class="navbar">
        
        <a class="navbar-brand" href="#">Y.</a>

        <ul class="nav justify-content-end">
        <div class="dropdown-container">
            <li class="nav-item icon">
              <a class="nav-link" href="#"><i class=" dropdown-link fa-solid fa-circle-user fa-2xl" style="color: #f9f9f9;"></i></a>
              
            </li>
            <div class="dropdown-content">
      <a href="#" data-toggle="modal" data-target="#ExemploModalCentralizado">Meu Perfil</a><!-- Botão para acionar modal -->


      
      <a href="#" onclick="ExecutaLogout()">LogOut</a>
    </div>
        </div>
          </ul>
        </ul>
      </nav>
      <div class="container-flex">
        <div class="row d-flex  ">
        <div class="col-10  titulo">
        <p class="title d-flex ">
           <span class="ola"> Olá, <?php echo strtok($_SESSION["ADM-NOME"], " ");?>! </span><br>
            <p class="subtitle"> Este é o seu painel administrativo</p>
        </p>
    </div>
    <div class="col-2 d-flex justify-content-end align-items-center">
        <button id="voltar">Voltar </button>
    </div>
      </div>
    </div>
    </header>

    <div class="container-flex menu">
        <div class="row">
            <div class="col-2 menubar ">
                <ul class="nav flex-column " >
                    <li class="nav-item">
                      
                      <a target='iframe' style="color: var(--green);" class="link1 nav-link active" href="painel.php"><i class="fa-solid fa-house" style="color: #eeb249;"></i> Painel</a>
                      
                      
                      
                      <a  target='iframe' style="color: var(--green);" class="link2 nav-link active" href="painel.php"><i class="fa-solid fa-house" style="color: #eeb249;"></i></a>
                    </li>




<?php
if($_SESSION["ADM-PODER"]>=4){?>

                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="adm_list.php"><i class="fa-solid fa-users fa-sm" style="color: #1A3D1F;"></i> Administradores</a>
                      
                      
                      <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="adm_list.php"><i class="fa-solid fa-users fa-sm" style="color: #1A3D1F;"></i> </a>
                    </li>



                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="senhas.php"><i class="fa-solid fa-key" style="color: #1A3D1F;"></i></i>Trocar senhas</a>
<?php 
}?>                      
                      
                      <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="senhas.php"><i class="fa-solid fa-key" style="color: #1A3D1F;"></i></i></a>
                    </li>

                    <?php
if($_SESSION["ADM-PODER"]>=3){?>

                    <li class="nav-item">
                      <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="menus_list.php"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #1A3D1F;"></i>Menus e Submenus</a>

                      <a target='iframe'style="color: var(--green);" class="link2 nav-link menulink" href="menus_list.php"><i class="fa-solid fa-arrow-up-right-from-square" style="color: #1A3D1F;"></i></a>
                    </li>
                      <?php 
}?>                      
     



                    <li class="nav-item">
                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="produtos_list.php"><i class="fa-solid fa-bag-shopping" style="color: #1A3D1F;"></i>Produtos</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="produtos_list.php"><i class="fa-solid fa-bag-shopping" style="color: #1A3D1F;"></i></a>
                      </li>

                      <li class="nav-item">
                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="vitrine_list.php"><i class="fa-solid fa-store" style="color: #1A3D1F;"></i>Vitrine</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="vitrine_list.php"><i class="fa-solid fa-store" style="font-size: 0.8em;  color: #1A3D1F;"></i></a>
                      </li>


                      <?php
if($_SESSION["ADM-PODER"]>=2){?>

                      <li class="nav-item menulink">

                        <a target='iframe' style="color: var(--green);"  class="link1 nav-link menulink" href="pedidos_list.php"><i class="fa-solid fa-box" style="color: #1A3D1F;"></i>Pedidos</a>


                        <a target='iframe' style="color: var(--green);"  class="link2 nav-link menulink" href="pedidos_list.php"><i class="fa-solid fa-box" style="color: #1A3D1F;"></i></a>
                      </li>

                      <?php 
}?>          
                  </ul>
            </div>
            <div class="col-10 painel">
              <iframe src="iframe.html" name="iframe" scrolling="auto" id="iframe"frameborder="0">

              </iframe>
           
            </div>
        </div>
    </div>

<!-- Modal -->

<style>

.table-container {
        
        width: 100vw;
        width: 100%;
        display: table;
        border-collapse: collapse;
      }
  
      .table-row {
        display: table-row;
      }
  
      .table-cell {
        display: table-cell;
        padding: 10px;
      }
  
      .align-left {
        text-align: left;
      }
      
    .p, .table-container{
        margin-top: 0.5em;
    }
    .label{
        text-align: left;
        
    }
    .input, select, option{
        border-radius: 5px;
        background-color: #DDDDDD;
        border: none;
        padding: 5px 10px 5px 10px ;
    }
  
/*MODAL CSS*/

.modal-title{
  
color: var(--green);
font-family: 'Berkshire Swash', cursive;
}
    
.modal-body{
  font-family: 'Glacial Indifference', sans-serif;
}

.btn-submit{
  background-color: var(--yellow);
  color: white;
  border-radius: 10px;
}
 input{
  border-radius: 20px;
}
.modal{
  border-radius: 40%;
}
.btn-secondary{
  background-color: transparent;
  color: var(--green);
  transition: 0.2s;  
  border-radius: 10px;
  
}
.btn-secondary:hover{
  background-color: var(--green);
  opacity: 0.8;
  border-radius: 10px;
}

.btn-submit:hover{
  border: 1px var(--yellow) solid;
  background-color: transparent;
  color: var(--yellow);
  transition: 0.2s;  
  border-radius: 10px;
}
</style>




<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="TituloModalCentralizado">Seu perfil, <?php echo strtok($_SESSION["ADM-NOME"], " ");?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../controller/controller_adm.php" method="post" id="auto" class="form">
    <input type="hidden" name="adm_autoedit" value="1">
<div class="container">
   
    <div class="row">
    <div class="table-container">
    <div class="table-row">
    
      <div class="table-cell align-right">
        <label for="nome" class="label">Nome</label><br>
        <input type="text" name="nome" id="" placeholder="Seu nome..." required class="input" value="<?php echo $_SESSION["ADM-NOME"];?>">
      </div>
      <div class="table-cell align-left">
      <label for="poder" class="label">Poder </label> <i class="fa-solid fa-circle-info" data-toggle="tooltip" data-placement="right" title="Você não pode mudar seu próprio poder" style="color: #1A3D1F;"></i><br>
  <select id="poder" disabled class="input" name="poder">
 
    <option <?php if ($_SESSION["ADM-PODER"]==1) {echo "selected";} ?> value="1">1 - Operador</option>
    <option <?php if ($_SESSION["ADM-PODER"]==2) {echo "selected";} ?> value="2">2 - Setorizado</option>
    <option <?php if ($_SESSION["ADM-PODER"]==3) {echo "selected";} ?> value="3">3 - Subgerente</option>
    <option <?php if ($_SESSION["ADM-PODER"]==4) {echo "selected";} ?> value="4">4 - Gerente</option>
    <option <?php if ($_SESSION["ADM-PODER"]==5) {echo "selected";} ?> value="5">5 - Sysop</option>
  </select>
</div>
       </div>
   
    <div class="table-row">
      <div class="table-cell align-right">
       <label for="nome" class="label">Email</label><br>
        <input type="email" name="email" placeholder="Seu email..." required  id="" class="input" value="<?php echo $_SESSION["ADM-EMAIL"];?>"></div>
        <div class="table-cell align-left">
      <label for="status" class="label">Status</label> <i class="fa-solid fa-circle-info" data-toggle="tooltip" data-placement="right" title="Você não pode mudar seu próprio status" style="color: #1A3D1F;"></i><br>
  <select id="status" class="input" disabled name="status">
    <option value="1">Ativo</option>
  </select>
<br>
<br>
</div>
    </div>
    <div class="table-row">
      <div class="table-cell align-right">
      <label for="nome" class="label">Telefone (celular)</label><br>
        <input type="text" name="telefone" id="" placeholder="(DDD)9xxxxxxxx" value="<?php echo $_SESSION["ADM-TELEFONE"];?>" required  class="input"></div>
     
    </div>
  </div>
  
    </div>
      </div>
      <div class="modal-footer">
        
        <button type="sumbmit" onclick="confirma()" class="btn btn-submit">Salvar mudanças</button>
      
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>


 

