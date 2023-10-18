$(document).ready(function () {
    $("#contact-form").on("submit", function (event) {
        alert("anuch");
        event.preventDefault();

        var form = $(this);
        var formData = form.serialize();
        var formMessages = $(".form-message");
        var name = $("#fname").val();
        var email = $("#email").val();
        var phone = $("#demo").val();
        var organization = $("#organiz").val();
        var message = $("#message").val();

        if (
            name === "" ||
            email === "" ||
            phone === "" ||
            organization === "" ||
            message === ""
        ) {
            formMessages.removeClass("success").addClass("error");
            formMessages.html("Please fill in all required fields.");
        } else {
            $.ajax({
                type: "POST",
                url: '{{url("/submit")}}',
                data: formData,
                success: function (response) {
                    formMessages.removeClass("error").addClass("success");
                    formMessages.html(response);
                    form[0].reset();
                },
                error: function (data) {
                    formMessages.removeClass("success").addClass("error");
                    var messageHtml =
                        data.responseText !== ""
                            ? data.responseText
                            : "Oops! An error occurred, and your message could not be sent.";
                    formMessages.html(messageHtml);
                },
            });
        }
    });
});
