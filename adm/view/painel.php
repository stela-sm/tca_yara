<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b9d82b6ee.js" crossorigin="anonymous"></script>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yara | Adminstração</title>
</head>
<style>
       @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
    @import url('https://fonts.cdnfonts.com/css/glacial-indifference-2');
    :root{
        --white: #f9f9f9;
        --green: #1A3D1F;
        --yellow: #B9C394;
        --grey: gray;
    }
    body{        
    font-family: 'Glacial Indifference';
    color: var(--green);
    background-color: transparent;
    }
  table {
    width: 100%;
    border-collapse: collapse;
    border:none;
    height: 90vh;
  }

  th, td {
    padding: 8px;
    text-align: center;
  }

  th {
    background-color: transparent;
    padding-top:15px;
    padding-bottom:30px;
  }
td{
    padding-top: 25px;
}
  td.middle-column {
    border-left: 2px black solid;
    border-right: 2px black solid;
  }
  .title{
    font-weight: 600;
    padding-top: 20px;
    font-size: 1.3em;
  }

.number{
    font-size: 250%;
}
.date{
    font-size: 1.1em;
}

input[type="date"] {
    font-weight: 600;
    border: none;
    text-decoration: underline; 
    color: var(--yellow);
    background-color: transparent;
  padding-left: 10px;
  width: 8em;
  }

 
  input[type="date"]:hover {
    opacity: 0.7;
    cursor: pointer; 
  }

   input[type="date"]::-webkit-calendar-picker-indicator {
    color: var(--yellow);
  }
i:hover{
opacity: 1;
color: var(--yellow);
cursor: pointer;
}
i{
    color: #1A3D1F; margin-left:10px; opacity:0.7;
}
button{
    border: none;
    background-color: transparent;
}

</style>
</head>
<body>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const currentDateInput = document.getElementById("inicio");
  const currentDateInput2 = document.getElementById("fim");
  
  const currentDate = new Date();
  const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
   const lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
  
  const formattedFirstDay = firstDayOfMonth.toISOString().slice(0, 10);
  const formattedLastDay = lastDayOfMonth.toISOString().slice(0, 10);
  
  
  currentDateInput.value = formattedFirstDay;
  currentDateInput2.value = formattedLastDay;
});
  </script>
<?php

if(isset($_REQUEST["vendas"])){
    $vendas= $_REQUEST["vendas"];
    $faturamento= $_REQUEST["faturamento"];
    $clientes= $_REQUEST["clientes"];

}else{

    $dados["inicio"] = date("Y-m-01"); 
    $dados["fim"] = date("Y-m-t"); 
    require "../model/manager.php";
    $resp = dataPeriod($dados);
    $vendas = $resp["num"];
    $resp2 = dataFaturamento($dados);
    $faturamento = $resp2["num"];
    $resp3 = dataClientes($dados);
    $clientes = $resp3["num"];
}
?>

<table>
  <tr>

    <th class="date" colspan="3"><form name="form" action="../controller/controller_data.php" method="post"> De <input type="date" value="" name="inicio" id="inicio"> à <input type="date" value="" name="fim" id="fim"> <button type="submit"><i class="fa-solid icon fa-magnifying-glass" ></i></button></form></th>
  </tr>
  <tr>
    <td class="title">Total de Vendas</td>
    <td class="middle-column title">Faturamento</td>
    <td class="title">Novos Clientes</td>
  </tr>
  <tr>
    <td class="number"><?php echo $vendas; ?></td>
    <td class="middle-column number">R$<?php echo $faturamento; ?></td>
    <td class="number"><?php echo $clientes; ?></td>
  </tr>
  <tr>
    <td class="subtitle">Número de compras finalizadas <br> no período selecionado</td>
    <td class="middle-column subtitle">Faturamento sem desconto <br> de despesas no período selecionado</td>
    <td class="subtitle">Novos cadastros efetuados <br> no período selecionado</td>
  </tr>
</table>

</body>
</html>