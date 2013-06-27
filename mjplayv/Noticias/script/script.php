<script>
/**
 * [movimiento de objeto con accion]
 * @return {[type]} [description]
 */
$(function() {

<?php for ($i=1; $i < 5; $i++) { 
      ?>
$( "#p<?php echo$i; ?>" ).draggable();
<?php 
} 
?>
  $( ".droppable" ).droppable({
      drop: function( event, ui ) {
  var currentId = $(ui.draggable).attr('id');  
 <?php for ($i=1; $i < 5; $i++) { 
      ?>
    if(currentId == "p<?php echo$i; ?>"){
        $( this )
          .addClass( "temp" )
          .find( "p" )
          	.html($(".NTexto<?php echo$i; ?>").val());
          $("#Nottit").html($(".NTitulo<?php echo$i; ?>").val()); 
          $("#NotPt").html($(".NTextoT<?php echo$i; ?>").val()); 
 		      $("#Notfecha").html($("#minNotfech<?php echo$i; ?>").html()); 
		      $("#NotuserNo").html($("#miniNotNam<?php echo$i; ?>").html()); 
          $("#Notimg").attr({
 			 src: $(".NImg<?php echo$i; ?>").val(),
 			 title: $(".NTitulo<?php echo$i; ?>").val(),
  				alt: $(".NTitulo<?php echo$i; ?>").val()
		  }); 
          $("#Notuserimg").attr({
 			 src: $(".NIusermg<?php echo$i; ?>").val(),
 			 title: $("#miniNotNam<?php echo$i; ?>").val(),
  				alt: $("#miniNotNam<?php echo$i; ?>").val()
		  }); 
         <?php for ($j=1; $j < 5; $j++) { 
      ?>
        $('#p<?php echo$j; ?>').show(); 
      <?php 
        } 
      ?>
         $('#p<?php echo$i; ?>').hide(); 
        

      }
<?php 
} 
?>
 }
  });  
  }); 
</script>