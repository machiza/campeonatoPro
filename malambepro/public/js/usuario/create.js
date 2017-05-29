$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('#frm-insert-user').on('submit',function(e) {
		e.preventDefault();
		var url = $(this).attr('action');
		var post = $(this).attr('method');
		var data = $(this).serialize();

		$.ajax({
			type : post,
			url  :  url,
			data : data,
			success:function(data) {
				console.log(data);
				$('#frm-insert-user').trigger('reset');
				$("#msj-success").fadeIn(1800);
				$("#msj-success").fadeOut(2000);
			}
		});
	});
})