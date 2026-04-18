/*
  Author: Julian Schrauger
  Email: jschraug@genesee.edu
*/
document.addEventListener("DOMContentLoaded", () =>{
  //Button used to show ow many times it was clicked
  //https://developer.mozilla.org/en-US/docs/Web/API/
  const button = document.querySelector("#counter");

  button.addEventListener("click", (event) => {
    button.textContent = `Click count: ${event.detail}`;
  });

//Other Radio Button
//https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/change_event
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
  const emailInput = document.querySelector("#email-id");
  emailInput.addEventListener('keyup', emailValid);
  async function emailValid(event){
    let blank = event.target.parentNode.querySelector(".blank");
      blank.innerText = "";

    let targetEmail = event.target.value;
    const response = await fetch(`email/checker.php?email=${targetEmail}`);
    console.log("Responce:", response);

    let result = await response.json();
    console.log("Promise", result);

    if(result["status"] == 0){
      blank.innerText = result["message"];
    }
}});