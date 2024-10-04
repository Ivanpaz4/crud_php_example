<?php
include 'config1.php';

$stmt = $pdo->query('SELECT * FROM libros');
$libros = $stmt->fetchAll();
?>

<h2>Listado de libros</h2>

<!-- Botón para crear un nuevo libro -->
<a href="create1.php">Crear nuevo libro</a>
<br><br>

<ul>
<?php foreach ($libros as $libro): ?>
    <li>
        <?php echo $libro['titulo']; ?> - $<?php echo $libro['autor']; ?>
        <a href="edit1.php?id=<?php echo $libro['id']; ?>">Editar</a>
        <a href="delete1.php?id=<?php echo $libro['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
