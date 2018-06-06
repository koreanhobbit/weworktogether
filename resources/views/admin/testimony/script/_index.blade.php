<script>
	$(document).ready(function() {
		$('.test_check').change(function() {
			var url = $(this).data('url');
			var value = $(this).data('value');
			$.ajax({
				url: url,
				type:'put',
				data:{
					'_token' : $('input[name=_token]').val(),
					'title' : 'changeDisplay',
					'value' : value,
				},
				success:function(data) {
					alert('Display status was successfully changed');
				}
			}); 
		});


		$('.deleteForm').submit(function() {
			return confirm('Are you sure want to delete this testimony?');
		});
	});
</script>