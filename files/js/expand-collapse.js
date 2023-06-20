$(document).ready(function () {
	$('.collapseAll').click(function(e) {
		e.preventDefault();
		$(this).closest('.panel-group').find('.panel-collapse.in')
			.collapse('hide');
	});
	$('.expandAll').click(function(e) {
		e.preventDefault();
		$(this).closest('.panel-group').find('.panel-collapse:not(".in")')
			.collapse('show');
	});
});

//https://codepen.io/martinkrulltott/pen/mejmmj
//https://www.bootply.com/QT93aLzyGr
//https://www.bootply.com/123636
//nested - https://codepen.io/marklsanders/pen/OPZXXv