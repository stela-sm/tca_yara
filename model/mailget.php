<?php

    require 'manager.php';
function gerarCodigoVerificacao($tamanho = 6) {
  $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $codigo = '';

  for ($i = 0; $i < $tamanho; $i++) {
      $codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
  }

  return $codigo;
}

$codigoVerificacao = gerarCodigoVerificacao(6);


$codigoverif="Olá, seu código de verificação é ".$codigoVerificacao." , válido por 5 minutos.";


$cel = $_REQUEST["celular"];

$params=array(
'token' => 'kwyiyiznivdl6388',
'to' => $cel,
'body' => $codigoverif
);
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance66552/messages/chat",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  
  ?>
  <form action="../view/login.php" name="form" id="myForm" method="POST">
  <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
  <script>
  document.getElementById('myForm').submit();//envio automático submit()
  </script>
  <?php  

} else {
  $cod = codigo($codigoVerificacao);
  $cod2 = id_cod($codigoVerificacao);
  ?>
  <form action="../view/login.php" name="form" id="myForm" method="POST">
  <input type="hidden" name="fase" value="1"> 
  <input type="hidden" name="id" value="<?php  echo $cod2["id"]; ?>"> 
  <input type="hidden" name="cpf" value="<?php  echo $_REQUEST["cpf"]; ?>"> 
  <input type="hidden" name="cel" value="<?php  echo $cel; ?>"> 
  <input type="hidden" name="modal" value="1"> 
  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
  <script>
  document.getElementById('myForm').submit();//envio automático submit()
  </script>
  <?php  
}
      ?>