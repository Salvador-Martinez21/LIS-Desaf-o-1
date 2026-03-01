document.addEventListener('DOMContentLoaded', () => {

  let iconoActivo = null;
  let offsetX = 0;
  let offsetY = 0;

  const iconos = document.querySelectorAll('.movable');

  iconos.forEach(icono => {
    icono.addEventListener('mousedown', (e) => {

      e.preventDefault(); 

      iconoActivo = icono;

      const rect = icono.getBoundingClientRect();
      offsetX = e.clientX - rect.left;
      offsetY = e.clientY - rect.top;

      iconos.forEach(i => i.style.zIndex = 10);
      icono.style.zIndex = 100;
    });
  });

  document.addEventListener('mousemove', (e) => {

    if (!iconoActivo) return;

    iconoActivo.style.left = `${e.clientX - offsetX}px`;
    iconoActivo.style.top = `${e.clientY - offsetY}px`;
  });

  document.addEventListener('mouseup', () => {
    iconoActivo = null;
  });

  const configVentanas = {
    'notas_icon': {
      titulo: 'Bloc de Notas',
      url: 'recursos/estudiantes.php',
      top: '0px',
      left: '250px'
    },
    'login_icon': {
      titulo: 'Inicio de Sesión',
      url: 'recursos/login.php',
      top: '100px',
      left: '350px'
    },
    'crear_usuario_icon': {
      titulo: 'Crear Nuevo Usuario',
      url: 'recursos/crear_usuario.php',
      top: '200px',
      left: '450px'
    },
  };
  const contenedorEscritorio = document.getElementById('root');
  iconos.forEach(icono => {
    icono.addEventListener('dblclick', () => {
      const config = configVentanas[icono.id];   
      if (!config) return;
      const ventana = document.createElement('div');
      ventana.className = 'window';
      ventana.style.position = 'absolute';
      ventana.style.top = config.top;
      ventana.style.left = config.left;
      ventana.style.width = '1000px';
      ventana.style.zIndex = 1000;
      ventana.innerHTML = `
        <div class="title-bar">
          <div class="title-bar-text">${config.titulo}</div>
          <div class="title-bar-controls">
            <button aria-label="Minimize"></button>
            <button aria-label="Maximize"></button>
            <button aria-label="Close" class="btn-cerrar"></button>
          </div>
        </div>
        <div class="window-body" style="margin: 0; padding: 0;">
          <iframe src="${config.url}" style="width: 100%; height: 450px; border: none; background-color: #ece9d8;"></iframe>
        </div>
      `;
      const btnCerrar = ventana.querySelector('.btn-cerrar');
      btnCerrar.addEventListener('click', () => {
        ventana.remove(); 
      });
      contenedorEscritorio.appendChild(ventana);
    });
  }); 

});


  