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
        setErrorFor("nome");
    }else{
        setSuccessFor("nome");
    }

    if(validaCPF(cpfValue)){
        setSuccessFor("cpf");
    }else{
        setErrorFor("cpf");
    }

    if(rgValue == ''){
        setErrorFor("rg");
    }else{
        setSuccessFor("rg");
    }

    if(idadeValue == ''){
        setErrorFor("idade");
    }else{
        setSuccessFor("idade");
    }

    if(sexoValue == ''){
        setErrorFor("sexo");
    }else{
        setSuccessFor("sexo");
    }

    if(cidadeValue == ''){
        setErrorFor("cidade");
    }else{
        setSuccessFor("cidade");
    }

    if(enderecoValue == ''){
        setErrorFor("endereco");
    }else{
        setSuccessFor("endereco");
    }

    if(emailValue == ''){
        setErrorFor("email");
    }else{
        setSuccessFor("email");
    }

    if(celularValue == ''){
        setErrorFor("celular");
    }else{
        setSuccessFor("celular");
    }

    if(celularValue && emailValue && enderecoValue && cidadeValue && sexoValue && idadeValue && rgValue && cpfValue && nomeValue != ""){
        alert("Cadastro feito com sucesso");
        document.getElementById("form").submit();
    }
}


function setSuccessFor(input){
    document.getElementById(input).style.borderColor = "green";
}
function setErrorFor(input){
    document.getElementById(input).style.borderColor = "red";
}

function validaCPF(cpf){

    cpf = cpf.replace(/\.|-/g,"");
    if(!isPrimeiroDigitoValido(cpf)){
        alert("CPF não é válido");
        return false;
    }
    if(!isSegundoDigitoValido(cpf)){
        alert("CPF não é válido");
        return false;
    }
    return true;
}

function isPrimeiroDigitoValido(cpf){
    let soma = 0;
    for (let i = 0; i < cpf.length-2; i++) {
        soma += cpf[i] * ((cpf.length-1)-i);
    }
    soma = (soma * 10) % 11;
    if (soma == 10 || soma == 11){
        soma = 0;
    }
    if (soma != cpf[9]){
        return false
    }
    return true
}

function isSegundoDigitoValido(cpf){
    let soma = 0;
    for (let i = 0; i < cpf.length-1; i++) {
        soma += cpf[i] * ((cpf.length)-i);
    }
    soma = (soma * 10) % 11;
    if (soma == 10 || soma == 11){
        soma = 0;
    }
    if (soma != cpf[10]){
        return false
    }
    return true
}






// function mascara(i,t){
   
//     var v = i.value;
    
//     if(isNaN(v[v.length-1])){
//        i.value = v.substring(0, v.length-1);
//        return;
//     }

//     if(t == "cpf"){
//        i.setAttribute("maxlength", "14");
//        if (v.length == 3 || v.length == 7) i.value += ".";
//        if (v.length == 11) i.value += "-";
//     }

//     if(t == "rg"){
//         i.setAttribute("maxlength", "12");
//         if (v.length == 2 || v.length == 6) i.value += ".";
//         if (v.length == 10) i.value += "-";
//     }

//     if(t == "tel"){
//         if(v[0] == 9){
//            i.setAttribute("maxlength", "12");
//            if (v.length == 0) i.value += "(";
//            if (v.length == 3) i.value += ")";
//            if (v.length == 6) i.value += "-";
//         }else{
//            i.setAttribute("maxlength", "13");
//            if (v.length == 0) i.value += "(";
//            if (v.length == 2) i.value += ")";
//            if (v.length == 8) i.value += "-";
//         }
//     }
// }
$("#celular").mask("(99) 99999-9999");
$("#cpf").mask("999.999.999-99");
$("#rg").mask("99.999.999-9");