const form = document.forms.form;
form.addEventListener("submit", submitForm);

// Send request
async function submitForm(event) {
  event.preventDefault();

  const formDataToJson = (formData) =>
    JSON.stringify(Object.fromEntries(formData));

  const newFormData =  new FormData(event.target);
  newFormData.append('type', 'Request from an external form');

  const jsonData = formDataToJson(newFormData);

  try {
    // Form request
    const response = await fetch( URL_ADD_STUDY_REQUEST, {
      method: "POST",
      body: jsonData,
      headers: {
        "Content-Type": "application/json",
      },
    });

    // Check response
    if (!response.ok)
      throw `Ошибка при обращении к серверу: ${response.status}`;

    // Check the response JSON
    const contentType = response.headers.get("content-type");
    if (!contentType || !contentType.includes("application/json")) {
      throw "Ошибка обработки. Ответ не JSON";
    }

    // Reset form
    form.reset();

    // Process response
    const json = await response.json();
    if (json) {
      const successMessage = document.querySelector(".success");
      successMessage.innerHTML = `Request ${json.Id} has been successfully sent!<br>We will contact you soon!`;
      let timerId = setInterval(function () {
        successMessage.innerHTML = '';
      }, 10000);
    } else {
      console.log(json);
      throw json.info;
    }

  } catch (error) {
    console.log(error);
  }
}