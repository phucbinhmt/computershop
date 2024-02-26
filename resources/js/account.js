const buttonUpdate = document.querySelector("#buttonUpdate");
const buttonCancel = document.querySelector("#buttonCancel");
const inputElements = document.querySelectorAll("input, select");
const radioCells = document.querySelectorAll(".radio-cell");
const formUpdate = document.querySelector("#formUpdate");

buttonUpdate.addEventListener("click", () => {
  inputElements.forEach((element) => {
    element.removeAttribute("disabled");
  });
  radioCells.forEach((element) => {
    element.removeAttribute("style");
  });

  buttonCancel.addEventListener("click", function () {
    location.reload();
  });
  buttonCancel.classList.remove("d-none");
  formUpdate.querySelector('button[type="submit"]').classList.remove("d-none");
  buttonUpdate.classList.add("d-none");
});

formUpdate.addEventListener("submit", () => {
  var day = document.querySelector('select[name="day"]').value;
  var month = document.querySelector('select[name="month"]').value;
  var year = document.querySelector('select[name="year"]').value;

  var input = document.createElement("input");
  input.type = "hidden";
  input.name = "birthdate";
  input.value = year + "-" + month + "-" + day;
  formUpdate.appendChild(input);
});
