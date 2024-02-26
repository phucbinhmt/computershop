const formSort = document.querySelector("#formSort");
const selectPrice = document.querySelector("#sort_price");

selectPrice.addEventListener("change", () => {
  formSort.submit();
});
