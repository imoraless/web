
<p id="registroView1"> Se informa de la necesidad de rellenar todos los campos disponibles en el caso de albergar la voluntad de añadir un producto, 
    introduciendo en la última celda el ID de la categoria correspondiente. </p>
<p id="registroView2"> En el caso de querer borrar un producto, en la última casilla debe introducir el id del producto a eliminar. Los campos restantes
    no son requeridos </p>

<form id="registroView" action="" method="post">

           
         <input class="r" type = "text" name="nombre_producto" placeholder = "nombre del producto"> 
         <input type = "text"  name="URL_imagen" placeholder = "URL imagen"> 
         <input type = "text" name="color" placeholder = "color del producto"> 
         <input type = "number" name="cantidad" placeholder = "unidades del producto"> 
         <input type = "number" name="precio" placeholder = "precio del producto" step= "0.01"> 
         <input type = "text" name="id" placeholder = "ID CATEGORIA / ID PRODUCTE">
         <input type = "submit" name="boton" value = "AÑADIR">
         <input type = "submit" name="boton" value = "BORRAR" /> 
    </form>



