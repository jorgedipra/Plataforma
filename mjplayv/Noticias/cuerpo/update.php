 ACTUALIZAR
 <?php
 $i=0;
 while($resu=$resultado->fetch_assoc())
 {


 ?>
<form action="updateNoticias.php" method="post" enctype="multipart/form-data">
		nombre del articulo <input type="text" name="artNombre<?php echo $i;?>" value="<?php echo $resu['ArtNombre'];?>">
		<br>	
		sintexis <textarea name="artsintexis<?php echo $i;?>" value=""> <?php echo $resu['sintexis'];?></textarea>
		<br>	
		resumen <textarea name="artresumen<?php echo $i;?>"   value=" "><?php echo $resu['ArtResumen'];?></textarea>
		<br>	
		contenido <textarea name="artreacontenido<?php echo $i;?>" value=""><?php echo $resu['ArtContenido'];?></textarea>
		<br>
		<img src="<?php echo $resu['ArtImagen'];?>" width="180px" height="150px">	
		<br>
		imagenalusiva <input type="file" name="artimagen<?php echo $i;?>" value=""/>
		<br>	
		categorias <select name="categoria<?php echo $i;?>">
		            <?php
		            
                     $categorias="SELECT * FROM categoria";
                     $resul =  $objopera->buscar($categorias);
                     
		            		while($res = $resul->fetch_assoc())
                                {
                                	?>
                                		<OPTION value="<?php echo $res['CtgId']?>"><?php echo $res['CtgTipo']?></OPTION>
                                	<?php
                               }

		            ?>
						
  
	                </select>
	            		<br>	    
		referencias <input name="artreferencias" value="<?php echo $resu['ArtReferencias'];?>">
		<button name="insertar">Actualizar</button>
			<br>	 
</form>

 
<?php
$i++;
} 

 ?>
