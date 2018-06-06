@extends('admin_customer.layouts.nav')

@section('page_heading', 'Testimony')

@section('section')
	<div class="col-sm-12">
		<form action="{{ route('customer.testimony.store', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}" method="post">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-sm-8">
					@component('admin.widgets.panel')
						@slot('class', 'warning')
						@slot('panelTitle', 'Fill Testimony')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="form group {{ $errors->has('testimony') ? 'has-error' : '' }}">
										<label for="testimony">Testimony</label>
										<div class="input-group">
											<textarea name="testimony" id="testimony" rows="5" class="form-control" required>{{ old('testimony') }}</textarea>
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
						@slot('panelTitle', 'Rating')
						@slot('panelBody')
							<div class="row">
								<div class="col-sm-12">
									<div class="text-center">
										<span class="fa fa-star fa-3x checked star" data-id="1"></span>
										<span class="fa fa-star fa-3x checked star" data-id="2"></span>
										<span class="fa fa-star fa-3x checked star" data-id="3"></span>
										<span class="fa fa-star fa-3x star" data-id="4"></span>
										<span class="fa fa-star fa-3x star" data-id="5"></span>
										<input type="hidden" name="rating" id="rating" value="5">
									</div>
								</div>
							</div>
						@endslot
					@endcomponent
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="pull-right">
						<div class="form-group">
							<button class="btn btn-primary">Create</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection
@section('script')
	@include('admin_customer.testimony.script._create')
@endsection