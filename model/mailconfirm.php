<?php

if($_REQUEST["payway"]=="credito"){
  $body = "Agradecemos por escolher a Yara para fazer o seu pedido! Estamos empolgados em processar a sua compra e queremos informar que o pagamento no cartão de crédito foi recebido com sucesso. Enviaremos atualizações periódicas sobre o status do seu pedido.";
}else if($_REQUEST["payway"]=="boleto"){
  $body = "Agradecemos por escolher a nossa loja para fazer o seu pedido! Estamos empolgados em processar a sua compra e queremos informar que o seu pedido foi recebido com sucesso.Acesse o link para baixar seu boleto bancário com vencimento de 5 dias http://surl.li/nrjnr . Enviaremos atualizações periódicas sobre o status do seu pedido.";
}else if($_REQUEST["payway"]=="pix"){
  $body = "Agradecemos por escolher a nossa loja para fazer o seu pedido! Estamos empolgados em processar a sua compra e queremos informar que o seu pedido foi recebido com sucesso. Esta é sua chave pix para efetuar o pagamento válida por 1 hora 00020126330014br.gov.bcb.pix01111335366962052040000530398654040.805802BR5919NOME6014CIDA. Enviaremos atualizações periódicas sobre o status do seu pedido.";
}

$params=array(
'token' => 'kwyiyiznivdl6388',
'to' => '11963220905',
'body' => $body
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
  <form action="../view/checkout.php" name="form" id="myForm" method="POST">
  <input type="hidden" name="msg" value="FR08">  <!--""BD02" => "Erro ao criar registro.",-->
  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
  <script>
  document.getElementById('myForm').submit();//envio automático submit()
  </script>
  <?php  

} else {
  
  ?>
  <form action="../view/meuperfil.php?historico=1" name="form" id="myForm" method="POST">
  </form> <!--envia um formulario com a variavel "msg", que é o código da mensagem de erro (ver view/msg.php)--> 
  <script>
  document.getElementById('myForm').submit();//envio automático submit()
  </script>
  <?php  
}
   
?>