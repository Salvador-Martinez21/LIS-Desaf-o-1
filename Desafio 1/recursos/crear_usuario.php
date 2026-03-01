<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background-color: #f4f4f4; padding-top: 50px; }
        .card { background: white; width: 500px; border: 1px solid #28a745; border-radius: 10px; padding: 30px; text-align: center; }
        hr { border: 0; border-top: 2px solid #28a745; margin: 20px 0; }
        .row { display: flex; gap: 20px; margin-bottom: 15px; }
        .col { flex: 1; text-align: left; }
        label { display: block; margin-bottom: 5px; font-weight: bold; text-align: center; }
        input[type="text"], input[type="number"] { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .btn-submit { background-color: #28a745; color: white; border: none; padding: 12px 25px; border-radius: 5px; cursor: pointer; width: 100%; }
    </style>
</head>
<body>

<div class="card">
    <h1>Crear Usuarios</h1>
    <hr>
    
    <form name="formUsuarios" method="POST" action="crearusuariopost.php">
        <div style="margin-bottom: 15px;">
            <label>Nuevo Usuario:</label>
            <input type="text" name="inputUsuario" required>
        </div>

        <div class="row">
            <div class="col">
                <label>Nombres:</label>
                <input type="text" name="inputNombres" required>
            </div>
            <div class="col">
                <label>Apellidos:</label>
                <input type="text" name="inputApellidos" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label>Edad:</label>
                <input type="number" name="inputEdad" required>
            </div>
            <div class="col">
                <label>Sexo</label>
                <div style="text-align: left; padding-left: 20px;">
                    <label style="font-weight: normal;"><input type="radio" name="inputSexo" value="M" checked> Masculino</label>
                    <label style="font-weight: normal;"><input type="radio" name="inputSexo" value="F"> Femenino</label>
                </div>
            </div>
        </div>

        <hr>
        <button type="submit" class="btn-submit">Crear Usuario</button>
    </form>
</div>

</body>
</html>