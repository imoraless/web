<!-- resource_merch.php -->

<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="UTF-8">	
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>merch - BP</title>
	    <link rel="stylesheet" type ="text/css" href="css/disseny2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
   <body>
   
      <header>
          <?php require __DIR__.'/controller/menu_superior.php'; ?>
      <header>
      
      <?php $id = 5 ?>

      <div class="cont5">
          <?php require __DIR__.'/controller/prod.php'; ?>
      </div>

    </body>
</html>