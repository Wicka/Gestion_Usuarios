

//VERIFICACION DE QUE LOS CAMPOS ESTAN RELLENADOS Y CON LOS PARAMETROS QUE QUIERO

function rellena_nick(){
		var nick = document.getElementById("nick").value;

		if (nick == "") {
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
							return true
			}
}


function valida_login(){
	if (rellena_nick() && rellena_password()){
		return true;
	}else{
		return false;
	}
}
