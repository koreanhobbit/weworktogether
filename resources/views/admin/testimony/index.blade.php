@extends('admin.layouts.navs')

@section('page_heading', 'Testimonies')

@section('section')
	<div class="col-sm-12">
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
											<td class="text-center">User Name</td>
											<td class="text-center">Rating</td>
											<td class="text-center">Description</td>
											<td class="text-center">In Display</td>
											<td class="text-center">Edit</td>
											<td class="text-center">Delete</td>
										</tr>
									</thead>
									<tbody>
										@foreach($testimonies as $testimony)
											<tr>
												<td class="text-center">{{ $testimony->user->name }}</td>
												<td class="text-center">
													@for($i=1; $i <= $testimony->rating; $i++)
														<span class="fa fa-star checked"></span>
													@endfor
													@for($i=1; $i <= 5-$testimony->rating; $i++)
										              <span class="fa fa-star"></span>
										            @endfor
												</td>
												<td class="text-center">{{ $testimony->testimony }}</td>
												<td class="text-center">
													<input type="checkbox" {{ $testimony->is_display == 1 ? 'checked' : '' }} data-url="{{ route('testimony.update', ['testimony' => $testimony->id]) }}" data-value="{{ $testimony->is_display }}" class="test_check">
												</td>
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