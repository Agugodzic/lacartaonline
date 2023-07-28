function deleteCartItem(index){
  $('#cart-item-'+index).remove();

  $.ajax({
    url: "app/services/cart.service.php?delete="+index,
    type: "GET",
    dataType: "json",
    success: function(response) {
        $("#board-cart-button-number").text(response.quantity.toString());
        $("#board-cart-button-price").text('$' + response.total.toString());
        $("#cart-total").text('$' + response.total.toString());
        if(response.total  > 0) {
          $('#board-cart-button-info').css('display', 'flex');
          $('#cart-message').hide();
        }else{
          $('#board-cart-button-info').css('display', 'none');
          $('#board-cart-button-info').css('display', 'none');
          $('#cart-message').show();
        };
    },
    error: function(xhr, status, error) {
        console.log("AJAX error:", status, error);
    }
});
}

function cartSend(){
  let total = $('#cart-total').text().split('$')[1];
  $('#cart-message').addClass("shaking-text");
  setTimeout(function(){
    $('#cart-message').removeClass("shaking-text");
  },500);

  if(total > 0){
    location.href = '/finalizar';
  }

}