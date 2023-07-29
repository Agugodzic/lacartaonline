
const categoryTitles = document.querySelectorAll('.board-items-category-title');
let topElement = "";

setTimeout(function() {
  $('html, body').css('scroll-behavior', 'smooth');
}, 2000);


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

$(document).ready(function() {
  $.ajax({
      url: "app/services/cart.service.php",
      type: "GET",
      dataType: "json",
      success: function(response) {
          $("#board-cart-button-number").text(response.quantity.toString());
          $("#board-cart-button-price").text('$' + response.total.toString());
          if(response.total  > 0) {
            $('#board-cart-button-info').css('display', 'flex');
            $('#cart-message').hide();
          }},
      error: function(xhr, status, error) {
          console.log("Error en la solicitud AJAX:", status, error);
      }
  });
}); 

$(document).ready(function() {
  // Restaurar la posición del scroll si existe en localStorage
  var scrollPosition = sessionStorage.getItem("scrollPosition");
  if (scrollPosition !== null && scrollPosition !== undefined) {
      $(window).scrollTop(scrollPosition);
  }

  // Guardar la posición del scroll cuando se produce un desplazamiento en la página
  $(window).on("scroll", function() {
      var currentPosition = $(window).scrollTop();
      sessionStorage.setItem("scrollPosition", currentPosition);
  });

});