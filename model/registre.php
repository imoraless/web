<?php


    $nombre = isset($_POST['nom'])?$_POST['nom']: '';
    $mail = isset($_POST['mail'])?$_POST['mail']: '';
    $numero = isset($_POST['numero'])?$_POST['numero']: '';
    $password = isset($_POST['contraseña'])?$_POST['contraseña']: '';
    $passwordConf = isset($_POST['contraseñaConf'])?$_POST['contraseñaConf']: '';  
    $direccion = isset($_POST['direccion'])?$_POST['direccion']: '';
    $cp = isset($_POST['cp'])?$_POST['cp']: '';
    $boton2 = isset($_POST['boton2'])?$_POST['boton2']: '';
 
    if($boton2 == 'REGISTER' AND $password == $passwordConf)
    {    
        $preparada = $instancia->prepare("INSERT INTO usuario (nombre_completo,contraseña,mail,direccion,codigo_postal,telefono) 
                     VALUES ('$nombre','$password','$mail','$direccion','$cp','$numero')");          
        $preparada->execute();
    }
  
?>