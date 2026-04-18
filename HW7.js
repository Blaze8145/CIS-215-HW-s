//Button used to show ow many times it was clicked
//https://developer.mozilla.org/en-US/docs/Web/API/Element
const button = document.querySelector("#counter");

button.addEventListener("click", (event) => {
  button.textContent = `Click count: ${event.detail}`;
});

//Other Radio Buttons
document.querySelectorAll('input[name="age"]').forEach(radio => {
    radio.addEventListener("change", async () => {
        const otherBox = document.getElementById("otherBox");
        const output = document.getElementById("result");
        if (document.getElementById("other").checked) {
            otherBox.style.display = "block";
            const response = await fetch("getMessage.php");
            const data = await response.text();
            output.textContent = data;
        } else {
            otherBox.style.display = "none";
            output.textContent = "";
        }

    });
});

//Email Validator