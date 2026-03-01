<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background-color: #f4f4f4; padding-top: 50px; }
        .card { background: white; width: 450px; border: 2px solid #28a745; border-radius: 15px; text-align: center; overflow: hidden; padding-bottom: 20px; }
        .header-img { background-color: #f0fdf4; padding: 30px; }
        .date-bar { background-color: #e0e0e0; padding: 15px; font-size: 16px; color: #333; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; }
        .form-content { padding: 30px; }
        label { display: block; margin-top: 15px; color: #555; font-size: 18px; }
        input { width: 90%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; border-radius: 8px; font-size: 16px; }
        .btn-submit { background-color: #28a745; color: white; border: none; padding: 12px 30px; border-radius: 8px; cursor: pointer; font-size: 18px; margin-top: 15px; }
        small { color: #888; display: block; margin-top: -5px; margin-bottom: 10px; }
    </style>
</head>
<body>

<div class="card">
    <div class="header-img">
        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077063.png" width="100" alt="user">
    </div>
    
    <div class="date-bar">
        <?php
        date_default_timezone_set('America/El_Salvador');
        $dias = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
        $meses = ["","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        
        echo "Hoy es " . $dias[date('w')] . ", " . date('d') . " de " . $meses[date('n')] . " del " . date('Y') . " Son las: " . date('g:i a');
        ?>
    </div>

    <div class="form-content">
        <h1 style="color: #333; font-size: 40px; margin-top: 0;">Inicio de Sesión</h1>
        <hr style="border: 0; border-top: 2px solid #28a745; width: 60%; margin-bottom: 20px;">
        
        <form name="formLogin" method="POST" action="loginpost.php">
            <label>Correo Electrónico:</label>
            <input type="text" name="inputEmail" required>
            <small>No comparta sus credenciales con nadie.</small>
            
            <label>Contraseña</label>
            <input type="password" name="inputPassword" placeholder="Contraseña" required>
            
            <button type="submit" class="btn-submit">Iniciar Sesión</button>
        </form>
    </div>
</div>

</body>
</html>