$(document).ready(function(){
	$('.delete-btn').click(function(){
		$.ajax({
			url: '/comments/'+$(this).data('id'),
			type: 'DELETE',
			data : {'_token': $(this).data('token')},
			success: function(result) {
				console.log(result);
			}
		});
	});
});