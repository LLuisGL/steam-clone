const imagenPrincipal = document.getElementById('img_main');
  const originalSrc = imagenPrincipal.src;

  const imageIDs = ['img_1', 'img_2', 'img_3', 'img_4'];
  const images = imageIDs.map(id => document.getElementById(id));

  images.forEach(img => {
    img.addEventListener('mouseenter', () => {
      fadeTo(imagenPrincipal, img.src);
    });

    img.addEventListener('mouseleave', () => {
      fadeTo(imagenPrincipal, originalSrc);
    });
  });

  function fadeTo(element, newSrc) {
    // Evita sobrecargas si ya está mostrando esa imagen
    if (element.src === newSrc) return;

    element.classList.add('fade-out');

    // Espera al fade-out para cambiar src
    setTimeout(() => {
      element.src = newSrc;
      element.onload = () => {
        element.classList.remove('fade-out');
      };
    }, 300); // coincide con el tiempo en CSS
  }