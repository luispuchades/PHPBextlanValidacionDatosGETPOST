// DEFINICION DE CONSTANTES

// DECLARACION DE VARIABLES
var validaDatosNombreGET = document.querySelector("#nombre-get");
var validaDatosPasswordGET = document.querySelector("#password-get");
var validaDatosSexo = document.querySelectorAll("input[name='sexo_rdo']");
var enviaDatosGET = document.querySelector("#enviar-get");
var validaDatosGET = document.querySelector("#valida_datos_get");


var validaDatosNombrePOST = document.querySelector("#nombre-post");
var validaDatosPasswordPOST = document.querySelector("#password-post");
var enviaDatosPOST = document.querySelector("#enviar-post");
var validaDatosPOST = document.querySelector("#valida_datos_post");


// DEFINICION DE FUNCIONES

function validarDatosGET()
{
	var verificar=true;

	if(!validaDatosNombreGET.value)
	{
		alert("El campo nombre está vacio");
		validaDatosNombreGET.focus();
		verificar = false;
	}
	else if(!validaDatosPasswordGET.value)
	{
		alert("El campo password está vacio");
		validaDatosPasswordGET.focus();
		verificar = false;
	}
	else if(!validaDatosSexo[0].checked && !validaDatosSexo[1].checked)
	{
		alert("El sexo no está especificado");
		validaDatosSexo[0].focus();
		verificar = false;
	}
	if(verificar==true)
	{
		validaDatosGET.submit();
	}

}

function validarDatosPOST()
{
	var verificar=true;

	if(!validaDatosNombrePOST.value)
	{
		alert("El campo nombre está vacio");
		validaDatosNombrePOST.focus();
		verificar = false;
	}
	else if(!validaDatosPasswordPOST.value)
	{
		alert("El campo password está vacio");
		validaDatosPasswordPOST.focus();
		verificar = false;
	}
	else if(!validaDatosSexo[2].checked && !validaDatosSexo[3].checked)
	{
		alert("El sexo no está especificado");
		validaDatosSexo[2].focus();
		verificar = false;
	}

	if(verificar==true)
	{
		validaDatosPOST.submit();
	}

}



function alCargarDocumento()
{
	enviaDatosGET.addEventListener("click",validarDatosGET);
	enviaDatosPOST.addEventListener("click",validarDatosPOST);
}


// DECLARACION DE EVENTOS
window.addEventListener("load",alCargarDocumento);