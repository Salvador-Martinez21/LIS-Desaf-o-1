<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Inicio de Sesión</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background-color: #f4f4f4; padding-top: 50px; }
        .card { background: white; width: 450px; border: 2px solid #28a745; border-radius: 15px; text-align: center; padding: 30px; }
        .result-box { background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 25px; border-radius: 10px; margin: 20px 0; font-size: 18px; line-height: 1.6; }
        .btn-regresar { background-color: #28a745; color: white; text-decoration: none; padding: 12px 30px; border-radius: 8px; display: inline-block; font-size: 18px; }
    </style>
</head>
<body>

<div class="card">
    <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" width="100" alt="user">
    <hr style="border: 0; border-top: 2px solid #28a745; margin: 20px 0;">
    <h1 style="color: #333; font-size: 35px;">Validar Inicio de Sesión</h1>

    <?php
    $inputEmail = strval($_POST["inputEmail"]); 
    $LargoinputEmail = strlen($inputEmail);
    
    $inputPassword = strval($_POST["inputPassword"]); 
    $LargoinputPassword = strlen($inputPassword); 

    $patron = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $verificado = preg_match($patron, $inputEmail); 
    ?>

    <div class="result-box">
        <strong><?php echo $inputEmail; ?></strong><br>
        <?php echo $verificado ? "Es un Correo Electrónico Válido!" : "Correo No Válido"; ?>
    </div>

    <div class="result-box">
        La longitud de la Contraseña seleccionada es:<br>
        <strong style="font-size: 30px;"><?php echo $LargoinputPassword; ?></strong>
    </div>

    <br>
    <a href="login.php" class="btn-regresar">Regresar</a>
</div>

</body>
</html>