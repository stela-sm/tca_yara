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
        <link rel="stylesheet" href="css/adm_new_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
@import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
:root{
    --white: #f9f9f9;
    --green: #1A3D1F;
    --yellow:  #eeb249;
--lgreen: #B9C394;
}
body{
    padding: 10px;
}
.prod_background{
 font-family: 'Glacial Indifference';
background-color: #ececec;
height: 3cm;
width: 100%;
border-radius: 15px;
padding: 10px;
display: flex;
align-items: center;
transition: 0.2s;
}
.prod_background:hover{
transform: scale(0.91);
cursor: pointer;
transition: 0.2s;
}
.imagem {
 flex-shrink: 0;
 margin-right: 20px; /* Espaçamento entre a imagem e o texto */
        }
 .texto {
  flex-grow: 1; /* Ocupa todo o espaço restante */
 padding-top: 1em;
  }
 .quantidade{
    margin-left: 2rem;
  }
  #remover,#adicionar{
    border-radius: 50%;
    padding: 5px;
    padding-top: 0px;
    padding-bottom: 0px;
    text-align: center;

  }
  #remover{
    background-color: transparent;
    color: gray;
    border: 1px gray solid;
  }
  #adicionar{
    background-color: var(--yellow);
    color: var(--white);
    border: 1px var(--yellow) solid;
  }
</style>
<body>
                 
<?php
require '../model/manager.php';

$_SESSION['ID_CLIENTE']=1;
if(ISSET($_SESSION['ID_CLIENTE'])){
$id= $_SESSION['ID_CLIENTE'];
$dados= carrinho($id);
for($i=0;$i<$dados['result'];$i++){
    $produto = produtoBusca($dados[$i]['id_produto']);
    $valor= $dados[$i]['quantidade'] * $produto['valor'];
    echo "
    <div class=\"prod_background\">
        <img src=\"media/".$produto['img']."\" alt=\"Imagem\" class=\"imagem\" height=\"100\">
        <div class=\"texto\">
            <p>".$produto['nome']."</p>
            <p>R$ ".$valor." <span class=\"quantidade\"><button id=\"remover\"><i class=\"fa-solid fa-minus\"></i></button>
                <span id=\"quantidade\">".$dados[$i]['quantidade']."</span>
                <button id=\"adicionar\"><i class=\"fa-solid fa-plus\"></i></button>
            </span></p>
        </div>
    </div>
    <br>";}}else{

    }
    ?>
   













    <script>
        // Captura o elemento span e os botões
        const spanQuantidade = document.getElementById('quantidade');
        const botaoAdicionar = document.getElementById('adicionar');
        const botaoRemover = document.getElementById('remover');

        // Adiciona um ouvinte de evento ao botão de adicionar
        botaoAdicionar.addEventListener('click', function() {
            // Obtém o valor atual do span e converte para número
            let quantidadeAtual = parseInt(spanQuantidade.textContent);
            
            // Incrementa a quantidade
            quantidadeAtual++;
            
            // Atualiza o valor no span
            spanQuantidade.textContent = quantidadeAtual;
        });

        // Adiciona um ouvinte de evento ao botão de remover
        botaoRemover.addEventListener('click', function() {
            // Obtém o valor atual do span e converte para número
            let quantidadeAtual = parseInt(spanQuantidade.textContent);
            
            // Se a quantidade for maior que 0, pede confirmação do usuário
            if (quantidadeAtual > 0) {
                const confirmacao = confirm("Deseja realmente remover 1 quantidade?");
                if (confirmacao) {
                    // Reduz a quantidade
                    quantidadeAtual--;
                    
                    // Atualiza o valor no span
                    spanQuantidade.textContent = quantidadeAtual;
                }
            }
        });
    </script>
</body>
</html>