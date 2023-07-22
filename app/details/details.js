function uncheckOthers(checkbox) {
  var checkboxes = document.getElementsByName('option');
  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i] !== checkbox) {
          checkboxes[i].checked = false;
      }
  }
  calculateTotal();
};

function calculateTotal() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var total = 0;

  for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
          total += parseInt(checkboxes[i].value);
      }
  }

  document.getElementById('details-price-number').textContent = "$" + Math. trunc(total.toFixed(2));
};



