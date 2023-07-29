var checked = document.getElementsByName('option')[0];;
checked.checked = true;

function uncheckOthers(checkbox) {
  var checkboxes = document.getElementsByName('option');
  checkbox.checked = true;
  

  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] !== checkbox) {
          checkboxes[i].checked = false;
      }
  }
  calculateTotal();
};

function calculateTotal() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var totalInput = document.querySelector('input[name="price"]');
  var product = document.querySelector('input[name="product"]').value;
  var finalProduct = document.querySelector('input[name="final-product"]');
  var total = 0;
  var variant = " ";
  var extras = " ";

  for (var i = 0; i < checkboxes.length; i++) {

      if (checkboxes[i].checked) {
          total += parseInt(checkboxes[i].value);
           
          if(checkboxes[i].name == 'option'){
            variant = " " + checkboxes[i].getAttribute('data-variant');
          }else{
            extras = extras + " + " + checkboxes[i].getAttribute('data-extra');
          }
      }
  }

  total = Math. trunc(total.toFixed(2));
  totalInput.value = total;
  finalProduct.value = product + variant + extras;

  document.getElementById('details-price-number').textContent = "$" + total;
};

calculateTotal();

/*
function calculateTotal() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var totalInput = document.querySelector('input[name="total"]');
  var productInput = document.querySelector('input[name="total"]');
  var total = 0;
  var variant = "";
  var extras = "";

  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
          total += parseInt(checkboxes[i].value);

          if(checkboxes[i].name == 'option'){
            variant = + " " + checkboxes[i].getAttribute('data-variant')
          }else if(checkboxes[i].name == 'extra'){
            extras = extras + " + " + checkboxes[i].getAttribute('data-extra');
          }
      }
  }

  total = Math. trunc(total.toFixed(2));
  totalInput.value = total;
  productInput.value = productInput.value + variant + extras;
  document.getElementById('details-price-number').textContent = "$" + total;
  alert(productInput.value);
};
*/



