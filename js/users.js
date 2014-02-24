$(document).ready(function(){
	$('form').submit(function(e){
		e.preventDefault();
		var d = $('form').serialize();
		var url = '/user/add?'+d;
		$.ajax({
			url: url,
			type: 'post',
			success: function(data){
				$('form').after('div').html(data);
			}
		})
	})
})