saoPaulo.addEventListener('click', function() {
  andar.style.display = 'flex';
});

santos.addEventListener('click', function() {
    andar.style.display = 'none';
  });

  btnok.addEventListener('click', function() {
    alerta.style.display = 'none';
  });

//DATEPICKER

var dayNamesMin = $( "#datepicker" ).datepicker( "option", "dayNamesMin" );

var monthNames = $( "#datepicker" ).datepicker( "option", "monthNames" );

$( "#datepicker" ).datepicker( "option", "dayNamesMin", [ "D", "S", "T", "Q", "Q", "S", "S" ] );

$( "#datepicker" ).datepicker( "option", "monthNames", [ "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ] );

