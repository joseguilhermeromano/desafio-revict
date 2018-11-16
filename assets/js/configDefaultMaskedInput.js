$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_celular').mask('(00) 00000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.rg').mask('00.000.000-Z', {
    translation: {
      'Z': {
        pattern: /[0-9X]/, optional: true
      }
    }
  });
  $('.email').mask("A", {
  translation: {
    "A": { pattern: /[\w@\-.+]/, recursive: true }
  }
  });
  $('.nome').mask("A", {
  translation: {
    "A": { pattern: /^[a-zA-Z áàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ]{0,250}$/, recursive: true }
  }
  });
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

});


$('#tipoContato').change(function(){
      $('#campoDadosContato').show();
      $('#dadosContato').val(''); 
      validaDadosContato();
    });

  function validaDadosContato(){
    var opcao = $( "#tipoContato option:selected" ).val();

        switch(opcao){
          case '1':
          $("#dadosContato").removeClass().toggleClass('form-control phone_with_ddd');
          $("#dadosContato").attr('pattern', '^\\([1-9]{2}\\) (?:[2-8]|9[1-9])[0-9]{3}-[0-9]{4}$');
          $("#dadosContato").attr('type','text');
          $("#dadosContato").attr('data-pattern-error','Telefone inválido.');
          $("#dadosContato").attr('maxlength', '15'); 
          break;

          case '2': 

          $("#dadosContato").removeClass().toggleClass('form-control phone_celular');
          $("#dadosContato").attr('pattern', '^\\([1-9]{2}\\) (?:[2-8]|9[1-9])[0-9]{3}-[0-9]{4}$');
          $("#dadosContato").attr('type','text');
          $("#dadosContato").attr('data-pattern-error','Celular inválido.');
          $("#dadosContato").attr('maxlength', '15'); 
          break;

          default:
            $("#dadosContato").attr('class', 'form-control email');
            $("#dadosContato").removeAttr('pattern');
            $("#dadosContato").removeAttr('data-pattern-error');
            $("#dadosContato").attr('type','email');
            $("#dadosContato").attr('maxlength', '250'); 
          break;
      }
  }


validaDadosContato();


    
