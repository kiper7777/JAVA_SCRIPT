document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const city = document.getElementById('search-input').value;
    alert(`Search for services in the city: ${city}`);
});

document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    alert(`Thank you, ${name}! Your message has been sent.`);
});

document.getElementById("loginButton").addEventListener("click", function () {
    window.location.href = "login.html";
});

document.getElementById("signupButton").addEventListener("click", function () {
    window.location.href = "signup.html";
});