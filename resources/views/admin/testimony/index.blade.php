@extends('admin.layouts.navs')

@section('page_heading', 'Testimonies')

@section('section')
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="{{ route('testimony.create') }}" class="btn btn-primary btn-sm m-b-20">Add Testimony</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-info {{ count($testimonies) > 0 ? 'hidden' : '' }}">
					<div class="text-center">
						<h1>There is no displayed testimonial</h1>
					</div>
				</div>
				<div class="{{ count($testimonies) > 0 ? '' : 'hidden' }}">
					@component('admin.widgets.panel')
						@slot('panelTitle', 'List')
						@slot('panelBody')
							<div class="table-responsive">
								<table class="table table-hover table-striped">
									<thead>
										<tr>
											<td class="text-center">Name</td>
											<td class="text-center">Company</td>
											<td class="text-center">Description</td>
											<td class="text-center">Edit</td>
											<td class="text-center">Delete</td>
										</tr>
									</thead>
									<tbody>
										@foreach($testimonies as $testimony)
											<tr>
												<td class="text-center">{{ $testimony->name }}</td>
												<td class="text-center">
													{{ $testimony->company }}
												</td>
												<td class="text-center">{{ $testimony->testimony }}</td>
												<td class="text-center">
													<a href="{{ route('testimony.edit', ['testimony' => $testimony->id]) }}" class="btn btn-sm btn-info">
														<span>
															<i class="fa fa-edit"></i>
														</span>
													</a>
												</td>
												<td class="text-center">
													<form action="{{ route('testimony.destroy', ['testimony' => $testimony->id]) }}" method="post" class="deleteForm">
														{{ csrf_field() }}
														{{ method_field('delete') }}
														<button class="btn btn-sm btn-danger">
															<i class="fa fa-trash"></i>
														</button>
													</form>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						@endslot
					@endcomponent
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	@include('admin.testimony.script._index')
@endsection