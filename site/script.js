function validar() {

    var nome = cadastro1.nome.value;
    var idade = cadastro1.idade.value;
    var cpf = cadastro1.cpf.value;
    var rg = cadastro1.rg.value;
    var sexo = cadastro1.sexoForm.value;

    if (nome.value == "") {
        alert("Nome não informado.");
        nome.focus();
        return;
    }
    if (idade.value == "") {
        alert("Idade não programada.");
        idade.focus();
        return;
    }
    if (cpf.value == "") {
        alert("CPF não informado.");
        cpf.focus();
        return;
    }
    if (email.value == "") {
        alert("Email não informado.");
        email.focus();
        return;
    }
    if (rg.value == "") {
        alert("RG não informado.");
        rg.focus();
        return;
    }
    if (sexo.value == "") {
        alert("Sexo não informado.");
        sexo.focus();
        return;
    }
    alert("Formulário enviado.")
    window.location.href = "http://127.0.0.1:5500/site/cadastro2.html";

}