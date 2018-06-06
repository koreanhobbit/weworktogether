<script>
	$(document).ready(function() {
		$('.star').click(
			function() {
				markStar($(this).data('id'));
				$('#rating').val($(this).data('id'));
		});

		markStar($('#rating').val());

		function markStar(mark) {
			$('.star').each(function(data, value) {
				if(data+1 <= mark) {
					$(this).addClass('checked');
				}
				else{
					$(this).removeClass('checked');
				}
			});
		}
	});
</script>