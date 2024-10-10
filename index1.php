<?php
include 'config1.php';

$stmt = $pdo->query('SELECT * FROM libro');
$libro = $stmt->fetchAll();
?>

<h2>Listado de Libros</h2>

<!-- Botón para crear un nuevo Libro -->
<a href="create1.php">Crear nuevo Libro</a>
<br><br>

<ul>
<?php foreach ($libro as $librito): ?>
    <li>
        <?php echo $librito['nombre']; ?> - $<?php echo $librito['precio']; ?>
        <a href="edit1.php?id=<?php echo $librito['id']; ?>">Editar</a>
        <a href="delete1.php?id=<?php echo $librito['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
