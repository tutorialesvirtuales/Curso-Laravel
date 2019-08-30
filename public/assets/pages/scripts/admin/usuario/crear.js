$(document).ready(function () {
    const reglas = {
        re_password: {
            equalTo: "#password"
        }
    };
    const mensajes = {
        re_password:
        {
            equalTo: 'Las contraseñas no coinciden'
        }
    };
    Biblioteca.validacionGeneral('form-general', reglas, mensajes);
    $('#password').on('change', function(){
        const valor = $(this).val();
        if(valor != ''){
            $('#re_password').prop('required', true);
        }else{
            $('#re_password').prop('required', false);
        }
    });
});
