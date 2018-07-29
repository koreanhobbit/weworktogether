<section class="main-section team" id="team">
	<!--main-section team-start-->
	<div class="container">
		<h2>Amazing Team</h2>
		<h6>Take a closer look into our amazing team.</h6>

		{{-- using the database to show the team members --}}
		@if($setting->themesetting->menus()->where('name', 'team')->first()->show && count($showedUsers) > 0)		
			<div class="team-leader-block clearfix">
				@foreach($users as $key => $user)
					@if($user->detail->display)
						<div class="team-leader-box m-b-25">
							<div class="team-leader wow fadeInDown {{ 'delay-0' . $key . 's' }}">
								<div class="team-leader-shadow"><a href="javascript:void(0)" data-toggle="modal" data-target="#{{ 'description' . $user->id }}"></a></div>
								<img src="{{ asset($user->images()->wherePivot('option', 1)->first()->medium->location) }}" alt="">
								@if(count($user->socialmedias) > 0)
									<ul>
										@foreach($user->socialmedias as $socialmed)
											@if(!empty($socialmed->value))
												<li>
													<a href="{{ $socialmed->SocialMediaType->link . $socialmed->value }}" target="_blank" class="fa {{ 'fa-' . $socialmed->SocialMediaType->name }}"></a>
												</li>
											@endif
										@endforeach
									</ul>
								@endif
							</div>
							<h3 class="wow fadeInDown {{ 'delay-0' . $key . 's' }}">{{ $user->name }}</h3>
							<span class="wow fadeInDown {{ 'delay-0' . $key . 's' }}">{{ $user->detail->title }}</span>
							<p class="wow fadeInDown {{ 'delay-0' . $key . 's' }}">{{ $user->detail->experience }}</p>
						</div>
					@endif
				@endforeach
			</div>	
		@else
		{{-- use the template format --}}
			<div class="team-leader-block clearfix">
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-03s">
						<div class="team-leader-shadow"><a href="javascript:void(0)" data-toggle="modal" data-target="#modal"></a></div>
						<img src="{{ asset('frontend/butterfly/img/team-leader-pic1.jpg') }}" alt="">
						<ul>
							<li><a href="javascript:void(0)" class="fa-twitter"></a></li>
							<li><a href="javascript:void(0)" class="fa-facebook"></a></li>
							<li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
							<li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-03s">Walter White</h3>
					<span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
					<p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader  wow fadeInDown delay-06s">
						<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
						<img src="{{ asset('frontend/butterfly/img/team-leader-pic2.jpg') }}" alt="">
						<ul>
							<li><a href="javascript:void(0)" class="fa-twitter"></a></li>
							<li><a href="javascript:void(0)" class="fa-facebook"></a></li>
							<li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
							<li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
					<span class="wow fadeInDown delay-06s">Product Manager</span>
					<p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
				<div class="team-leader-box">
					<div class="team-leader wow fadeInDown delay-09s">
						<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
						<img src="{{ asset('frontend/butterfly/img/team-leader-pic3.jpg') }}" alt="">
						<ul>
							<li><a href="javascript:void(0)" class="fa-twitter"></a></li>
							<li><a href="javascript:void(0)" class="fa-facebook"></a></li>
							<li><a href="javascript:void(0)" class="fa-pinterest"></a></li>
							<li><a href="javascript:void(0)" class="fa-google-plus"></a></li>
						</ul>
					</div>
					<h3 class="wow fadeInDown delay-09s">Skyler white</h3>
					<span class="wow fadeInDown delay-09s">Accountant</span>
					<p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
				</div>
			</div>
		@endif
	</div>
</section>
<!--main-section team-end-->