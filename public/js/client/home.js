document.addEventListener("DOMContentLoaded", function () {
  const minusButtons = document.querySelectorAll(".quantity-button.minus");
  const plusButtons = document.querySelectorAll(".quantity-button.plus");
  const quantityInputs = document.querySelectorAll(".quantity-input");

  minusButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      let currentValue = parseInt(quantityInputs[index].value);
      if (currentValue > 1) {
        quantityInputs[index].value = currentValue - 1;
      }
    });
  });

  plusButtons.forEach(function (button, index) {
    button.addEventListener("click", function () {
      let currentValue = parseInt(quantityInputs[index].value);
      quantityInputs[index].value = currentValue + 1;
    });
  });
});




var checkboxes = document.querySelectorAll(".inp-cbx");
var checkboxesRating = document.querySelectorAll(".inp2-cbx");

checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    checkboxes.forEach(function (otherCheckbox) {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});
checkboxesRating.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    checkboxesRating.forEach(function (otherCheckbox) {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});

function redirectToPay(unitPrice, userId, productId) {
  //console.log("Redirecting to pay.php with unitPrice:", unitPrice, ", userId:", userId, ", and productId:", productId);
  var quantity = document.querySelector("input[name='qty'][data-product-id='" + productId + "']").value;
  //console.log("Quantity:", quantity);
  var url = '../../public/client/pay.php?totalPrice=' + unitPrice + '&uid=' + userId + '&qty=' + quantity; 
  //console.log("Redirect URL:", url); 
  window.location.href = url;
}
