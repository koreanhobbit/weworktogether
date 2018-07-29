<script>
    Dropzone.autoDiscover = false;
</script>
<script>
	$(document).ready(function() {
		//set dropzone for uploading new image into database (featured image)
        $('.addImageBtn a').click(function(event) {
            //initiate dropzone
            $('form#addNewImageDz').dropzone({
                paramName: "image",
                acceptedFiles: "image/*",
                maxFilesize:3,
                init: function() {
                    thisDropzone = this;
                    this.on("error", function (file, responseText) {
                        $.each(responseText, function (index, value) {
                            $('.dz-error-message').text(value);
                        });
                    });
                },
                uploadMultiple: true,
                successmultiple: function(file,response) {
                    $('#imageTab').addClass('active in');
                    $('#imageList').addClass('active');
                    $('#uploadImageTab').removeClass('active in');
                    $('#uploadImageList').removeClass('active');
                    this.removeAllFiles();
                    var url = $('form#addNewImageDz').data('url');
                    $.ajax({
                        url: url,
                        data: {
                            '_token' : $('input[name=_token]').val(),
                            'title' : 'reloadImageContainer',
                        },
                        beforeSend: function () {
                            $('.loaderHookImage').addClass('loader');
                            $('.imageContainer').fadeOut();    
                        },
                        success: function(data) {
                            $('#imageTab').html(data);
                            $('.imageContainer').fadeIn();
                            $('.loaderHookImage').removeClass('loader');

                             //select featured image button
                            $('.imageLink').click(function(event) {
                                var url = $(this).data('location');
                                var name = $(this).data('name');
                                var id = $(this).data('id');
                                $('#imageModal').modal('hide');
                                $('.addImageBtn').addClass('hidden');
                                $('.addImageContainer').removeClass('hidden');
                                $('.addImageContainer img').attr('src', url);
                                $('.addImageContainer img').attr('title', name);
                                $('.addImageContainer input').val(id);
                            });

                            //remove featured image button 
                            $('.removeImageBtn').click(function() {
                                $('.addImageBtn').removeClass('hidden');
                                $('.addImageContainer').addClass('hidden');
                                $('.addImageContainer img').attr('src', '');
                                $('.addImageContainer img').attr('title', '');
                                $('.addImageContainer input').val('');
                            });

                            if(!$('.infoContainer').hasClass('hidden')) {
                                $('.infoContainer').addClass('hidden');
                                $('.imageDiv').removeClass('hidden');
                            }
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
        $('.imageLink').click(function(event) {
            var url = $(this).data('location');
            var name = $(this).data('name');
            var id = $(this).data('id');
            $('#imageModal').modal('hide');
            $('.addImageBtn').addClass('hidden');
            $('.addImageContainer').removeClass('hidden');
            $('.addImageContainer img').attr('src', url);
            $('.addImageContainer img').attr('title', name);
            $('#image').val(id);
        });


        //remove featured image button 
        $('.removeImageBtn').click(function() {
            $('.addImageBtn').removeClass('hidden');
            $('.addImageContainer').addClass('hidden');
            $('.addImageContainer img').attr('src', '');
            $('.addImageContainer img').attr('title', '');
            $('#image').val('1');
        });

	});
</script>