jQuery.validator.addMethod("telefonValid", function (value, element, params) {
  return /^(\+34|0034|34)?[89]\d{8}$/.test(value);
});
jQuery.validator.addMethod("mobilValid", function (value, element, params) {
  return /^[679]{1}[0-9]{8}$/.test(value);
});

$("#formulari").validate({
  rules: {
    telefon: {
      telefonValid: true,
    },
    mobil: {
      mobilValid: true,
    },
    email: {
      email: true,
    },
  },
  messages: {
    telefon: {
      telefonValid: "Aquest no es un telefon valid",
    },
    mobil: {
      mobilValid: "Aquest no es un movil valid",
    },
    email: {
      email: "Aquest no es un email valid",
    },
  },
});
