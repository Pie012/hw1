document.addEventListener("DOMContentLoaded", function() {
    var registrationForm = document.getElementById("formReg");
    var passwordErrorMessage = document.getElementById("error-message-password");
    var emailErrorMessage = document.getElementById("error-message-email");
    var successMessage = document.getElementById("success-message");

    registrationForm.addEventListener("submit", function(event) {
        var passwordInput = document.querySelector('input[name="password"]');
        var password = passwordInput.value.trim();
        var emailInput = document.querySelector('input[name="email"]');
        var email = emailInput.value.trim();
        var emailPattern = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
        var valid = true;

        // Controllo della password
        if (password.length < 8) {
            event.preventDefault();
            passwordErrorMessage.textContent = "La password deve contenere almeno 8 caratteri.";
            passwordErrorMessage.classList.add("visibile");
            passwordErrorMessage.classList.remove("nascosto");
            valid = false;
        } else {
            passwordErrorMessage.classList.add("nascosto");
            passwordErrorMessage.classList.remove("visibile");
        }

        // Controllo dell'email
        if (!emailPattern.test(email)) {
            event.preventDefault();
            emailErrorMessage.textContent = "L'email non è nel formato corretto.";
            emailErrorMessage.classList.add("visibile");
            emailErrorMessage.classList.remove("nascosto");
            valid = false;
        } else {
            emailErrorMessage.classList.add("nascosto");
            emailErrorMessage.classList.remove("visibile");
        }

        // Messaggio di successo
        if (valid) {
            passwordErrorMessage.classList.add("nascosto");
            emailErrorMessage.classList.add("nascosto");
            //registrationForm.reset();
        }
    });
});
