$('.input-group .date').datepicker({
	format: 'dd/mm/yyyy',
	language: 'pt-BR',
	weekStart: 0,
	autoclose: true,
	// startDate:'0d',
	todayHighlight: true
});

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
	$(".js-example-basic-single").select2({
		language: 'pt-BR'
	  });
});