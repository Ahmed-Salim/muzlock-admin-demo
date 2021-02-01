const registerForm = document.querySelector('form');
const registerFieldset = document.querySelector('#registerFieldset');

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    registerForm.addEventListener('submit', function (event) {
        if (!registerForm.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        } else {
            event.preventDefault()
            event.stopPropagation()

            // Bind the FormData object and the form element
            const FD = new FormData(registerForm);

            registerFieldset.disabled = true;

            const XHR = new XMLHttpRequest();

            // Define what happens on successful data submission
            XHR.addEventListener("load", function (event) {
                registerForm.classList.remove('was-validated');

                console.log(event.target.responseText);
                let responseMsg = JSON.parse(event.target.responseText);

                if (responseMsg.status.includes('success')) {
                    window.location.href = "../dashboard";
                } else {
                    alert(responseMsg.description);

                    registerFieldset.disabled = false;
                }
            });

            // Define what happens in case of error
            XHR.addEventListener("error", function (event) {
                alert('Oops! Something went wrong.');
                registerFieldset.disabled = false;
            });

            // Set up our request
            XHR.open("POST", "../php-apis/register.php");

            // The data sent is what the user provided in the form
            XHR.send(FD);
        }

        registerForm.classList.add('was-validated')
    }, false)
})()
