@extends('admin.layouts.navs')

@section('page_heading', 'Create Project Category')

@section('section')
	<div class="col-sm-12">
		<form action="{{ route('productcategory.store') }}" method="post">
			{{ csrf_field() }}
			<div class="row m-b-20">
				<div class="col-sm-12">
					<div class="pull-right">
						<button class="btn btn-sm btn-primary" type="submit">Create Project Category</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					@component('admin.widgets.panel')
						@slot('class', 'success')
						@slot('panelTitle', 'Fill the Name')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} ">
										<label for="name">Name</label>
										<div class="input-group">
											<input type="text" class="form-control" id="name" name="name" value="{{ $errors->has('name') ? old('name') : '' }}">
											<span class="input-group-addon"><i class="fa fa-check"></i></span>
										</div>
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

									<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }} ">
										<label for="slug">Slug</label>
										<div class="input-group">
											<input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
											<span class="input-group-addon"><i class="fa fa-check"></i></span>
										</div>
									</div>

									@if($errors->has('slug'))
										<div class="help-block">
											<span>
												<strong>
													{{ $errors->first('slug') }}
												</strong>
											</span>
										</div>
									@endif
								</div>
							</div>
						@endslot
					@endcomponent
				</div>
			</div>
		</form>
	</div>
@endsection

@section('script')
	@include('admin.productcategory.script._create')
@endsection