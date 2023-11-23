let dados = [];


function gerarLinhasDaTabela() {
  for (let i = 0; i < dados.length; i++) {
    
    let tabela = document.querySelector('table');
    let tr = document.createElement('tr');
    let td1 = document.createElement('td');
    let td2 = document.createElement('td');
    let td3 = document.createElement('td');
    let td4 = document.createElement('td');
    td1.innerText = dados[i].idCliente;
    td2.innerText = dados[i].nome;
    td3.innerText = dados[i].idade;
    td4.innerText = dados[i].cpf;
    tr.append(td1, td2, td3, td4);

    tabela.append(tr);
  }
    
    
   
}
function buscaCliente() {
    fetch('http://localhost/projeto samuel/projeto - back/ClCliente/ListaCliente.php')
    .then(function(resposta){
       return resposta.json();
    })
    .then(function(json){
        dados = json;
        gerarLinhasDaTabela();
        //alert(json);   
    });
    
}

buscaCliente();

function enviaDadosParaCadastro(){
    const dados = new FormData(document.querySelector('.cadastra'));
    const opcoes = {
      method: 'post' ,
      body: dados};
      fetch('http://localhost/projeto samuel/projeto - back/ClCliente/cadastraCliente.php', opcoes)
      .then( function(res) {
        return res.json();
      }).then(function(json) {
        alert(json.mensagem);
        buscaCliente();
      })
}
window.addEventListener('load',buscaCliente );
const btSalvar = document.querySelector('button');

btSalvar.addEventListener('click', function(event){
  event.preventDefault();
  enviaDadosParaCadastro();
});