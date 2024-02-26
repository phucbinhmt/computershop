const formUpdateItems = document.querySelectorAll(".formUpdateItem");

formUpdateItems.forEach((formUpdateItem) => {
  const increaseButton = formUpdateItem.querySelector(".increaseBtn");
  const decreaseButton = formUpdateItem.querySelector(".decreaseBtn");
  const quantityInput = formUpdateItem.querySelector('input[name="quantity"]');

  increaseButton.addEventListener("click", () => {
    quantityInput.stepUp();
    formUpdateItem.submit();
  });
  decreaseButton.addEventListener("click", () => {
    quantityInput.stepDown();
    formUpdateItem.submit();
  });
});
