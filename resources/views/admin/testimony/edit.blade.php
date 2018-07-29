@extends('admin.layouts.navs')

@section('page_heading', 'Edit Testimony')

@section('section')
	<div class="col-sm-12">
		<form action="{{ route('testimony.update', ['testimony' => $testimony->id]) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('put') }}
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<div class="form-group">
							<button class="btn btn-primary btn-sm">Edit</button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					@component('admin.widgets.panel')
						@slot('class', 'warning')
						@slot('panelTitle', 'Fill Testimony')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<label for="name">Name</label>
										<div class="input-group">
											<input type="text" name="name" id="name" value="{{ $errors->has('name') ? old('name') : $testimony->name }}" class="form-control">
											<div class="input-group-addon"><i class="fa fa-user"></i></div>
										</div>
									</div>
									<div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
										<label for="company">Company</label>
										<div class="input-group">
											<input type="text" name="company" id="company" value="{{ $errors->has('company') ? old('company') : $testimony->company }}" class="form-control">
											<div class="input-group-addon"><i class="fa fa-building"></i></div>
										</div>
									</div>
									<div class="form-group {{ $errors->has('testimony') ? 'has-error' : '' }}">
										<label for="testimony">Description</span></label>
										<div class="input-group">
											<textarea name="testimony" id="testimony" rows="5" class="form-control" required>{{ $errors->has('testimony') ? old('testimony') : $testimony->testimony }}</textarea>
											<div class="input-group-addon"><i class="fa fa-comment-o"></i></div>
										</div>
									</div>
								</div>
							</div>
						@endslot
					@endcomponent
				</div>
				<div class="col-sm-4">
					@component('admin.widgets.panel')
						@slot('class', 'info')
						@slot('panelTitle', 'Image')
						@slot('panelBody')
							<div class="row addImageBtn {{ !empty($testimony->images()->wherePivot('option', 1)->first()) ? 'hidden' : '' }}">
								<div class="col-sm-12">
									<div class="text-center">
										<a href="javascript:" class="btn btn-sm btn-info" data-toggle="modal" data-target="#imageModal">Add Image</a>
									</div>
								</div>
							</div>
							<div class="addImageContainer {{ empty($testimony->images()->wherePivot('option', 1)->first()) ? 'hidden' : '' }}">
								<a class="close btn-warning removeImageBtn">
									<i class="fa fa-close"></i>
								</a>
								<div class="thumbnail">
									<img src="{{ !empty($testimony->images()->wherePivot('option', 1)->first()) ? asset($testimony->images()->wherePivot('option', 1)->first()->thumbnail->location) : '' }}" alt="" class="img-rounded">
								</div>
							</div>
							<input type="hidden" name="image" id="image" value="{{ !empty($testimony->images()->wherePivot('option', 1)->first()) ? $testimony->images()->wherePivot('option', 1)->first()->id : 1 }}">
						@endslot
					@endcomponent
				</div>
			</div>
		</form>
	</div>


	{{-- modal for image --}}
	<div class="modal fade-in full-modal" id="imageModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Add Image</h4>
	      </div>
	      <div class="modal-body">
				@component('admin.widgets.panel')
				@slot('class', 'default')
				@slot('panelTitle1', 'Choose Image')
				@slot('panelBody')
					<ul class="nav nav-tabs" style="margin-bottom: 20px;">
						<li class="active" id="imageList"><a href="#imageTab" data-toggle="tab">Image</a></li>
						<li class="" id="uploadImageList"><a href="#uploadImageTab" data-toggle="tab">Upload Image</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="imageTab">
							@include('admin.testimony.partial._image')
						</div>
						<div class="tab-pane fade" id="uploadImageTab">
							
							<form action="{{ route('image.store') }}" class="dropzone" id="addNewImageDz" data-url="{{ route('testimony.create') }}">
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
	@include('admin.testimony.script._edit');
@endsection