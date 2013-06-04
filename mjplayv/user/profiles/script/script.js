
$(document).ready(function() {   
  if(localStorage.getItem('UName')){ 
 $('h1').html(localStorage.getItem('UName'));
}
});