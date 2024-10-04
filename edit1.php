<?php
include 'config1.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE libros SET titulo = ?, autor = ? WHERE id = ?");
    $stmt->execute([$titulo, $autor, $id]);

    header('Location: index1.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM libros WHERE id = $id");
$libro = $stmt->fetch();

?>

<h2>Editar Libro</h2>

<form action="edit1.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
    titulo: <input type="text" name="titulo" value="<?php echo $libro['titulo']; ?>"><br>
    autor: $<input type="text" name="autor" value="<?php echo $libro['autor']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
