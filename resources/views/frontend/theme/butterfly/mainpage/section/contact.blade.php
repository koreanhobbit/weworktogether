<div class="footer_section" id="contact">
	<div class="container">
		<section class="main-section contact" id="contact">
			<div class="contact_section">
				<h2>Contact Us</h2>
				<div class="row">
					
					<div class="col-lg-6">
						<div class="contact_block">
							<div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa fa-phone"></i></span></div>
							<span> {{ $setting->phone }} </span> </div>
					</div>
					<div class="col-lg-6">
						<div class="contact_block">
							<div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa fa-pencil"></i></span></div>
							@if(!empty($setting->email1))
								<span> 
									<a href="mailto:{{ $setting->email1 }}"> 
										{{ $setting->email1 }}
									</a>
								</span>
							@endif
							@if(!empty($setting->email2)) 
								<span>
									<a href="mailto:{{ $setting->email2 }}">
									{{ $setting->email2 }}
									</a>
								</span> 
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 wow fadeInLeft">
					<div class="contact-info-box address clearfix">
						@if(!empty($setting->branch1))
							<h3>{{ $setting->branch1 }}</h3>
						@endif
						@if(!empty($setting->address1))
							<p>{{ strip_tags($setting->address1) }}</p>
						@endif
						@if(!empty($setting->branch2))
							<h3>{{ $setting->branch2 }}</h3>
						@endif
						@if(!empty($setting->address2))
							<p>{{ strip_tags($setting->address2) }}</p>
						@endif
					</div>
					<ul class="social-link">
						@foreach($setting->contacts as $contact)
							@if(!empty($contact->value))
								<li class="twitter animated bounceIn wow delay-02s"><a href="{{ $contact->domain . $contact->value }}" target="_blank"><i class="fa {{ $contact->icon }}"></i></a></li>
							@endif
						@endforeach
					</ul>
				</div>
				<div class="col-lg-6 wow fadeInUp delay-06s">
					<div class="form">
						@if(session()->has('successmessage'))
							<div id="sendmessage">{{ session()->get('successmessage') }}</div>
						@endif
						<form action="{{ route('contact.store') }}" method="post" class="contactForm">
							{{ csrf_field() }}
							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
								<input type="text" name="name" class="form-control input-text" id="name" placeholder="Your Name" />
							</div>
							@if($errors->has('name'))
								<div class="help-block">
									<span>
										<strong>
											{{ $errors->first('name') }}
										</strong>
									</span>
								</div>
							@endif
							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								<input type="email" class="form-control input-text" name="email" id="email" placeholder="Your Email" />
							</div>
							@if($errors->has('email'))
								<div class="help-block">
									<span>
										<strong>
											{{ $errors->first('email') }}
										</strong>
									</span>
								</div>
							@endif
							<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }} ">
								<input type="text" class="form-control input-text" name="subject" id="subject" placeholder="Subject" />
							</div>
							@if($errors->has('subject'))
								<div class="help-block">
									<span>
										<strong>
											{{ $errors->first('subject') }}
										</strong>
									</span>
								</div>
							@endif
							<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }} ">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							</div>
							@if($errors->has('message'))
								<div class="help-block">
									<span>
										<strong>
											{{ $errors->first('message') }}
										</strong>
									</span>
								</div>
							@endif

							<div class="form-group {{ $errors->has('g-recaptcha-response') ? 'has-error' : '' }} ">
								{!! NoCaptcha::renderJs() !!}
                  				{!! NoCaptcha::display() !!}
							</div>
							@if($errors->has('g-recaptcha-response'))
								<div class="help-block">
									<span>
										<strong>
											{{ $errors->first('g-recaptcha-response') }}
										</strong>
									</span>
								</div>
							@endif

							<button type="submit" class="btn input-btn">SEND MESSAGE</button>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>	