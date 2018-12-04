$(document).ready(function(){
	jQuery(function($){
		$("#phone").mask("+99(999) 999-9999");
	});
});
$(document).on('click', '.rd-nav-item', function () {
	$('.rd-nav-item').removeClass('active');
	$(this).addClass('active');
});
$(document).on('click', '#send__form', function (e) {
	e.preventDefault();
	var id = '#' + $(this).attr('data-form') + '';
	// var data = $('#'+id+'').serialize();
	var $data = {};
	$(id).find ('input').each(function() {
		$data[this.name] = $(this).val();
	});
	var phone = $data.phone;
	var name = $data.name;
	var form_data = new FormData();
	if(phone === '') {
		alert('Введите номер телефона!');
		return false;
	}
	if(name === '') {
		alert('Введите номер имя!');
		return false;
	}
	if(name !== '') {
		form_data.append('action', 'sendForm');
		form_data.append('phone', phone);
		form_data.append('name', name);
		$.ajax({
			url: myajax.url,
			type: 'post',
			data: form_data,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response.result === 'success') {
					/*form.reset();*/
					console.log(response.message); // покажи где подключаются скрипты
					$(id).trigger('reset');
					alert(response.message);
				} else {
					alert(response.message);
				}
			}
		});
		return false;
	} else {
		alert('Вы не заполнили все поля!');
	}
});