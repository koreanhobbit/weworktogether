<script>
	$(document).ready(function() {
		$('.deleteForm').submit(function() {
			return confirm('Are you sure want to delete this testimony?');
		});
	});
</script>