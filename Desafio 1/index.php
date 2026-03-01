<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="recursos/styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/xp.css" />
    <link rel="shortcut icon" href="https://admacad.udb.edu.sv/Recursos/imagenes/favicon_nuevo.ico" type="image/x-icon">
    <title>LIS104</title>
  </head>
  <body>
    <div id="root">
      <div class="container">
        <div class="window movable">
          <div class="title-bar">
            <div class="title-bar-text">Desafío práctico número 1</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button
              ><button aria-label="Maximize"></button
              ><button aria-label="Close"></button>
            </div>
          </div>
          <div class="window-body">
            <img src="recursos/udblogo.png" width="200" />
            <p>
              Lenguajes interpretados en el Servidor<br /><br />
              Salvador Elías Martínez MH230747 <br /><br />
              Néstor Aristides Gregorio Martínez GM230414
              <br /><br />>> LIS104 G02L
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="elementos">
      <div class="icon movable" id="recicle_bin_icon">
        <img class="icon_img" src="recursos/recicle_bin.png" />
        <p class="texto-icon">Papelera de recilaje</p>
      </div>
      <div class="icon movable" id="notas_icon">
        <img class="icon_img" src="recursos/Notas.png" />
        <p class="texto-icon">Notas</p>
      </div>
      <div class="icon movable" id="login_icon">
        <img class="icon_img" src="recursos/Login.png" />
        <p class="texto-icon">Login</p>
      </div>
      <div class="icon movable" id="crear_usuario_icon">
        <img class="icon_img" src="recursos/crear_usuario.png" />
        <p class="texto-icon">Crear usuario</p>
      </div>
    </div>

    <!-- Barra de tareas -->
    <div class="taskbar">
      <div class="windows-taskbar">
        <img id="xp-logo" src="recursos\xplogo.png" />
        <p>start</p>
      </div>
    </div>

    <script src="recursos/codigo.js"></script>
  </body>
</html>
