/**
 * Script para validacion de datos en general + script generador de passwords aleatorias.
 */

function checkData(f){
	var name=f.name.value;
	var pass = f.pass.value;

	var namePattern=/^([A-ZÁÉÍÓÚÑñ])?[a-záéíóúñ?¿ºª ]{1,25}$/;
	var passPattern=/^[A-Z0-9a-zñ¿?$%&/()=|@#~€¬{}^* ]{6,30}$/;

	var contador=0;
	var wrongData=[];
	if(!isOK(name,namePattern)){
		wrongData[contador]="nombre";
		contador++;
	}
	
	if(!isOK(pass,passPattern)){
		wrongData[contador]="contrase&ntilde;a";
		contador++;
	}

	showResults(wrongData);
	
}//checkData

function isOK(value,pattern){
	if(pattern.test(value)){
		return true;
	}
	else{
		return false;
	}
}//isOK

function showResults(array){
	if(array.length!=0){
	var result="Comprueba si es correcto: ";
		for(i=0;i<array.length;i++){
			result+=array[i]+" ";
		}
		alertify.error(result);
	}
}

function generatePassword(){
    var passwordG=generateData();
    alert("Password generada: " + passwordG);
    document.getElementById("pwd").value=passwordG;
}
function generateData() {
var length = Math.floor(Math.random()*(30+1-6)+6);
var caracter = "0123456789abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ¿?$%&/()=|@#{}";
var result = "";
for (var i = 0, n = caracter.length; i < length; ++i) {
result += caracter.charAt(Math.floor(Math.random() * n));
}
return result;
}
