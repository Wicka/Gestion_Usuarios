

function rellena_nick(){
	var name = document.getElementById("nick").value;

	if (name == "") {
		document.getElementById("message_nick").innerHTML = "Escribe tu nick!";
	}else{
		document.getElementById("message_nick").innerHTML = "";
		return true;
	}
}


function rellena_password(){
	var pwd = document.getElementById("pwd").value;

	if (pwd == "") {
		document.getElementById("message_pwd").innerHTML = "Escribe la Contraseña!";
	}else{
		document.getElementById("message_pwd").innerHTML = "";
		return true;
	}
}

function valida_form(){
	if (rellena_nick() && rellena_password()){
		//	AMBOS CAMPOS RELLENADOS
		return true;
	}else{
		//	CAMPOS SIN RELLENAR
		return false;
	}
}
