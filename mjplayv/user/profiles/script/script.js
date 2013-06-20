
$(document).ready(function() {   
  if(localStorage.getItem('UName')){ 
 $('h1').html(localStorage.getItem('UName'));
 $('h2').html(localStorage.getItem('Uapodo'));

 	var inputAlia=$("#Alias");
 	inputAlia.val(localStorage.getItem('Uapodo'));//apodo

 	var inputname=$("#Nombre");
 	inputname.val(localStorage.getItem('UNameA'));//nombre apellido

 	var inputcorreo=$("#Correo");
 	inputcorreo.val(localStorage.getItem('UCorre'));//correo

	if (localStorage.getItem('UUrl')=='nada') {}else{
	var image = $( "#imgCC" );
	image.attr("src", localStorage.getItem('UUrl'));//url imagen
	}

	 if (localStorage.getItem('Uidioma')=='2') {	//cambiar palabras a ingles
	$('#Namef').html("Name:");
	$('#Diereccionf').html("Email:");
	$('#passf').html("New password:");
	$('#Idiomaf').html("Idiom:");
	$('#Limg').html("Change image:");
	$('#carg').val("Upload");
	$('#btn').html("Send");
	$("#pass").val("Change Pass");
	$('#Port').html("Learning");
	$('#Face').html("Multimedia");
	$('#Twt').html("News");
	$('#Goo').html("Game");
 }
}

});