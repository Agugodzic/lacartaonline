
const categoryTitles = document.querySelectorAll('.board-items-category-title');
/*
categoryTitles.forEach(title => {
  title.addEventListener('click', () => {
    const content = title.nextElementSibling; // Obtenemos el contenido de la categoría
    const itemsWithContentOpen = document.querySelectorAll('.board-items:not([style="display: none;"])');

    // Cerrar todos los elementos abiertos excepto el clickeado
    itemsWithContentOpen.forEach(itemOpen => {
      if (itemOpen !== content) {
        itemOpen.style.display = 'none';
      }
    });

    // Alternar el estado de despliegue del elemento clickeado
    content.style.display = content.style.display === 'none' ? 'block' : 'none';

    // Si el contenido se ha abierto, hacer scroll hasta el título
    if (content.style.display === 'block') {
      title.scrollIntoView({});
    }
  });
  
});*/


window.addEventListener("scroll", function() {
  const cartElement = document.getElementById("cart-container");
  const buttonCart = document.getElementById("board-cart-button");

  const cartPosition = cartElement.getBoundingClientRect();
  const buttonPosition = buttonCart.getBoundingClientRect();

  // Si el elemento está en el área visible de la ventana
  if (cartPosition.top >= 0 && cartPosition.top <= window.innerHeight) {
    buttonCart.style.display = "none";
  }else{
    buttonCart.style.display = "flex";
  }
});