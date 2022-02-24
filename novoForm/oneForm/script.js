const form = document.getElementById('form');
const nome = document.getElementById('nome');
const cpf = document.getElementById('cpf');
const rg = document.getElementById('rg');
const idade = document.getElementById('idade');
const sexo = document.getElementById('sexo');
const cidade = document.getElementById('cidade');
const endereco = document.getElementById('endereco');
const email = document.getElementById('email');
const celular = document.getElementById('celular');



form.addEventListener('submit', (e) =>{
    e.preventDefault();

    checkInputs();
    
})


function checkInputs(){
    const nomeValue = nome.value.trim();
    const cpfValue = cpf.value.trim();
    const rgValue = rg.value.trim();
    const idadeValue = idade.value.trim();
    const sexoValue = sexo.value.trim();
    const cidadeValue = cidade.value.trim();
    const enderecoValue = endereco.value.trim();
    const emailValue = email.value.trim();
    const celularValue = celular.value.trim();


    if(nomeValue == ''){
        setErrorFor(nome);
    }else{
        setSuccessFor(nome);
    }


}


function setErrorFor(input){
    const formControl = input.parentElement;

    formControl.className = ' input error';
}