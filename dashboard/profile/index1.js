const profileForm = document.querySelector('#profileForm');
const deleteButton = document.querySelector('button.delete');

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    profileForm.addEventListener('submit', function (event) {
        if (!profileForm.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        profileForm.classList.add('was-validated')
    }, false)
})()

deleteButton.addEventListener('click', () => {
    if (confirm("Are you sure you want to delete your Profile?\nThis action is Irreversible!")) {
        window.location.href = "../../php-apis/delete-profile.php";
    } else {
    }
});