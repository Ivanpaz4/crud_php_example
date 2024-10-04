<?php
include 'config1.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $genero = $_POST['genero'];
    $anio_publicacion = $_POST['anio_publicacion'];

    try {
        $sql = "INSERT INTO libros (titulo, autor, genero, anio_publicacion) VALUES (:titulo, :autor, :genero, :anio_publicacion)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $titulo, 'autor' => $autor, 'genero' => $genero, 'anio_publicacion' => $anio_publicacion]);

        $message = 'libro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el libro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir libro</title>
</head>
<body>
<h2>Añadir nuevo libro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create1.php" method="post">
    <label for="titulo">titulo:</label>
    <input type="text" name="titulo" id="titulo" required>
    <br>
    <label for="autor">Descripción:</label>
    <textarea name="autor" id="autor"></textarea>
    <br>
    <label for="genero">Precio:</label>
    <input type="text" name="genero" id="genero" required>
    <br>
    <label for="anio_publicacion">Stock:</label>
    <input type="number" name="anio_publicacion" id="anio_publicacion" required>
    <br>
    <input type="submit" value="Añadir libro">
</form>

</body>
</html>
