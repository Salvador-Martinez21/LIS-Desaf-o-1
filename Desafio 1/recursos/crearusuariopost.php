<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario Creado</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background-color: #f4f4f4; padding-top: 50px; }
        .card { background: white; width: 550px; border: 1px solid #28a745; border-radius: 10px; padding: 20px; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th { text-transform: uppercase; padding: 10px; border-bottom: 1px solid #ddd; }
        td { padding: 15px 10px; text-align: left; }
        .alert-minor { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px; border-radius: 5px; margin-top: 10px; }
    </style>
</head>
<body>

<div class="card">
    <h1>Crear Usuario</h1>
    <hr style="border: 0; border-top: 2px solid #28a745;">

    <?php
    $inputUsuario = strval($_POST['inputUsuario']);
    $inputNombres = strval($_POST['inputNombres']);
    $inputApellidos = strval($_POST['inputApellidos']);
    $inputEdad = intval($_POST['inputEdad']);
    $inputSexo = strval($_POST['inputSexo']);

    $contra_aleatoria = base64_encode(openssl_random_pseudo_bytes(8));

    function distincionMenorEdad($inputEdad, $inputSexo) {
        global $inputNombres;
        global $inputApellidos;
        $rutuloSexoMenordeEdad = "";

        if ($inputEdad < 18) {
            if ($inputSexo == "M") {
                $rutuloSexoMenordeEdad = "El niño " . $inputNombres . " " . $inputApellidos . " Es menor de Edad!";
            } else {
                $rutuloSexoMenordeEdad = "La niña " . $inputNombres . " " . $inputApellidos . " Es menor de Edad!";
            }
        }
        return $rutuloSexoMenordeEdad;
    }

    $resultadoMenor = distincionMenorEdad($inputEdad, $inputSexo);
    ?>

    <table>
        <tr>
            <th>USUARIO</th>
            <th>CONTRASEÑA</th>
        </tr>
        <tr>
            <td><strong><?php echo $inputUsuario; ?></strong></td>
            <td style="color: #666;"><?php echo $contra_aleatoria; ?></td>
        </tr>
    </table>

    <?php if ($resultadoMenor != ""): ?>
        <div class="alert-minor">
            <?php echo $resultadoMenor; ?>
        </div>
    <?php endif; ?>

    <br>
    
    <a href="crear_usuario.php" style="color: #28a745; text-decoration: none;">Regresar</a>
</div>

</body>
</html>