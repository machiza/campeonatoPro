$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$('#frm-insert-clube').on('submit', function(e) {
		e.preventDefault();
		var url = $(this).attr('action');
		var post = $(this).attr('method');
		var path = $(this).find('#path').val();
		var data = new FormData($(this)[0]);

		$.ajax( {
			type : post,
			url  : url,
			data : data,
			contentType: false,
            	processData: false,
			success:function(data) {
				console.log(data);
				$('#frm-insert-clube').trigger('reset');
				$("#msj-success").fadeIn(1800);
				$("#msj-success").fadeOut(2000);
			}
		});
	});
})