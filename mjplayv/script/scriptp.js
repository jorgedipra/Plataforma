/*
@movimiento de fondo
 */
window.onload = function() {
      document.onmousemove = function(e) {
        var x = -(e.clientX/10);
        var y = -(e.clientY/10);
        this.body.style.backgroundPosition = x + 'px ' + y + 'px';
      };
    };
 /*
 @bloqueo de boton derecho
  */
/////////////////////////////////////document.oncontextmenu = function(){return false}   
/**
 * [movimiento de objeto con accion]
 * @return {[type]} [description]
 */
$(function() {
    $( ".draggable" ).draggable();
    $( ".droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "temp" )
          .find( "p" )
          	.html($(".NTexto").val());
          $("#Nottit").html($(".NTitulo").val()); 

          $("#NotPt").html($(".NTextoT").val()); 

          $("#Notimg").attr({
 			 src: $(".NImg").val(),
 			 title: $(".NTitulo").val(),
  				alt: $(".NTitulo").val()
		  }); 

          $('.draggable').hide();      	
        //$(".hola").val($(".texto").val());  	

      }
    });
  });   