
<?php




$aux = isset($_GET['aux']) ? $_GET['aux'] : NULL;



$preparada2 = $instancia->prepare('SELECT * FROM producte WHERE producto_id =:producto_id');

echo $aux;
$idProducte = 1;

$preparada2->bindValue('producto_id', $aux);
$preparada2->execute();

$detalls_resultat = $preparada2->fetchAll(PDO::FETCH_ASSOC);



?>

