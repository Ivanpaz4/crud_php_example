<?php
include 'config1.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libro SET nombre = ?, precio = ? WHERE id = ?");
    $stmt->execute([$nombre, $precio, $id]);

    header('Location: index1.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libro WHERE id = $id");
$librito = $stmt->fetch();

?>

<h2>Editar Jabón</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $librito['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $librito['nombre']; ?>"><br>
    Precio: $<input type="text" name="precio" value="<?php echo $librito['precio']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
