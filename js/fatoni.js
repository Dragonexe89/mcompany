$('.page-scroll').on('click', function(e){
	var tujuan = $(this).attr('href');
	var eltuj = $(tujuan);

	$('html, body').animate({
		scrollTop: eltuj.offset().top - 50
	}, 1250, 'easeInOutExpo');
	e.preventDefault();
})

 