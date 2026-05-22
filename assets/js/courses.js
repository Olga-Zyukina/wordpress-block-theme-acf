let levels = document.getElementById("levels");
let categories = document.getElementById("categories");

let active_level;
let active_category;

// Check active tax Level
function getActiveLevel() {
  let item = levels.getElementsByClassName("active")[0];
  if (!item) {
    levels.children[0].classList.add("active");
    item = levels.children[0];
  }
  active_level = item.attributes.value.value;
}
getActiveLevel();

// Check active tax Category
function getActiveCategory() {
  let item = categories.getElementsByClassName("active")[0];
  if (!item) {
    categories.children[0].classList.add("active");
    item = categories.children[0];
  }
  active_category = item.attributes.value.value;
}
getActiveCategory();

// Submit active taxonomies
submitTaxes(active_level, active_category);

// Change active taxonomy on click
for (let i = 0; i < levels.children.length; i++) {
  levels.children[i].addEventListener("click", () => {
    levels.getElementsByClassName("active")[0].classList.remove("active");
    event.target.classList.add("active");
    getActiveCategory();
    submitTaxes(event.target.attributes.value.value, active_category);
  });
}
for (let i = 0; i < categories.children.length; i++) {
  categories.children[i].addEventListener("click", () => {
    categories.getElementsByClassName("active")[0].classList.remove("active");
    event.target.classList.add("active");
    getActiveLevel();
    submitTaxes(active_level, event.target.attributes.value.value);
  });
}

// Submit active taxonomies function
async function submitTaxes(level, cat) {
  let formData = new FormData();
  formData.append("action", "request");
  formData.append("nonce", ajax.nonce);
  formData.append("level", level);
  formData.append("cat", cat);
  try {
    const request = await fetch(ajax.url, {
      method: "POST",
      body: formData,
    });
    const response = await request.text();
    if (!request.ok)
      throw `Ошибка при обращении к серверу: ${request.status}`;
    const coursesList = document.querySelector(".courses-list");
    coursesList.innerHTML = response;
  } catch (error) {
    console.log(error);
  }
}