const successMessage = document.querySelector(".success");
// if (successMessage) {
  let timerId = setInterval(function () {
    successMessage.innerHTML = "";
  }, 10000);
// }