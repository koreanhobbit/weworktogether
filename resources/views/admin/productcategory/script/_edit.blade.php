<script>
	{{-- auto populate slug from title value input --}}
	$('#name').on('keypress blur', function () {
		var val = $(this).val();
		val = val.replace(/\s+/g, '-').toLowerCase();
		$('#slug').val(val);
	});
</script>