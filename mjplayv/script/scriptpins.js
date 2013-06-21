/**
 * [ready funcion de arranque de la pagina]
 * @return {[type]} [No tiene retorno de datos(ajax)]
 */
$(document).ready(function() { 
if (localStorage.getItem('Uidioma')=='2') {
	$('#EditP').html("::Edit:: Profile");
}
});