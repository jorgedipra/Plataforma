/*
@movimiento de objeto
 */
$(function() {
    $(".target").draggable();
  });
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
/*
@pestañas
 */
 $(function() {
    $("#tabs").tabs();
 });
/*
@calendario
 */
$(function() {
    $("#datepicker").datepicker();
});