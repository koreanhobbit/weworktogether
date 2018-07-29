@if(count($testimonies) > 0)	
	<section class="main-section" id="client_outer">
		<!--main-section client-part-start-->
		<h2>Happy Clients</h2>
		<div class="client_area ">
			@foreach($testimonies as $key => $testimony)
				@if($key % 2 == 0)
					<div class="client_section animated  fadeInUp wow">
						<div class="client_profile">
							<div class="client_profile_pic"><img src="{{ asset($testimony->images()->wherePivot('option', 1)->first()->medium->location) }}" alt=""></div>
							<h3>{{ $testimony->name }}</h3>
							<span>{{ $testimony->company }}</span> </div>
						<div class="quote_section">
							<div class="quote_arrow"></div>
							<p><b><img src="{{ asset('frontend/butterfly/img/quote_sign_left.png') }}" alt=""></b>&nbsp;{{ $testimony->testimony }}&nbsp;<small><img src="{{ asset('frontend/butterfly/img/quote_sign_right.png') }}" alt=""></small>						</p>
						</div>
						<div class="clear"></div>
					</div>
				@else
					<div class="client_section animated  fadeInDown wow">
						<div class="client_profile flt">
							<div class="client_profile_pic"><img src="{{ asset('frontend/butterfly/img/client-pic2.jpg') }}" alt=""></div>
							<h3>Marie Schrader</h3>
							<span>DEA Foundation</span> </div>
						<div class="quote_section flt">
							<div class="quote_arrow2"></div>
							<p><b><img src="{{ asset('frontend/butterfly/img/quote_sign_left.png') }}" alt=""></b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <small><img src="{{ asset('frontend/butterfly/img/quote_sign_right.png') }}" alt=""></small>						</p>
						</div>
						<div class="clear"></div>
					</div>
				@endif
			@endforeach
		</div>
	</section>
	<!--main-section client-part-end-->
@endif