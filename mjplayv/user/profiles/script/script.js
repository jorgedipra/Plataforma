
$(document).ready(function() {   
  if(localStorage.getItem('UName')){ 
 $('h1').html(localStorage.getItem('UName'));
 $('h2').html(localStorage.getItem('Uapodo'));

 	var inputAlia=$("#Alias");
 	inputAlia.val(localStorage.getItem('Uapodo'));

    var image = $( "#imgCC" );
	image.attr("src", localStorage.getItem('UUrl'));
}

});