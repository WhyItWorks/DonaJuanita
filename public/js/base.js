$(document).ready(function () {
    var form = $('#login-form');

    form.submit(function (e) {

        e.preventDefault();
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(),
            dataType: 'json',
            success: function (json) {},
            error: function (json) {
                if (json.status === 422) {
                    var errors = json.responseJSON;
                    $.each(json.responseJSON, function (key, value) {

                        if (form = $('#login-form')) {
                            $text = "Los datos ingresados no coinciden.<br> Por favor, vuelva a intentarlo";
                        }

                        $.toast({
                            heading: 'Error',
                            text: $text,
                            position: 'bottom-center',
                            textAlign: 'center',
                            stack: false,
                            showHideTransition: 'slide',
                            icon: 'error'
                        })

                    });
                } else {
                    window.location.reload(true);
                }
            }
        });
    });

});