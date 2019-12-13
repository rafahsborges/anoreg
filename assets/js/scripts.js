$(function () {
    $('.cep').mask('00000-000');

    /**
     * @return {string}
     */
    var DocumentoMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 14 ? '00.000.000/0000-00' : '000.000.000-00999';
        },
        documentoOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(DocumentoMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.documento').mask(DocumentoMaskBehavior, documentoOptions);

    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.cpf').mask('000.000.000-00', {reverse: true});

    /**
     * @return {string}
     */
    var TelefoneMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        telefoneOptions = {
            onKeyPress: function (val, e, field, options) {
                field.mask(TelefoneMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.telefone').mask(TelefoneMaskBehavior, telefoneOptions);
});