<!DOCTYPE html>
<html>
<head>
    <title>Registrar Estudiante</title>
</head>
<body>
    <h1>Registrar Estudiante</h1>
    <form method="post" action="registrar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Registrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = trim($_POST["nombre"]);

        if (!empty($nombre)) {
            $archivo = "estudiantes.txt";
            if (file_exists($archivo)) {
                $actual = file_get_contents($archivo);
            } else {
                $actual = "";
            }
            $actual .= $nombre . "\n";
            file_put_contents($archivo, $actual);
            echo "Estudiante registrado correctamente.";
            header("Location: mostrar_lista.php");
            exit();
        } else {
            echo "Por favor, introduce un nombre.";
        }
    }
    ?>
</body>
</html>


