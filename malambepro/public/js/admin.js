$(function() {
	$('.panel-collapse').attr("aria-expanded","true");
	$('#collapse1').attr("aria-expanded","true");

	$("#path").fileinput({
	    uploadUrl: "http://localhost/file-upload-single/1", // server upload action
	    uploadAsync: true,
	    showPreview: false,
	    allowedFileExtensions: ['jpg', 'png', 'gif'],
	    maxFileCount: 5,
	    elErrorContainer: '#kv-error-1'
	})
	
	$('#path').click(function(e) {
		$('.fileinput-upload-button').hide();
	});
})