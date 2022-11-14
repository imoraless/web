
<?php

        $preparada = $instancia->prepare("SELECT * FROM producte WHERE categoria_id =:categoria_id"); //prepara la consulta para ser ejecutada
        $preparada->bindParam(':categoria_id', $id);
        $preparada->execute();
        
        $prod = $preparada->fetchAll(PDO::FETCH_ASSOC);

    






































/*
INSERT INTO `categoria` (`id_categoria`, `imagen`, `nombre`) VALUES ('1', 'imagen no definida', 'registrat'), 
('2', 'imagen no definida', 'discos'), ('3', 'imagen no definida', 'nosotros'), 
('4', 'imagen no definida', 'tour'), ('5', 'imagen no definida', 'merch'), ('6', 'imagen no definida', 'carro');


INSERT INTO `producte` (`nombre_producto`, `imagen`, `color`, `cantidad`, `precio`, `producto_id`) 
VALUES ('tour1', 'imagen no definida', 'no especificado', '20', '85', '1'), 
('tour2', 'imagen no definida', 'no especificado', '25', '90', '2'), 
('tour3', 'imagen no definida', 'no especificado', '27', '84', '3'), 
('tour4', 'imagen no definida', 'no especificado', '30', '73', '4'), 
('disco1', 'imagen no definida', 'no especificado', '13', '8', '5'), 
('disco2', 'imagen no definida', 'no especificado', '15', '11', '6'), 
('merch1', 'imagen no definida', 'rojo', '2', '53', '7'), ('merch2', 'imagen no definida', 'blanco', '4', '50', '8');





    function getProd($conn, $id_Cat)
    {
        //$id_C = 'SELECT distinct id_categoria FROM Categoria WHERE nom_Categoria = Discos'

        $consulta = 'SELECT * FROM Producte WHERE id_Cat =:id_C'

        $preparada = $conn->prepare($consulta); //prepara la consulta para ser ejecutada
        $preparada->bindValue(':id_C', $id_Cat);
        $preparada->execute();

        $prod = $preparada->fetchAll(PDO::FETCH_ASSOC );

        return $prod
        
    }*/
    ?>