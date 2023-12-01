<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" href="../../favicon/yara.ico" type="image/x-icon"><link rel="shortcut icon" href="../favicon/yara.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/adm_style.css">
      <script src="js/adm_js.js"></script>
      <title>Yara | Painel</title>
      <script>
         

function atualizarClasseElemento() {
    const larguraJanela = window.innerWidth;
    const elemento = document.querySelector('.col-10');  
    const elemento2 = document.querySelector('.col-12'); 

  if (larguraJanela < 700) {
      elemento.classList.remove('col-10');
      elemento.classList.add('col-12');
    } 
    
    if (larguraJanela > 700){
      elemento2.classList.remove('col-12');
      elemento2.classList.add('col-10');
    }
    
  }
setInterval(atualizarClasseElemento, 1);
atualizarClasseElemento();



      </script>
      <style>
         .navbar-brand:hover{
               color: white;
         }
         .responsivo{
            display:none;
         }
@media screen and (max-width: 700px) { /*mudar menu*/

#voltar{
   display: none !important; 
}
.responsivo{
   z-index: 300;
   width: 100%;
   align-items: end;
   text-align: end;
            display:flex;
            margin-left: 90%;
         }
.menubar{
   display: none !important; 
}
.menu1{display:none;}
.navbar-light>.nav-item>a{
   color: white;
padding: 3cm !important; 
height:0.5em;}
.collapse{
   background-color: #f9f9f9;
   border-radius: 20px;
   height: 9CM;
   padding-right: 20PX ;
   box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px,
        rgba(0, 0, 0, 0.22) 0px 10px 10px;
   text-align: right;
}
}
.modal-content, .label, .input{
   font-family: 'Questrial';
}
.menu-link{
   font-size: 0.8em;
}
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
        color: #000 !important;
    }

    a.menu-link:hover {
        color: #000 !important;
        text-decoration: underline;
    }

    .btn-modal, .btn-modal:active, .btn-modal:hover, .btn-modal::before {
        border: none;
        background-color: transparent;
        border: transparent;
        box-shadow: none;
        outline: none;
        color: #f0f0f0 !important;
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
    
.modal-backdrop{
   display: none;
}
} 
      </style>
   </head>
   <body class="fade-in">
      <header>
         
          <nav class="responsivo navbar navbar-expand-lg navbar-light ">
          <button type="button" class="btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <!-- ícone menu -->
            <svg xmlns="http://www.w3.org/2000/svg" class="jsChangeColor icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                        <button type="button" style="margin-left: 90%;" id="insideMobMenu__closeBTN" class="btn-close btn-modal mobileMenu__closeBTN" width="32" height="32" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M18 6l-12 12" />
                                <path d="M6 6l12 12" /></svg>
                        </button>
                    </div>
                    <div class="modal-body">
                    <a target='iframe' style="color: var(--green);" onclick="click()" class="link1 nav-link active menu-link" href="painel.php">Painel</a>
                    <?php if($_SESSION["ADM-PODER"]==5){?>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="adm_list.php?campo=">Administradores</a>
                   <?php } if($_SESSION["ADM-PODER"]>=4){?>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="clientes_list.php?campo=">Clientes</a>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="enderecos_list.php?campo=">Endereços</a>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="senhas.php">Senhas</a>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="produtos_list.php?campo=">Estoque</a>
                    <?php } if($_SESSION["ADM-PODER"]>=1){ ?>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="vitrine_list.php?campo=">Vitrine</a>
                    <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink menu-link" href="pedidos_list.php?campo=">Pedidos</a> <?php }?>
                    </div>
                </div>
            </div>
        </div>
</nav>
         <nav class="navbar menu1">
            <a class="navbar-brand" href="../../index.php">Y.</a>
            <ul class="nav justify-content-end">
               <div class="dropdown-container">
                  <li class="nav-item icon">
                     <a class="nav-link" href="#">
                        <i class=" dropdown-link fa-solid fa-circle-user fa-2xl" style="color: #f9f9f9;"></i>
                     </a>
                  </li>
                  <div class="dropdown-content">
                     <a href="#" data-toggle="modal" data-target="#ExemploModalCentralizado">Meu Perfil</a>
                     <!-- Botão para acionar modal -->
                     <a href="#" onclick="ExecutaLogout()">LogOut</a>
                  </div>
               </div>
            </ul>
            </ul>
         </nav>
         <div class="container-flex ">
            <div class="row d-flex  ">
               <div class="col-10  titulo">
                  <p class="title d-flex ">
                     <span class="ola"> Olá, <?php echo strtok($_SESSION["ADM-NOME"], " ");?>! </span>
                     <br>
                  <p class="subtitle"> Este é o seu painel administrativo</p>
                  </p>
</div>
            </div>
         </div>
      </header>
     

      <div class="container-flex menu">
         <div class="row">
            <div class="col-2 menubar ">
               <ul class="nav flex-column ">
                  <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" onclick="click()" class="link1 nav-link active" href="painel.php">
                        <i class="fa-solid fa-house"></i> Painel </a>
                     <a target='iframe' style="color: var(--green);" onclick="click()" class="link2 nav-link active" href="painel.php">
                        <i class="fa-solid fa-house"></i>
                     </a>
                  </li><?php
if($_SESSION["ADM-PODER"]>=4){?> <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="adm_list.php?campo=">
                        <i class="fa-solid fa-users fa-sm"></i> Administradores </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="adm_list.php?campo=">
                        <i class="fa-solid fa-users fa-sm"></i>
                     </a>
                  </li>
                      <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="clientes_list.php?campo=">
                     <i class="fa-regular fa-address-card"></i> Clientes </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="clientes_list.php?campo=">
                        <i class="fa-regular fa-address-card"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="enderecos_list.php?campo=">
                     <i class="fa-solid fa-magnifying-glass-location"></i> Endereços </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="enderecos_list.php?campo=">
                        <i class="fa-solid fa-magnifying-glass-location"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="senhas.php">
                        <i class="fa-solid fa-key"></i>
                        </i>Senhas</a>
 <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="senhas.php">
                        <i class="fa-solid fa-key"></i>
                        </i>
                     </a>
                  </li>
                  <?php  }?>
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="produtos_list.php?campo=">
                        <i class="fa-solid fa-bag-shopping" style="margin-right:15px;"></i>Estoque </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="produtos_list.php?campo=">
                        <i class="fa-solid fa-bag-shopping"></i>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="vitrine_list.php?campo=">
                        <i class="fa-solid fa-store"  style="margin-right:13px;"></i>Vitrine </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="vitrine_list.php?campo=">
                        <i class="fa-solid fa-store" style="font-size: 0.8em; "></i>
                     </a>
                  </li><?php
if($_SESSION["ADM-PODER"]>=2){?> <li class="nav-item menulink">
                     <a target='iframe' style="color: var(--green);" class="link1 nav-link menulink" href="pedidos_list.php?campo=">
                        <i class="fa-solid fa-box" style="margin-right:16px; margin-left:3px"></i>Pedidos </a>
                     <a target='iframe' style="color: var(--green);" class="link2 nav-link menulink" href="pedidos_list.php?campo=">
                        <i class="fa-solid fa-box"></i>
                     </a>
                  </li> <?php 
}?>
               </ul>
            </div>
            <div class="col-10 painel">
               <iframe src="painel.php" name="iframe" scrolling="auto" id="iframe" frameborder="0"></iframe>
            </div>
         </div>
      </div>
      <!-- Modal -->
      <style>
       
      </style>
      <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="TituloModalCentralizado">Seu perfil, <?php echo strtok($_SESSION["ADM-NOME"], " ");?> </h4>
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
                                    <label for="nome" class="label">Nome</label>
                                    <br>
                                    <input type="text" name="nome" id="" placeholder="Seu nome..." required class="input" value="<?php echo $_SESSION["ADM-NOME"]; ?>">
                                 </div>
                                 <div class="table-cell align-left">
                                    <label for="poder" class="label">Poder </label>
                                    <i class="fa-solid fa-circle-info" data-toggle="tooltip" data-placement="right" title="Você não pode mudar seu próprio poder" style="color: #1A3D1F;"></i>
                                    <br>
                                    <select id="poder" disabled class="input" name="poder">
                                       <option <?php if ($_SESSION["ADM-PODER"]==1) {echo "selected";} ?> value="1">1 - Operador </option>
                                       <option <?php if ($_SESSION["ADM-PODER"]==2) {echo "selected";} ?> value="2">2 - Setorizado </option>
                                       <option <?php if ($_SESSION["ADM-PODER"]==3) {echo "selected";} ?> value="3">3 - Subgerente </option>
                                       <option <?php if ($_SESSION["ADM-PODER"]==4) {echo "selected";} ?> value="4">4 - Gerente </option>
                                       <option <?php if ($_SESSION["ADM-PODER"]==5) {echo "selected";} ?> value="5">5 - Sysop </option>
                                    </select>
                                 </div>
                              </div>
                              <div class="table-row">
                                 <div class="table-cell align-right">
                                    <label for="nome" class="label">Email</label>
                                    <br>
                                    <input type="email" name="email" placeholder="Seu email..." required id="" class="input" value="
																				<?php echo $_SESSION["ADM-EMAIL"];?>">
                                 </div>
                                 <div class="table-cell align-left">
                                    <label for="status" class="label">Status</label>
                                    <i class="fa-solid fa-circle-info" data-toggle="tooltip" data-placement="right" title="Você não pode mudar seu próprio status" style="color: #1A3D1F;"></i>
                                    <br>
                                    <select id="status" class="input" disabled name="status">
                                       <option value="1">Ativo</option>
                                    </select>
                                    <br>
                                    <br>
                                 </div>
                              </div>
                              <div class="table-row">
                                 <div class="table-cell align-right">
                                    <label for="nome" class="label">Telefone (celular)</label>
                                    <br>
                                    <input type="text" name="telefone" id="" placeholder="(DDD)9xxxxxxxx" value="<?php ECHO ($_SESSION["ADM-TELEFONE"]); ?>" required class="input">
                                 </div>
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