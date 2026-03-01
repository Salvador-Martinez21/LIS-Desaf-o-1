<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de Estudiantes</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background-color: #f4f4f4; }
        .card { background: white; width: 800px; border: 1px solid #28a745; border-radius: 10px; padding: 20px; text-align: center; margin-top: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { font-size: 12px; color: #666; padding: 10px; border-bottom: 2px solid #28a745; }
        td { padding: 10px; background-color: #f9f9f9; border-bottom: 1px solid #eee; }
        input { width: 90%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; text-align: center; }
        .btn-calc { background-color: #28a745; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; float: right; margin-top: 20px; }
    </style>
</head>
<body>
<div class="card">
    <h1 style="color: #333;">Notas de Estudiantes</h1>
    <hr style="border-top: 1px solid #28a745;">

    <?php
    $alumnos = array(
        0 => array('nombre' => 'Juan Perez', 'nota1' => 8, 'nota2' => 7, 'nota3' => 9),
        1 => array('nombre' => 'Ana Diaz', 'nota1' => 9, 'nota2' => 9, 'nota3' => 8),
        2 => array('nombre' => 'Vilma Perez', 'nota1' => 6, 'nota2' => 9, 'nota3' => 9)
    );
    ?>

    <form method="GET" action="estudiantesprocesar.php">
        <table>
            <tr>
                <th>FILA</th>
                <th>ESTUDIANTE</th>
                <th>NOTA 1</th>
                <th>NOTA 2</th>
                <th>NOTA 3</th>
            </tr>
            <?php foreach ($alumnos as $id => $datos): ?>
            <tr>
                <td><input type="text" name="id[]" value="<?php echo $id; ?>" readonly style="width: 30px; background: #eee;"></td>
                <td><input type="text" name="nombre[]" value="<?php echo $datos['nombre']; ?>"></td>
                <td><input type="number" step="0.01" name="nota1[]" value="<?php echo $datos['nota1']; ?>"></td>
                <td><input type="number" step="0.01" name="nota2[]" value="<?php echo $datos['nota2']; ?>"></td>
                <td><input type="number" step="0.01" name="nota3[]" value="<?php echo $datos['nota3']; ?>"></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <button type="submit" class="btn-calc">Calcular Promedio</button>
    </form>
</div>
</body>
</html>