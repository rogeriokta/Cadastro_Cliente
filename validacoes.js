function formatar(mascara, documento){
var i = documento.value.length;
var saida = mascara.substring(0,1);
var texto = mascara.substring(i)
	if (texto.substring(0,1) != saida){
	documento.value += texto.substring(0,1);
	}
}

function validaCampo(){

if(document.cadastro.nome.value==""){
	alert("O Campo nome é obrigatório!");
	return false;
}

else

if(document.cadastro.email.value==""){
	alert("O Campo e-mail é obrigatório!");
	return false;
}
else

if(document.cadastro.cpf.value==""){
	alert("O Campo CPF é obrigatório!");
	return false;
}
else

if(document.cadastro.nascimento.value==""){
	alert("O Campo Data Nascimento é obrigatório!");
	return false;
}
else
	return true;
}