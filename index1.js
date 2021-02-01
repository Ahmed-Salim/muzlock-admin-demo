const loginForm = document.querySelector('form');
const loginFieldset = document.querySelector('#login-fieldset');

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    // Array.prototype.slice.call(forms)
    //     .forEach(function (form) {
    loginForm.addEventListener('submit', function (event) {
        if (!loginForm.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            event.preventDefault()
            event.stopPropagation()

            // Bind the FormData object and the form element
            const FD = new FormData(loginForm);

            loginFieldset.disabled = true;

            const XHR = new XMLHttpRequest();

            // Define what happens on successful data submission
            XHR.addEventListener("load", function (event) {
                loginForm.classList.remove('was-validated');

                let responseMsg = JSON.parse(event.target.responseText);

                if (responseMsg.status.includes('success')) {
                    window.location.href = "./dashboard";
                } else {
                    alert(responseMsg.description);

                    loginFieldset.disabled = false;
                }
            });

            // Define what happens in case of error
            XHR.addEventListener("error", function (event) {
                alert('Oops! Something went wrong.');
                loginFieldset.disabled = false;
            });

            // Set up our request
            XHR.open("POST", "./php-apis/login.php");

            // The data sent is what the user provided in the form
            XHR.send(FD);
        }

        loginForm.classList.add('was-validated')
    }, false)
    //})
})()
