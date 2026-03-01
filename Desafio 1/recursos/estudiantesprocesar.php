<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedios</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; flex-direction: column; align-items: center; background-color: #f4f4f4; padding-top: 30px;}
        .card { background: white; width: 850px; border: 1px solid #28a745; border-radius: 10px; padding: 20px; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { font-size: 12px; color: #666; padding: 10px; border-bottom: 2px solid #28a745; }
        td { padding: 10px; border-bottom: 1px solid #eee; text-align: center; }
        .error-msg { color: #721c24; background: #f8d7da; padding: 10px; border-radius: 5px; margin-bottom: 5px; width: 80%; }
    </style>
</head>
<body>

<?php
spl_autoload_register(function($class) {
    require_once "class/" . $class . ".class.php";
});

$ids = $_GET['id'];
$nombres = $_GET['nombre'];
$n1 = $_GET['nota1'];
$n2 = $_GET['nota2'];
$n3 = $_GET['nota3'];
?>

<div class="card">
    <h1>Notas de Estudiantes - Promedios</h1>
    <hr style="border-top: 1px solid #28a745;">
    
    <table>
        <tr>
            <th>FILA</th>
            <th>ESTUDIANTE</th>
            <th>NOTA 1</th>
            <th>NOTA 2</th>
            <th>NOTA 3</th>
            <th>PROMEDIO</th>
        </tr>
        <?php foreach ($ids as $val): ?>
            <?php
            try {
                $objEstudiante = new estudiante($n1[$val], $n2[$val], $n3[$val]);
                $promedio = $objEstudiante->calcularPromedio();

                if ($promedio < 0 || $promedio > 10) {
                    throw new Exception("El promedio no puede ser menor que cero ni mayor que 10");
                }
            ?>
                <tr>
                    <td><?php echo $val; ?></td>
                    <td><input type="text" value="<?php echo $nombres[$val]; ?>" readonly></td>
                    <td><input type="text" value="<?php echo $n1[$val]; ?>" readonly style="width: 40px;"></td>
                    <td><input type="text" value="<?php echo $n2[$val]; ?>" readonly style="width: 40px;"></td>
                    <td><input type="text" value="<?php echo $n3[$val]; ?>" readonly style="width: 40px;"></td>
                    <td><input type="text" value="<?php echo $promedio; ?>" readonly style="width: 60px; font-weight: bold;"></td>
                </tr>
            <?php
            } catch (Exception $e) {
                echo "</table><div class='error-msg'>Para " . $nombres[$val] . ": " . $e->getMessage() . "</div><table>";
            }
            ?>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="estudiantes.php" style="color: #28a745; text-decoration: none;">← Regresar</a>
</div>
</body>
</html>