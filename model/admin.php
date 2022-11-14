<?php

    
    $nombre_producto = isset($_POST['nombre_producto'])?$_POST['nombre_producto']: '';
    $URL_imagen = isset($_POST['URL_imagen'])?$_POST['URL_imagen']: '';
    $color = isset($_POST['color'])?$_POST['color']: '';
    $cantidad = isset($_POST['cantidad'])?$_POST['cantidad']: '';
    $precio = isset($_POST['precio'])?$_POST['precio']: '';  
    $boton = isset($_POST['boton'])?$_POST['boton']: '';
    $id = isset($_POST['id'])?$_POST['id']: '';
    //$boton2 = isset($_POST['boton2'])?$_POST['boton2']: '';
echo $boton;
//echo $boton2;

    if($boton == 'AÑADIR')
    {    
        $preparada = $instancia->prepare("INSERT INTO producte (nombre_producto,imagen,color,cantidad,precio,categoria_id) 
                     VALUES ('$nombre_producto','$URL_imagen','$color','$cantidad','$precio','$id')");          
        $preparada->execute();
    }
    if($boton == 'BORRAR')
    {    
        
        $preparada = $instancia->prepare("DELETE FROM producte WHERE producto_id=:producto_id "); 
        $preparada->bindParam(':producto_id', $id);



        $preparada->execute();
    }

?>