<html lang="en">
    
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Berkshire+Swash&family=Questrial&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
    <link href="../assets/style/meuperfil.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Meu Perfil</title>
</head>
<body class="fade-in">
    <style>
        :root{
    --white: #f9f9f9;
    --green: #1A3D1F;
    --yellow:  #B9C394;
--lgreen: #B9C394;
}
.fade-in {
    opacity: 0;
    animation: fadeIn 0.1s ease-in forwards;
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
   
   <p id="title">Histórico de Pedidos</p>
   <br>
<head>
    <style>
        body{
            padding-top: 1.5em;
            font-family: 'Questrial';
            height: 100%;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: none;

        }
        th, td {
            text-align: left;
            padding: 15px;
        }
        #last{
            text-align: left;
        }
        .input_perfil{
            background-color: #dddddd;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            padding: 10px;
            width: 80%;
            margin-right: 3em;
            border-radius: 5px;
        }
        .label{
            color:var(--green);
            padding-left: -1cm;
            width: 20%;
        }
        #title{
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: -0.8rem;
        }
        .submit{
            background-color: transparent;
            border-radius: 25px;
            border: 1px solid #1a3d1ffb;
            color: #1A3D1F;
            margin-top: 10px;
            box-shadow: none !important;
            outline: none !important;
            cursor: pointer;
            font-weight: bold;
            width: 60%;
            padding: 10px;        
            opacity: 0.7;
}
.cartao{
    width: 100%;
    border: 0px;
    background-color: white;
border-radius: 20px !important;
padding: 10px;
box-shadow: rgba(0, 0, 0, 0.1) -4px 9px 25px -6px;
}

.apelido{
font-weight: 600;
text-transform: uppercase;
color: #B9C394;
border: 0px;
background-color: white;
border-radius: 20px ;
border-bottom:1px #B9C394 solid;
font-size: 1.1em;
}

.body_card{ 
border: 0px; 
font-size: 0.9em;
}

.fa-pencil{
margin-left: 80%;
position: absolute;
}
.card-text{

    line-height: 2em;
}
.options_td{
    text-align: right;
    padding: 0px;
}
.options{
    border: none;
  outline: none; 
  padding-left: 10px; 
  width: 2cm;
  text-decoration: underline;
  border-radius: 5px; 
  -webkit-appearance: none; 
  -moz-appearance: none; 
  appearance: none; 
  cursor: pointer;
}

.status{
    padding-left: 0.3cm;
    font-weight: 800;
    padding-top: 0.5cm;
    padding-bottom: 0.5cm;
    text-transform: uppercase;
    font-size: 0.9em;
    
}
.data{
    padding-left: 0.3cm;
    font-weight: 500;
}
.th{
    border-bottom: lightgray 1px solid;

}
.tabela{
    margin-bottom: 0.3cm;
}
.produto{
    max-width: 5cm;
    text-align: left;
}
.quant{
    max-width: 4cm;
}
.valor{
    max-width: 3cm;
    text-align: right !important;
}
.preco{
    width: 100%;
}
.img{
    height: 2.5cm;
max-width: 2.5cm;
width: 2.5cm;
}
.total_valor{
    text-align: right;
    
    font-weight: 700;
    padding-top: 15px;
}
.ultima{
    margin-top: 1em;
    border-top: lightgray 1px dotted;
  
}
.total{
    padding-top: 15px;
    font-weight: 700;
    text-transform: uppercase;
}
    </style>
</head>
<body class="fade-in">
    
    <?php
    
    $_SESSION['nome'] = "Laura Barbara Cruz";
    $_SESSION['telefone'] = "11963220905";
    $_SESSION['cpf'] = "40527647810";
    $_SESSION['email'] = "laura@gmail.com";
    $_SESSION['USER-ID'] = "1";
    

    ?>

    <?php
    require '../model/manager.php';
    $historico = historico($_GET["id"]);

    if($historico["result"] == 0){ echo "<br>Você ainda não efetuou nenhum pedido, faça seu primeiro agora!"; }else{ 

        for($i=0;$i<$historico["num"];$i++){
            
    echo"
      <form action=\"\">    
<div class=\"cartao\">
    
<table class=\"tabela\">
    <tr class=\"th\"> <td class=\"status\">".$historico[$i]["status"]."<span class=\"data\"> ".$historico[$i]["datahora"]."</span></td><td class=\"options_td\">
      
<select class=\"options\" name=\"options\">
  <option value=\"maca\" disabled selected>Opções</option>
  <option value=\"rastrear\">Rastrear o Pacote</option>
  <option value=\"devolucao\">Devolução</option>
  <option value=\"nota\">Nota Fiscal</option>
  <option value=\"recebido\">Recebido</option>
  <option value=\"cancelar\">Cancelar</option>
</select></td></tr>
</table>
    <table>";
    $itens = itens($historico[$i]["id"]);
    for($ii=0;$ii<=$itens["num"];$ii++){

    $img = imgProduto($itens[$ii]["id_produto"]);
    echo
"   <tr><td class=\"img\"><img src=\"media/".$img["img"]."\" alt=\"\" style=\"width:50px;\"></td>
    <td class=\"produto\"><span class=\"nome_produto\">".$itens[$ii]["nome"]."</span></td>
    <td class=\"quant\"> <span class=\"quantidade\">".$itens[$ii]["quantidade"]."x</span> </td>
    <td class=\"valor\"><span class=\"preco\">R$".$itens[$ii]["valor_total"]."</span></td></tr>";
    };
echo"
    </table>
    <table class=\"ultima\">
    <tr>
        <td class=\"total\">Total</td>
        <td class=\"total_valor\"> R$".$historico[$i]["valor"]."</td>
    </tr>
    </table>
</div>
</form>";

        }}  ?>

</body>
</html>
<script>
    function active(num){
        var ipt = document.getElementById("ipt"+num)
        ipt.disabled = false;

    }
</script>
</body>


