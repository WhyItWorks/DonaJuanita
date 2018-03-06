function ShowToast($type, $message, $header) {
    switch ($type) {
        case 'error':
            $heading = '¡oh no, ha ocurrido un error!';
            $icon = 'error';
            $position = 'bottom-center';
            $textAlign = 'center';
            break;
        case 'success':
            $heading = $header;
            $icon = 'success';
            $position = 'bottom-left';
            $textAlign = 'center';
            break;
        default:
    }

    $.toast({
        heading: $heading,
        text: $message,
        position: $position,
        textAlign: $textAlign,
        stack: false,
        showHideTransition: 'slide',
        icon: $icon
    });
};

$(document).ready(function () {

    var form = $('.ajax-form');
    form.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: form.serialize(),

            success: function (data) {
                location.reload();                
            },
            error: function (data) {

                //401 -> Server problems
                //422 -> Data form error
                //500 -> Unknown
                if (data.status === 422) {
                    //Data error
                    if (form.attr('id') === 'login-form') {
                        $('#email').focus();
                        ShowToast('error', 'Los datos ingresados no coinciden en nuestros registros.');

                    } else {
                        $.each(data.responseJSON.errors, function (key, value) {
                            $error = value[0];
                            $input_id_pos = $error.indexOf("/");

                            if ($input_id_pos > 0) {
                                $input_id = "#" + $error.substring(0, $input_id_pos);
                                $input = $($input_id);

                                $error_message = $error.substring(($input_id_pos + 1));

                                $input.tooltip('dispose');
                                $input.addClass('invalid').prev('i').addClass('invalid');
                                $input.attr('title', $error_message)
                                    .tooltip('show');
                            }
                        })
                    }
                } else {
                    ShowToast('error', 'Estamos teniendo problemas para procesar su solicitud. <br> Por favor, vuelta a intentarlo.');
                }
            }
        });
    });


    $('form').find('input').on('click', function () {
        $(this).removeClass('invalid').prev('i').removeClass('invalid');
        $(this).tooltip('dispose');
    });






});