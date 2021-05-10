jQuery.validator.addMethod("passwordViable", function (value, element, params) {
    return /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(value);

  });

$("#form").validate({
    rules: {
        password: {
            required: true,
            passwordViable: true,
            minlength: 8
        },
    },
    messages: {
        password: {
            required: "Introdueix la contrasenya",
            minlength   : "Introdueix com a minim 8 caracters",
            passwordViable: "Aquesta contrasenya no es correcte (8 caracters i com a minim un numero i una lletra)"
        }
    },
});
