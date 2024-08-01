<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h1>Lista de Estudiantes</h1>

    <!-- Mostrar mensaje de éxito -->
    <?php if (!empty($message)): ?>
        <p style="color: green;"><?= esc($message) ?></p>
    <?php endif; ?>

    <ul>
        <?php foreach ($estudiantes as $estudiante): ?>
            <li><?= esc($estudiante['nombre']); ?> - <?= esc($estudiante['cedula']); ?>
                <a href="/estudiante/eliminar/<?= esc($estudiante['id']); ?>"></a>
                <a href="/estudiante/actualizar/<?= esc($estudiante['id']); ?>"></a>
            </li>
            
        <?php endforeach; ?>
    </ul>
    <h3>Realizado por: </h3>
    <h3>MOREIRA RODRIGUEZ LUIS</h3>
    <h3>SACON MACIAS SILVIA</h3>
</body>
</html>

