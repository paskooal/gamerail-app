// Parsley validation messages in Brazilian Portuguese
Parsley.addMessages('pt-br', {
    defaultMessage: "Este valor parece ser inválido.",
    type: {
      email: "Este valor deve ser um e-mail válido.",
      url: "Este valor deve ser uma URL válida.",
      number: "Este valor deve ser um número válido.",
      integer: "Este valor deve ser um inteiro válido.",
      digits: "Este valor deve conter apenas dígitos.",
      alphanum: "Este valor deve ser alfanumérico."
    },
    notblank: "Este valor não pode estar em branco.",
    required: "Este campo é obrigatório.",
    pattern: "Este valor é inválido.",
    min: "Este valor deve ser maior ou igual a %s.",
    max: "Este valor deve ser menor ou igual a %s.",
    range: "Este valor deve estar entre %s e %s.",
    minlength: "Este valor é muito curto. Ele deve ter %s caracteres ou mais.",
    maxlength: "Este valor é muito longo. Ele deve ter %s caracteres ou menos.",
    length: "O tamanho deste valor é inválido. Ele deve ter entre %s e %s caracteres.",
    mincheck: "Você deve selecionar pelo menos %s opções.",
    maxcheck: "Você deve selecionar %s opções ou menos.",
    check: "Você deve selecionar entre %s e %s opções.",
    equalto: "Este valor deve ser igual.",
  });
  
  Parsley.setLocale('pt-br');
  