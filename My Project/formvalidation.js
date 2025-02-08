let emailInput = document.getElementById("email");
let emailMessage = document.getElementById("emailMessage");
let emailError = document.getElementById("emailError");

// При фокусе показываем подсказку
emailInput.addEventListener("focus", () => {
    emailMessage.style.display = "block"; // Показываем подсказку
    emailError.style.display = "none"; // Скрываем ошибку
});

// При потере фокуса проверяем введенные данные
emailInput.addEventListener("blur", () => {
    let email = emailInput.value.trim();
    emailMessage.style.display = "none"; // Убираем подсказку

    if (email === "") {
        emailError.textContent = "Enter your email";
        emailError.style.display = "block";
    } else if (!validateEmail(email)) {
        emailError.textContent = "Please enter a valid email address";
        emailError.style.display = "block";
    } else {
        emailError.style.display = "none"; // Скрываем ошибки если всё введено правильно
    }
});

function validateEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}

