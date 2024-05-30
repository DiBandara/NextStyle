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
