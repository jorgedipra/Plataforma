
$(document).ready(function() {   
  if(localStorage.getItem('UName')){ 
 $('h1').html(localStorage.getItem('UName'));
 
    var image = $( "#imgCC" );
	image.attr("src", localStorage.getItem('UUrl'));
}

});