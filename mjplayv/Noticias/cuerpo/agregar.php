
<form action="agregarnoticias.php" method="post" enctype="multipart/form-data">
		nombre del articulo <input type="text" name="artNombre" value="">
		<br>	
		sintexis <textarea name="artsintexis" value=""> </textarea>
		<br>	
		resumen <textarea name="artresumen" value=""></textarea>
		<br>	
		contenido <textarea name="artreacontenido" value=""></textarea>
		<br>	
		imagenalusiva <input type="file" name="artimagen" value=""/>
		<br>	
		categorias <select name="categoria">
		            <?php
		            		while($res = $resul->fetch_assoc())
                                {
                                	?>
                                		<OPTION value="<?php echo $res['CtgId']?>"><?php echo $res['CtgTipo']?></OPTION>
                                	<?php
                                }

		            ?>
						
  
	                </select>
	            		<br>	

		referencias <input name="artreferencias" value="">
		<br>
	    permisos del articuco <select name="permisos"> <option value="0">Todos Editan</option>
	                                   <option value="1">Soy el unico que Edita</option>
	                                 </select>
		<button name="insertar">Insertar</button>
</form>

