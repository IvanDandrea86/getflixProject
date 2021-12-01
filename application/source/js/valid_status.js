const validateEmail = (e) => {
    return e.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
const userNameInput = document.getElementById("username")
const emailInput = document.getElementById("email")
const passwordInput = document.getElementById("password")
const confirmInput = document.getElementById("confirm_password")

window.addEventListener("load", () => {
    userNameInput.addEventListener("keyup", () => {
        var user = userNameInput.value
        let count = user.length
        if (count >= 6) {
            userNameInput.classList.add("is-valid");
            userNameInput.classList.remove("is-invalid");
            document.getElementById("valid-user").innerHTML = "This is valid username"
            console.log("valid");
        } else {
            userNameInput.classList.add("is-invalid");
            userNameInput.classList.remove("is-valid");
        }
    })

    emailInput.addEventListener("keyup", () => {
        let email = emailInput.value
        let result = validateEmail(email)
        if (result) {
            emailInput.classList.add("is-valid");
            emailInput.classList.remove("is-invalid");
            document.getElementById("valid-mail").innerHTML = "This is valid email"
            console.log("valid");
        } else {
            emailInput.classList.add("is-invalid");
            emailInput.classList.remove("is-valid");
        }
    })
    passwordInput.addEventListener("keyup", () => {
        var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{6,})");
        var pass = passwordInput.value
        // let count = pass.length
        if (pass.match(strongRegex)) {
            passwordInput.classList.add("is-valid");
            passwordInput.classList.remove("is-invalid");
            document.getElementById("valid-pass").innerHTML = "This is valid password"
            console.log("valid");
        }
    })
    confirmInput.addEventListener("keyup", () => {
        var pass = passwordInput.value
        var confirm = confirmInput.value
        if (pass === confirm) {
            confirmInput.classList.add("is-valid");
            confirmInput.classList.remove("is-invalid");
            document.getElementById("valid-confirm").innerHTML = "Confirmation match"
            console.log("valid");
        }
    })

})