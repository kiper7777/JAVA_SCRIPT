document.getElementById("email").addEventListener("focus", (e) => {
    document.getElementById("emailMessage").style.visibility = "visible";
    document.getElementById("emailError").style.visibility = "hidden";
});

document.getElementById("email").addEventListener("blur", (e) => {
    let email = document.getElementById("email").value.trim();
    let emailError = document.getElementById("emailError");

    document.getElementById("emailMessage").style.visibility = "hidden";

    if (email === "") {
        emailError.innerHTML = "Enter your email";
        emailError.style.visibility = "visible";
    } else if (!validateEmail(email)) {
        emailError.innerHTML = "Enter a valid email address";
        emailError.style.visibility = "visible";
    } else {
        emailError.style.visibility = "hidden";
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


    // let name=document.getElementById('username').value;
    // let password=document.getElementById('password').value;
    // isValid=true;
    // console.log(email)
    // console.log(name)
    // console.log(password)

    // let email_pattern=/^([a-zA-Z0-9 \ .-]+)@([a-zA-Z0-9 -]+).([a-z]{2,20})$/
    // let name_pattern=/^[a-zA-Z0-9-._]{2,20}$/
    // let password_pattern=/^[a-zA-Z0-9]{4,6}$/

    //   let email_match=email_pattern.test(email)
    //   let name_match=name_pattern.test(name)
    //   let password_match=password_pattern.test(password)
    //   console.log(email_match)
    //   console.log(name_match)
    //   console.log(password_match)

    // if(!email_match)
    //     {
    //         document.getElementById("emailError").innerHTML="Email is not valid";
    //         isvalid=false;
    //     }  

    // if(!name_match)
    //     {
    //         document.getElementById("nameError").innerHTML="Username is not valid";
    //         isValid=false;
    //     }   
    // if(!password_match)
    //     {
    //         document.getElementById("passwordError").innerHTML="Password is not valid";
    //         isValid=false;
    //     }     
});

function validateEmail(email) {
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,20}$/;
    return emailPattern.test(email);
}