
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
		            		while($res = $result->fetch_assoc())
                                {
                                	?>
                                		<OPTION value="<?php echo $res['CtgId']?>"><?php echo $res['CtgTipo']?></OPTION>
                                	<?php
                                }

		            ?>
						
  
	                </select>
		referencias <input name="artreferencias" value="">
		<button name="insertar">Insertar</button>
</form>

