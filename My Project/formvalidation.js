let emailInput = document.getElementById("email");
let emailMessage = document.getElementById("emailMessage");
let emailError = document.getElementById("emailError");

let usernameInput = document.getElementById("username");
let usernameMessage = document.getElementById("usernameMessage");
let usernameError = document.getElementById("usernameError");

// При фокусе показываем подсказку
emailInput.addEventListener("focus", () => {
    emailMessage.style.display = "block"; // Показываем подсказку
    emailError.style.display = "none"; // Скрываем ошибку
});

usernameInput.addEventListener("focus", () => {
    usernameMessage.style.display = "block"; 
    usernameError.style.display = "none"; 
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

usernameInput.addEventListener("blur", () => {
    let username = usernameInput.value.trim();
    usernameMessage.style.display = "none"; 

    if (username === "") {
        usernameError.textContent = "Enter your username";
        usernameError.style.display = "block";
    } else if (!validateUsername(username)) {
        usernameError.textContent = "Please enter a valid username";
        usernameError.style.display = "block";
    } else {
        usernameError.style.display = "none"; 
    }
});


document.getElementById("submit").addEventListener("click", (e) => {
    e.preventDefault();
    let email = document.getElementById('email').value.trim();
    let emailError = document.getElementById("emailError");
    let isValid = true;

    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    let emailMatch = emailPattern.test(email);

    if (!emailMatch) {
        emailError.innerHTML = "Please enter a valid email address";
        emailError.style.visibility = "visible";
        isValid = false;
    } else {
        emailError.style.visibility = "hidden";
    }

    if (isValid) {
        alert("Form successfully submitted!");
    }
    console.log(email);
    console.log(emailMatch);
    console.log(emailPattern);
    console.log(isValid);
});

function validateEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailPattern.test(email);
}


