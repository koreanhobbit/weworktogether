<script>
	$(document).ready(function(){

		//slide to contact if there are errors or success message
		@if($errors->has('name') || $errors->has('email') || $errors->has('subject') || $errors->has('message') || $errors->has('g-recaptcha-response') || session()->has('successmessage'))
			$('html, body').stop().animate({
				scrollTop: $('#contact').offset().top - 91
			}, 1500, 'easeInOutExpo');
		@endif
	});
</script>