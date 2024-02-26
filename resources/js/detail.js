const increaseButton = document.querySelector("#increaseBtn");
const decreaseButton = document.querySelector("#decreaseBtn");
const quantityInput = document.querySelector('input[name="quantity"]');
const formAddItem = document.querySelector("#formAddItem");

increaseButton.addEventListener("click", () => {
  quantityInput.stepUp();
});
decreaseButton.addEventListener("click", () => {
  quantityInput.stepDown();
});

formAddItem.addEventListener("submit", () => {
  var actionValue = document.activeElement.value;
  var input = document.createElement("input");
  input.type = "hidden";
  input.name = "submit_value";
  input.value = actionValue;
  formAddItem.appendChild(input);
});
