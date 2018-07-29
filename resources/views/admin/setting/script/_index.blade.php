{{-- tinymce javascript --}}
<script src="{{ asset('js/vendor/tinymce/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('js/vendor/tinymce/tinymce.min.js') }}"></script>

<script>
    Dropzone.autoDiscover = false;
</script>
<script>
	$(document).ready(function() {
		// initiate tinymce
        tinymce.init({ 
            selector:'textarea',
            plugins: 'autosave link lists preview',
            branding: false,
            min_height: 300,
            menubar:false,
            mobile: {
                theme: 'mobile',
                plugins: [ 'autosave', 'link', 'lists', 'preview' ],
                menubar: false
            },
        });

        //click logo image
        $('.changeLogoBtn').click(function() {
        	//initiate dropzone
        	$('form#addNewLogoDz').dropzone({
        		paramName: 'image',
        		acceptedFiles: 'image/*',
        		maxFilesize:3,
        		init: function() {
        			thisDropzone = this;
        			this.on('error', function(file, responseText) {
        				$.each(responseText, function(index, value) {
        					$('.dz-error-message').text(value);
        				});
        			});
        		},
        		uploadMultiple: true,
        		successmultiple: function(file, response) {
        			$('#logoTab').addClass('active in');
                    $('#logoList').addClass('active');
                    $('#uploadLogoTab').removeClass('active in');
                    $('#uploadLogoList').removeClass('active');
                    this.removeAllFiles();

                    var url = $('form#addNewLogoDz').data('url');
                    $.ajax({
                        url: url,
                        data: {
                            '_token' : $('input[name=_token]').val(),
                            'title' : 'logoImagePage',
                        },
                        beforeSend: function () {
                            $('.loaderHookLogo').addClass('loader');
                            $('.logoContainer').fadeOut();    
                        },
                        success: function(data) {
                            $('#logoTab').html(data);
                            $('.logoContainer').fadeIn();
                            $('.loaderHookLogo').removeClass('loader');

                             //select featured image button
                            $('.logoLink').click(function(event) {
                                var url = $(this).data('location');
                                var name = $(this).data('name');
                                var id = $(this).data('id');
                                $('#logoModal').modal('hide');
                                $('.changeLogoBtn img').attr('src', url);
                                $('.changeLogoBtn img').attr('title', name);
                                $('.changeLogoBtn input').val(id);
                            });
                        },
                        error:function(data) {
                            var errors = data.responseJSON.errors;
                            console.log(errors[data]);
                        }
                    });

                    //also reload for icon images
                    var urlIcon = $('form#addNewIconDz').data('url');
                    $.ajax({
                        url: urlIcon,
                        data: {
                            '_token' : $('input[name=_token]').val(),
                            'title' : 'iconImagePage',
                        },
                        beforeSend: function () {
                            $('.loaderHookIcon').addClass('loader');
                            $('.iconContainer').fadeOut();    
                        },
                        success: function(data) {
                            $('#iconTab').html(data);
                            $('.iconContainer').fadeIn();
                            $('.loaderHookIcon').removeClass('loader');

                             //select featured image button
                            $('.iconLink').click(function(event) {
                                var url = $(this).data('location');
                                var name = $(this).data('name');
                                var id = $(this).data('id');
                                $('#iconModal').modal('hide');
                                $('.changeIconBtn img').attr('src', url);
                                $('.changeIconBtn img').attr('title', name);
                                $('.changeIconBtn input').val(id);
                            });
                        },
                        error:function(data) {
                            var errors = data.responseJSON.errors;
                            console.log(errors[data]);
                        }
                    });


                    
        		}
        	});
        });

	    //select featured image button
	    $('.logoLink').click(function(event) {
	        var url = $(this).data('location');
	        var name = $(this).data('name');
	        var id = $(this).data('id');
	        $('#logoModal').modal('hide');
	        $('.changeLogoBtn img').attr('src', url);
	        $('.changeLogoBtn img').attr('title', name);
	        $('.changeLogoBtn input').val(id);
	    });

	    //click icon image
        $('.changeIconBtn').click(function() {
        	//initiate dropzone
        	$('form#addNewIconDz').dropzone({
        		paramName: 'image',
        		acceptedFiles: 'image/*',
        		maxFilesize:3,
        		init: function() {
        			thisDropzone = this;
        			this.on('error', function(file, responseText) {
        				$.each(responseText, function(index, value) {
        					$('.dz-error-message').text(value);
        				});
        			});
        		},
        		uploadMultiple: true,
        		successmultiple: function(file, response) {
        			$('#iconTab').addClass('active in');
                    $('#iconList').addClass('active');
                    $('#uploadIconTab').removeClass('active in');
                    $('#uploadIconList').removeClass('active');
                    this.removeAllFiles();

                    var url = $('form#addNewIconDz').data('url');
                    $.ajax({
                        url: url,
                        data: {
                            '_token' : $('input[name=_token]').val(),
                            'title' : 'iconImagePage',
                        },
                        beforeSend: function () {
                            $('.loaderHookIcon').addClass('loader');
                            $('.iconContainer').fadeOut();    
                        },
                        success: function(data) {
                            $('#iconTab').html(data);
                            $('.iconContainer').fadeIn();
                            $('.loaderHookIcon').removeClass('loader');

                             //select icon image button
                            $('.iconLink').click(function(event) {
                                var url = $(this).data('location');
                                var name = $(this).data('name');
                                var id = $(this).data('id');
                                $('#iconModal').modal('hide');
                                $('.changeIconBtn img').attr('src', url);
                                $('.changeIconBtn img').attr('title', name);
                                $('.changeIconBtn input').val(id);
                            });
                        },
                        error:function(data) {
                            var errors = data.responseJSON.errors;
                            console.log(errors[data]);
                        }
                    });

                    //also reload for logo images
                    var urlLogo = $('form#addNewLogoDz').data('url');
                    $.ajax({
                        url: urlLogo,
                        data: {
                            '_token' : $('input[name=_token]').val(),
                            'title' : 'logoImagePage',
                        },
                        beforeSend: function () {
                            $('.loaderHookLogo').addClass('loader');
                            $('.logoContainer').fadeOut();    
                        },
                        success: function(data) {
                            $('#logoTab').html(data);
                            $('.logoContainer').fadeIn();
                            $('.loaderHookLogo').removeClass('loader');

                             //select logo image button
                            $('.logoLink').click(function(event) {
                                var url = $(this).data('location');
                                var name = $(this).data('name');
                                var id = $(this).data('id');
                                $('#logoModal').modal('hide');
                                $('.changeLogoBtn img').attr('src', url);
                                $('.changeLogoBtn img').attr('title', name);
                                $('.changeLogoBtn input').val(id);
                            });
                        },
                        error:function(data) {
                            var errors = data.responseJSON.errors;
                            console.log(errors[data]);
                        }
                    });

        		}
        	});
        });

		//select icon image button
        $('.iconLink').click(function(event) {
            var url = $(this).data('location');
            var name = $(this).data('name');
            var id = $(this).data('id');
            $('#iconModal').modal('hide');
            $('.changeIconBtn img').attr('src', url);
            $('.changeIconBtn img').attr('title', name);
            $('.changeIconBtn input').val(id);
        });

	});
</script>