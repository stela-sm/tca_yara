function buscaCep() {
    var inputCep = document.getElementById("input-cep").value;
    var cep = inputCep.replace("-","");
    
    var xhr = new XMLHttpRequest(); 
    method = "GET";
    var url = "https://viacep.com.br/ws/" + cep + "/json/";

    xhr.open(method,url,true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            preencheCampos(JSON.parse(xhr.responseText));
        }
    }
    xhr.send();
}
        

function preencheCampos(json) {
    document.getElementById("input-rua").value = json.logradouro;
    document.getElementById("input-bairro").value = json.bairro;
    document.getElementById("input-cidade").value = json.localidade;
    document.getElementById("input-estado").value = json.uf;}


function limpa(){

    const form = document.getElementById("endereco_edit");
    const campos = form.getElementsByTagName("input");

    for (let i = 0; i < campos.length; i++) {
      if (campos[i].type === "text") {
        campos[i].value = campos[i].defaultValue;
      }
    }
  }


  function buscaCepN() {
    var inputCep = document.getElementById("input-cep-novo").value;
    var cep = inputCep.replace("-","");
    
    var xhr = new XMLHttpRequest(); 
    method = "GET";
    var url = "https://viacep.com.br/ws/" + cep + "/json/";

    xhr.open(method,url,true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            preencheCamposN
            
            
            (JSON.parse(xhr.responseText));
        }
    }
    xhr.send();
}
        

function preencheCamposN(json) {
    document.getElementById("input-rua-novo").value = json.logradouro;
    document.getElementById("input-bairro-novo").value = json.bairro;
    document.getElementById("input-cidade-novo").value = json.localidade;
    document.getElementById("input-estado-novo").value = json.uf;}


function limpa(){

    const form = document.getElementById("endereco_edit");
    const campos = form.getElementsByTagName("input");

    for (let i = 0; i < campos.length; i++) {
      if (campos[i].type === "text") {
        campos[i].value = campos[i].defaultValue;
      }
    }
  }