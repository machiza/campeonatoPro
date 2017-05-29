$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	readTable();

	$(document).on('click','.pagination a',function(e){
	    e.preventDefault();
	    var page = $(this).attr('href').split('page=')[1];
	    var route = 'clube';

	    $.ajax({
	        url: route,
	        data: {page: page},
	        type: 'GET',
	        dataType: 'json',
	        success: function(data){
	            $('.table-responsive').html(data);
	        }
	    });
	});

	$(document).on('click','.btn-dell',function(e) {
		var id = $(this).val();
		var url = "clube/"+id+"";
		$.ajax({
			type : 'DELETE',
			url  : url,
			dataType : 'json',
			success:function(data) {
				$("#msj-success").fadeIn();
				$('tbody tr.id'+id).remove();
				$("#msj-success").fadeOut(2000);
			},
			error: function (data) {
	               alert('Error:', data);
	           }
		});
	});

	$(document).on('click','.btn-edit',function(e) {
		var id = $(this).val();
		var route = "/clube/"+id+"/edit";

		$.ajax({
			type : 'get',
			url  : 'clube/'+id+'/edit',
			success:function(data) {
				var frmupdate = $('#frm-update-clube');
				frmupdate.find('#id').val(data.id);
				frmupdate.find('#name').val(data.name);
				$('#popup-update-clube').modal('show');
			}
		});
	});

	$('#frm-update-clube').on('submit', function(e) {
		e.preventDefault();
		var data = new FormData($(this)[0]);
		var url = 'clube/'+$(this).find('#id').val()+'';
		var put = $(this).attr('method');

		$.ajax({
			url  : url,
			type : put,
			data : data,
			dataType : 'json',
			contentType: false,
            	processData: false,
			success:function() {
				$("#msj-success1").fadeIn();
				readTable();
				$("#msj-success1").fadeOut(2000);
			}
		});
	});
});

function readTable() {
	$.ajax({
		type : 'get',
		url  :  'tabelaClube',
		dataType : 'html',
		success:function(data) {
			$('.table-responsive').html(data);
		}
	});
}