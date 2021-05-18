$(document).ready(function () {
	$('li img').on('click', function () {
		var src = $(this).attr('src');
		var img = '<img src="' + src + '" class="img-responsive"/>';

		//start of new code new code
		var index = $(this).parent('li').index();

		var html = '';
		html += img;
		html += '<div style="height:25px;clear:both;display:block;">';

		html += '</div>';

		$('#myModal1').modal();
		$('#myModal1').on('shown.bs.modal', function () {
			$('#myModal1 .modal-body').html(html);
			//new code
			$('a.controls').trigger('click');
		})
		$('#myModal1').on('hidden.bs.modal', function () {
			$('#myModal1 .modal-body').html('');
		});

	});
})


