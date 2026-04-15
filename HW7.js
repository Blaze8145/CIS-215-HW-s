//Button used to show ow many times it was clicked
const button = document.querySelector("#counter");

button.addEventListener("click", (event) => {
  button.textContent = `Click count: ${event.detail}`;
});

