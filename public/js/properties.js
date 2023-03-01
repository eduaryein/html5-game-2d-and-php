/*=============================================
VARIABLES DEL CANVAS
=============================================*/
let canvas;
let ctx;
let expx = /^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]+$/;
let expxP = /^[a-zA-Z0-9]+$/;
/*=============================================
FUNCIONES GLOBALES
=============================================*/
function notify(msj, type)
{
console.log("msj", msj);
}
/*=============================================
PROPIEDADES DEL OBJETO DATOS
=============================================*/

let data = {
	nivel: null,
	plano3: null,
	plano2: null,
	plano1: null,
	plano0: null
}