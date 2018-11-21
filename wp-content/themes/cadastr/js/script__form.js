$(document).ready(function(){

});
$(document).on('click', '.rd-nav-item', function (e) {
	e.preventDefault();
	$('.rd-nav-item').removeClass('active');
	$(this).addClass('active');
});
