<!-- // views/llistar_discos.php -->

<!-- HECHO, FALTA ENCADENAR CON CSS -->

<?php print_r($accio); ?>
<body>

<?php $aux2 = 0; ?>
 <div class = <?php"grid-layout"?>> 
    <ul>
		   
        <?php foreach ($prod as $p) { ?>
        
            
		        <div class ="album"> 
            	
					<img  class="fotos" src = "<?php echo $p['imagen']; ?>" width="300" height="300" alt="Computer Hope"> 
                    <h3><?php echo $p['nombre_producto'] ?> </h3>
                    <!--<p><?php //echo $p['color'] ?> </p>-->
					
                    <p> Precio: <?php echo $p['precio'] ?> euros </p>
					<p> Stock:  <?php echo $p['cantidad'] ?> unidades</p>					
                    <a href="index.php?accio=carro">comprar</a>
					
					<?php $aux =  $p['producto_id'] ?>
		
					<button id="accioDescripcio" onclick="$('#accioDescripcio').load('index.php?accio=description&aux=<?php echo $aux ?>' );">DESCRIPCIO</button>
				
					
					<?php $aux2 = $aux2 + 1;?>
            
	        	</div>
				
				


		<?php } ?>
		
    </ul>
	</div>
	
</body>
<script>
</script>

<!--onclick=""-->


<!-- FALTA:  src = fotos/CaratulaUv4.jpg -->
	<!--<div class ="album">
		<img src = "fotos/caratuladeff.png" width="300" height="300" alt="Computer Hope">
		<a href="shop.html">comprar</a>
	</div>
	<div class ="album">
		<img src = "fotos/CaratulaUv4.jpg" width="300" height="300" alt="Computer Hope">
		<a href="shop.html">comprar</a>
	</div>
	<div class ="album">
		<img src = "fotos/caratuladeff.png" width="300" height="300" alt="Computer Hope">
		<a href="shop.html">comprar</a>
	</div>-->


