<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>

    <?php
    $archivo = "estudiantes.txt";

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        $estudiantes = explode("\n", trim($contenido));
    } else {
        $estudiantes = [];
    }
    ?>

    <?php if (!empty($estudiantes)): ?>
        <ul>
            <?php foreach ($estudiantes as $estudiante): ?>
                <?php if (!empty($estudiante)): ?>
                    <li><?php echo htmlspecialchars($estudiante); ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay estudiantes registrados.</p>
    <?php endif; ?>

    <a href="registrar.php">Registrar otro estudiante</a>
</body>
</html>



