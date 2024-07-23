$(document).ready(function() {
    $('#myForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: 'validate.php',
            data: formData,
            success: function(response) {
                if (response=== 'success') {
                    console.log(response)
                    $('#myForm').submit();
                } else {
                    // Display errors returned by PHP validation
                    var errors = JSON.parse(response);
                    if (errors.username) {
                        $('#username-error').text(errors.username);
                    }
                    if (errors.email) {
                        $('#email-error').text(errors.email);
                    }
                    if (errors.password) {
                        $('#password-error').text(errors.password);
                    }
                }
            }
        });
    });
});
