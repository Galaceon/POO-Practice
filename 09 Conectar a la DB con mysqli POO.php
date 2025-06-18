<?php include 'includes/header.php';


// Conectar a la DB con mysqli en la forma NO orientada a objetos
// $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');



// Conectar a la DB con mysqli en la forma orientada a objetos
$db = new mysqli('localhost','root','root','bienesraices_crud');

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

// Lo ejecutamos
$stmt->execute();

// Creamos la variable
$stmt->bind_result($titulo, $imagen);

// Asignamos el resultado
$stmt->fetch();

// Imprimir el resultado (SOLO IMPRIMIMOS UN RESULTADO)
echo $titulo;
echo $imagen;


// Imprimir TODOS los resultados
while($stmt->fetch()):
    echo $titulo;
endwhile;



include 'includes/footer.php';