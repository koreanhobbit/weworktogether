@extends('admin_user.layouts.nav')

@section('style')
	{{-- datepicker --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
@endsection

@section('page_heading', 'Profile')

@section('section')
	<form action="{{ route('user.profile.update', ['user' => $user->id, 'name' => $user->name]) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('put') }}
		
		{{-- verified hidden --}}
		<input type="hidden" value="{{ $user->verified }}" name="verified" id="verified">

		{{-- display hidden --}}
		<input type="hidden" value="{{ $user->detail->display }}" name="display" id="display">

		<div class="col-sm-12">
			<div class="row m-b-20">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-sm btn-primary">
							Save Profile
						</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					@component('admin.widgets.panel')
						@slot('class', 'info')
						@slot('panelTitle', 'Profile Picture')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="thumbnail">
										<a href="javascript:" data-toggle="modal" data-target="#profileImageModal" class="profileImageBtn">
											<img src="{{ !empty($user->images()->wherePivot('option', 1)->first()) ? asset($user->images()->wherePivot('option', 1)->first()->location) : asset('images/noimg_thumbnail.png') }}" alt="" class="img-responsive form-control">
											<input type="hidden" value="{{ !empty($user->images()->wherePivot('option', 1)->first()) ? $user->images()->wherePivot('option', 1)->first()->id : '' }}" class="profileImageId" name="profileImageId">
										</a>	
									</div>
								</div>
							</div>
						@endslot
					@endcomponent
					@component('admin.widgets.panel')
						@slot('class', 'warning')
						@slot('panelTitle', 'Extra Information')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group {{ $errors->has('birthday') ? 'has-error' : '' }}">
										<label for="birthday">Birthday*</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</span>
											<input type="text" name="birthday" id="birthday" class="form-control" required value="@if(!empty($user->detail->birthday)){{ $errors->has('birthday')?old('birthday'):$user->detail->birthday_string }} @else {{ old('birthday') }}  @endif">
										</div>
										@if($errors->has('birthday'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('birthday') }}
													</strong>
												</span>
											</div>
										@endif
									</div>

									<div class="form-group {{ $errors->has('whatsapp') ? 'has-error' : '' }}">
										<label for="whatsapp">Phone/Whatsapp*</label>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-whatsapp"></i>
											</span>
											<input type="tel" name="whatsapp" id="whatsapp" class="form-control" required value="@if(!empty($user->detail->phone)){{ $errors->has('whatsapp') ? old('whatsapp') : $user->detail->phone }} @else {{ old('whatsapp') }} @endif">
										</div>
										@if($errors->has('whatsapp'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('whatsapp') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
									@foreach($messengers as $messenger)
										<div class="form-group {{ $errors->has('messenger.'.$messenger->id) ? 'has-error' : '' }}">
											<label for="{{ 'messenger[' . $messenger->slug . ']' }}">{{ $messenger->name }}</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-comments-o"></i>
												</span>
												<input type="text" name="{{ 'messenger[' . $messenger->id . ']' }}" id="{{ 'messenger[' . $messenger->id . ']' }}" class="form-control" value="@if(!empty($user->messengers->where('messenger_type_id', $messenger->id)->first())){{$errors->has('messenger.' . $messenger->id) ? old('messenger.'.$messenger->id) : $user->messengers->where('messenger_type_id', $messenger->id)->first()->value }}@endif">
											</div>
											@if($errors->has('messenger.' . $messenger->id))
												<div class="help-block">
													<span>
														<strong>
															{{ $errors->first('messenger.' . $messenger->id) }}
														</strong>
													</span>
												</div>
											@endif
										</div>
									@endforeach
								</div>
							</div>
						@endslot
					@endcomponent
				</div>
				<div class="col-sm-8">
					@component('admin.widgets.panel')
						@slot('class', 'primary')
						@slot('panelTitle', 'General Information')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<label for="name">Name</label>
										<div class="input-group">
											<input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
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
									</div>
									<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
										<label for="email">Email</label>
										<div class="input-group">
											<input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
											<span class="input-group-addon" required>
												<i class="fa fa-envelope"></i>
											</span>
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
									</div>
									<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
										<label for="title">Title</label>
										<div class="input-group">
											<input type="text" name="title" id="title" class="form-control" value="@if(!empty($user->detail->title)){{ $errors->has('title') ? old('title') : $user->detail->title }} @else {{ old('title') }} @endif">
											<span class="input-group-addon" required>
												<i class="fa fa-address-card-o"></i>
											</span>
										</div>
										@if($errors->has('title'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('title') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
									<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
										<label for="location">Location</label>
										<div class="input-group">
											<input type="text" name="location" id="location" class="form-control" value="@if(!empty($user->detail->location)){{ $errors->has('location') ? old('location') : $user->detail->location }} @else {{ old('location') }} @endif">
											<span class="input-group-addon" required>
												<i class="fa fa-address-card-o"></i>
											</span>
										</div>
										@if($errors->has('location'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('location') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
									<div class="form-group {{ $errors->has('Education') ? 'has-error' : '' }}">
										<label for="education">Education</label>
										<div class="input-group">
											<input type="text" name="education" id="education" class="form-control" value="@if(!empty($user->detail->education)){{ $errors->has('education') ? old('education') : $user->detail->education }} @else {{ old('education') }} @endif">
											<span class="input-group-addon" required>
												<i class="fa fa-graduation-cap"></i>
											</span>
										</div>
										@if($errors->has('education'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('education') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
									<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
										<label for="description">Description</label>
										<div class="input-group">
											<textarea name="description" id="description" rows="4" class="form-control">@if(!empty($user->detail->description)){{ $errors->has('description') ? old('description') : $user->detail->description }} @else {{ old('description') }} @endif</textarea>
											<span class="input-group-addon">
												<i class="fa fa-sticky-note-o"></i>
											</span>
										</div>
										@if($errors->has('description'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('description') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
									<div class="form-group {{ $errors->has('experience') ? 'has-error' : '' }}">
										<label for="experience">Experience</label>
										<div class="input-group">
											<textarea name="experience" id="experience" rows="4" class="form-control">@if(!empty($user->detail->experience)){{ $errors->has('experience') ? old('experience') : $user->detail->experience }} @else {{ old('experience') }} @endif</textarea>
											<span class="input-group-addon">
												<i class="fa fa-star"></i>
											</span>
										</div>
										@if($errors->has('experience'))
											<div class="help-block">
												<span>
													<strong>
														{{ $errors->first('experience') }}
													</strong>
												</span>
											</div>
										@endif
									</div>
								</div>
							</div>
						@endslot
					@endcomponent
					@component('admin.widgets.panel')
						@slot('class', 'success')
						@slot('panelTitle', 'Social Media')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									@foreach($socialmedias as $socialmedia)
										<div class="form-group {{ $errors->has('socialmedia.'.$socialmedia->id) ? 'has-error' : '' }}">
											<label for="{{ '[socialmedia' . $socialmedia->id . ']' }}">{{ ucfirst($socialmedia->name) }}</label>
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa {{ $socialmedia->icon }}"></i>
												</span>
												<input type="text" name="{{ 'socialmedia[' . $socialmedia->id . ']' }}" id="{{ 'socialmedia[' . $socialmedia->id . ']' }}" class="form-control" value="@if(!empty($user->socialmedias->where('social_media_type_id', $socialmedia->id)->first())){{ $errors->has('socialmedia.' . $socialmedia->id) ? old('socialmedia.' . $socialmedia->id) : $user->socialmedias->where('social_media_type_id', $socialmedia->id)->first()->value }}@endif">
											</div>
											@if($errors->has('socialmedia.' . $socialmedia->id))
												<div class="help-block">
													<span>
														<strong>
															{{ $errors->first('socialmedia.'.$socialmedia->id) }}
														</strong>
													</span>
												</div>
											@endif
										</div>
									@endforeach
								</div>
							</div>
						@endslot
					@endcomponent
				</div>
			</div>
		</div>
	</form>

{{-- modals area --}}

	{{-- modals for profile image --}}
	@include('admin_user.profile.modal._profile_image')
@endsection

@section('script')
	@include('admin_user.profile.script._index')
@endsection
