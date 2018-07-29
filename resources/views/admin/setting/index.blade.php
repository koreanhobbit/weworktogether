@extends('admin.layouts.navs')

@section('page_heading', 'General Settings')

@section('section')
<form action="{{ route('setting.update', ['setting' => $setting->id]) }}" method="post">
	{{ csrf_field() }}
	{{ method_field('put') }}
	<div class="col-sm-12">
		<div class="row m-b-20">
			<div class="col-sm-12">
				<div class="pull-right">
					<button type="submit" class="btn btn-primary btn-sm">
				 		<i class="fa fa-save"></i>
				 		&nbsp;Save New Setting Profile
				 	</button>
				 </div>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li class="{{ count($errors->all()) < 1 ? 'active' : '' }} {{ $errors->has('name') || $errors->has('tagline') || $errors->has('about') ? 'active' : '' }}">
						<a href="#generalsetting" data-toggle="tab">General Setting</a>
					</li>
					<li class="{{ $errors->has('phone') || $errors->has('email') || $errors->has('address') ? 'active' : '' }}">
						<a href="#contactsetting" data-toggle="tab">Contact Setting</a>
					</li>
				
					<li><a href="#mainpagecontroller" data-toggle="tab">Main Page Controller</a></li>
				</ul>
				<div class="tab-content">
					{{-- Content for general setting --}}
					<div class="tab-pane fade {{ count($errors->all()) < 1 ? 'active in' : '' }} {{ $errors->has('name') || $errors->has('tagline') || $errors->has('about') ? 'active in' : '' }}" id="generalsetting">
						<div class="row">
							<div class="col-sm-8">
								@component('admin.widgets.panel')
									@slot('panelTitle1', 'General Setting')
									@slot('panelBody')
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
													<label for="name">Name of The Company</label>
													<input type="text" class="form-control" name="name" id="name" value="{{ $setting->name }}" required>
													@if($errors->has('name'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('name') }}</strong>
															</span>
														</div>
													@endif 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group {{ $errors->has('tagline') ? 'has-error' : '' }}">
													<label for="tagline">Tagline</label>
													<input type="text" class="form-control" name="tagline" id="tagline" value="{{ $setting->tagline }}" required>
													@if($errors->has('tagline'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('tagline') }}</strong>
															</span>
														</div>
													@endif 
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group {{ $errors->has('about') ? 'has-error' : '' }}">
													<label for="about">About The Company</label>
													<textarea name="about" id="about" class="form-control" rows="10">{{ $setting->about }}</textarea>
													@if($errors->has('about'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('about') }}</strong>
															</span>
														</div>
													@endif
												</div> 
											</div>
										</div>
									@endslot
								@endcomponent
							</div>
							<div class="col-sm-4">
								@component('admin.widgets.panel')
									@slot('panelTitle1', 'Logo')
									@slot('panelBody')
										<div class="row">
											<div class="col-sm-12">
												<div class="thumbnail">
													<a href="javascript:" data-toggle="modal" data-target="#logoModal" class="changeLogoBtn">
														<img src="{{ $logoMark ? asset($logo->thumbnail->location) : asset('images/astrologothumbnail.png') }}" title="{{ $logoMark ? $logo->name : 'astrologothumbnail.png' }}" class="img-responsive">
														<input type="hidden" name="logo" id="logo" value="{{ $logoMark ? $logo->id : '' }}">
													</a>
												</div>
											</div>
										</div>
									@endslot
								@endcomponent
							</div>
							<div class="col-sm-4">
								@component('admin.widgets.panel')
									@slot('panelTitle1', 'Icon')
									@slot('panelBody')
										<div class="row">
											<div class="col-sm-12">
												<div class="thumbnail">
													<a href="javascript:" data-toggle="modal" data-target="#iconModal" class="changeIconBtn">
														<img src="{{ $iconMark ? asset($icon->thumbnail->location) : asset('images/astrologothumbnail.png') }}" title="{{ $iconMark ? $icon->name : 'astrologothumbnail.png' }}" class="img-responsive">
														<input type="hidden" name="icon" id="icon" value="{{ $iconMark ? $icon->id : '' }}">
													</a>
												</div>
											</div>
										</div>
									@endslot
								@endcomponent
							</div>							
						</div>
					</div>
					<div class="tab-pane fade {{ $errors->has('phone') || $errors->has('email1') || $errors->has('email2') || $errors->has('address') ? 'active in' : '' }}" id="contactsetting">
						<div class="row">
							<div class="col-sm-12">
								@component('admin.widgets.panel')
									@slot('panelTitle1', 'Website Contact & Social Media')
									@slot('panelBody')
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
													<label for="phone">Phone Number</label>
													<input type="text" class="form-control" id="phone" name="phone" value="{{ $setting->phone }}" required>
													@if($errors->has('phone'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('phone') }}</strong>
															</span>
														</div>
													@endif 
												</div>
												<div class="form-group {{ $errors->has('email1') ? 'has-error' : '' }}">
													<label for="email1">Email Address</label>
													<input type="email1" class="form-control" id="email1" name="email1" value="{{ $setting->email1 }}" required>
													@if($errors->has('email1'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('email1') }}</strong>
															</span>
														</div>
													@endif 
												</div>

												<div class="form-group {{ $errors->has('email2') ? 'has-error' : '' }}">
													<label for="email2">Email Address</label>
													<input type="email2" class="form-control" id="email2" name="email2" value="{{ $setting->email2 }}" required>
													@if($errors->has('email2'))
														<div class="help-block">
															<span>
																<strong>{{ $errors->first('email2') }}</strong>
															</span>
														</div>
													@endif 
												</div>
												@foreach($setting->contacts as $contact)
													<div class="form-group">
														<label for="{{ $contact->slug }}">{{ $contact->name }}</label>
														<input type="text" class="form-control" name="{{ $contact->slug }}" id="{{ $contact->slug }}" value="{{ $contact->value }}">
														<small><span><i class="fa fa-info-circle"></i></span>&nbsp;Put just the name of the account or user</small>
													</div>
												@endforeach
											</div>
										</div>
									@endslot
								@endcomponent
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								@component('admin.widgets.panel')
									@slot('panelTitle1', 'Address')
									@slot('panelBody')
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group {{ $errors->has('branch1') ? 'has-error' : '' }}">
													<label for="branch1">Branch</label>
													<input type="text" name="branch1" id="branch1" value="{{ $setting->branch1 }}" class="form-control">
													@if($errors->has('branch1'))
														<div class="help-block">
															<span>
																<strong>
																	{{ $errors->first('branch1') }}
																</strong>
															</span>
														</div>
													@endif
												</div>

												<div class="form-group {{ $errors->has('address1') ? 'has-error' : '' }}">
													<label for="address1">Address</label>
													<textarea name="address1" id="address1" class="form-control">{{ $setting->address1 }}</textarea>
													@if($errors->has('address1'))
														<div class="help-block">
															<span>
																<strong>
																	{{ $errors->first('address1') }}
																</strong>
															</span>
														</div>
													@endif
												</div>

												<div class="form-group {{ $errors->has('branch2') ? 'has-error' : '' }}">
													<label for="branch2">Branch</label>
													<input type="text" name="branch2" id="branch2" value="{{ $setting->branch2 }}" class="form-control">
													@if($errors->has('branch2'))
														<div class="help-block">
															<span>
																<strong>
																	{{ $errors->first('branch2') }}
																</strong>
															</span>
														</div>
													@endif
												</div>

												<div class="form-group {{ $errors->has('address2') ? 'has-error' : '' }}">
													<label for="address2">Address</label>
													<textarea name="address2" id="address2" class="form-control">{{ $setting->address2 }}</textarea>
													@if($errors->has('address2'))
														<div class="help-block">
															<span>
																<strong>
																	{{ $errors->first('address2') }}
																</strong>
															</span>
														</div>
													@endif
												</div>
											</div>
										</div>
									@endslot
								@endcomponent
							</div>
						</div>
					</div>
					
					<div class="tab-pane fade" id="mainpagecontroller">
						<div class="row">
							<div class="col-sm-12">
								@component('admin.widgets.panel')
									@slot('class', 'info')
									@slot('panelTitle', 'Set Main Page Option')
									@slot('panelBody')
										@foreach($setting->themesetting->first()->menus as $menu)
											<div class="form-group">
												<label for="{{ $menu->name . 'controller' }}">{{ ucfirst($menu->name) . ' ' . 'Controller' }}</label>
												<select name="{{ $menu->name . 'controller'}}" id="{{ $menu->name . 'controller'}}" class="form-control">
													<option value="0" {{ $menu->show == 0 ? 'selected' : '' }}>{{ 'Show Dummy' . ' ' . ucfirst($menu->name) }}</option>
													<option value="1" {{ $menu->show == 1 ? 'selected' : '' }}>{{ 'Show Real' . ' ' . ucfirst($menu->name) }}</option>
												</select>
											</div>
											<input type="hidden" name="{{ $menu->name . 'id' }}" value="{{ $menu->id }}">
										@endforeach
									@endslot
								@endcomponent
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>
</form>

{{-- modal for logo --}}
<div class="modal fade-in full-modal" id="logoModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Logo</h4>
      </div>
      <div class="modal-body">
			@component('admin.widgets.panel')
			@slot('class', 'default')
			@slot('panelTitle1', 'Choose Logo')
			@slot('panelBody')
				<ul class="nav nav-tabs" style="margin-bottom: 20px;">
					<li class="active" id="logoList"><a href="#logoTab" data-toggle="tab">Logo Image</a></li>
					<li class="" id="uploadLogoList"><a href="#uploadLogoTab" data-toggle="tab">Upload Logo</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="logoTab">
						@include('admin.setting.partials._logo')
					</div>
					<div class="tab-pane fade" id="uploadLogoTab">
						
						<form action="{{ route('image.store') }}" class="dropzone" id="addNewLogoDz" data-url="{{ route('setting.index', ['setting' => 1]) }}">
							{{ csrf_field() }}
							<div class="fallback">
								<input type="file" name="image" multiple>
							</div>
							<div class="dz-message">
								<h3 class="text-center">
									Drop your images inside the box or click to add images 
								</h3>
							</div>
						</form>
					</div>
				</div>
			@endslot
		@endcomponent
      </div>
    </div>
  </div>
</div>

{{-- modal for icon --}}
<div class="modal fade-in full-modal" id="iconModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Icon</h4>
      </div>
      <div class="modal-body">
			@component('admin.widgets.panel')
			@slot('class', 'default')
			@slot('panelTitle1', 'Choose Icon')
			@slot('panelBody')
				<ul class="nav nav-tabs" style="margin-bottom: 20px;">
					<li class="active" id="iconList"><a href="#iconTab" data-toggle="tab">Icon Image</a></li>
					<li class="" id="uploadIconList"><a href="#uploadIconTab" data-toggle="tab">Upload Icon</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active in" id="iconTab">
						@include('admin.setting.partials._icon')
					</div>
					<div class="tab-pane fade" id="uploadIconTab">
						
						<form action="{{ route('image.store') }}" class="dropzone" id="addNewIconDz" data-url="{{ route('setting.index', ['setting' => 1]) }}">
							{{ csrf_field() }}
							<div class="fallback">
								<input type="file" name="image" multiple>
							</div>
							<div class="dz-message">
								<h3 class="text-center">
									Drop your images inside the box or click to add images 
								</h3>
							</div>
						</form>
					</div>
				</div>
			@endslot
		@endcomponent
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
	@include('admin.setting.script._index')
@endsection