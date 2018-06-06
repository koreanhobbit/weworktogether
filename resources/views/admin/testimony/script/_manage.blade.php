<script>
	$(document).ready(function() {
		$('#userRole').change(function() {
			var url = $(this).data('url');
			var role = $(this).val();
 			if($(this).val() != '') {
				$.ajax({
					url: url,
					data:{
						'_token': $('input[name=_token]').val(),
						'title': 'reloadUsers',
						'role': role,
					},
					beforeSend: function() {
						$('.loaderHook').addClass('loader');
						$('.testimonyDetailsContainer').fadeOut();
					},
					success: function(data) {
						$('.userDetails').html(data);
						$('.loaderHook').removeClass('loader');
						$('.testimonyDetailsContainer').fadeIn();

                        //pagination for image link
                        $(function() {
                            $('body').on('click', '.pagination a', function(e) {
                                e.preventDefault();
                                var url =$(this).attr('href');
                                if(url.search("userpage") > -1) {
                                    paginationImageLink(url, role);    
                                }
                                window.history.pushState("", "", url);
                            });
                        });

                        //function for blog pagination
                        function paginationImageLink(url, role) {
                            $.ajax({
                                url: url,
                                data:{
                                    'title': 'userpage',
                                    'role' : role,
                                },
                                beforeSend: function () {
                                    $('.loaderHook').addClass('loader');
                                    $('.testimonyDetailsContainer').fadeOut();    
                                },
                                success: function(data) {
                                    $('.userDetails').html(data);
                                    $('.loaderHook').removeClass('loader');
                                    $('.testimonyDetailsContainer').fadeIn();
                                },
                            });
                        }	
					},
				});
			}
		});
	});
</script>