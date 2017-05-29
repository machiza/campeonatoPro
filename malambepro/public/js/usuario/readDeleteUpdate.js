$(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	readTable();

	$(document).on('click','.btn-dell',function(e) {
		var id = $(this).val();
		var url = "usuario/"+id+"";
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
		var route = "/usuario/"+id+"/edit";

		$.ajax({
			type : 'get',
			url  : 'usuario/'+id+'/edit',
			success:function(data) {
				var frmupdate = $('#frm-update-user');
				frmupdate.find('#id').val(data.id);
				frmupdate.find('#name').val(data.name);
				frmupdate.find('#email').val(data.email);
				frmupdate.find('#role_id').val(data.role_id);
				$('#popup-update-user').modal('show');
			}
		});
	});

	$('#frm-update-user').on('submit', function(e) {
		e.preventDefault();
		var data = $(this).serialize();
		var url = 'usuario/'+$(this).find('#id').val()+'';
		var put = $(this).attr('method');

		$.ajax({
			url  : url,
			type : put,
			data : data,
			dataType : 'json',
			success:function() {
				$("#msj-success1").fadeIn();
				readTable();
				$("#msj-success1").fadeOut(2000);
			}
		});
	});
	
})

function readTable() {
	$.ajax({
		type : 'get',
		url  :  'tabelaUsuario',
		dataType : 'html',
		success:function(data) {
			$('.table-responsive').html(data);
		}
	});
}