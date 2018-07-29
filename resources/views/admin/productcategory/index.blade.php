@extends('admin.layouts.navs')

@section('page_heading', 'Project Category')

@section('section')
	<div class="col-sm-12">
		<div class="row m-b-20">
			<div class="col-sm-12">
				<div class="pull-right">
					<a href="{{ route('productcategory.create') }}" class="btn btn-primary btn-sm">
						<i class="fa fa-shopping-bag"></i>
						&nbsp;Add New Project
					</a>
				</div>
			</div>
		</div>
		@if(count($productcategories) < 1)
			<div class="alert alert-info">
				<div class="text-center">
					<h1>There is no project category</h1>
				</div>
			</div>
		@else
			<div class="row">
				<div class="col-sm-12">
					@component('admin.widgets.panel')
						@slot('panelTitle1', 'Products Category List')
						@slot('panelBody')
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											
											<th class="col-xs-12">Name</th>
											<th class="text-center col">Edit</th>
										</tr>
									</thead>
									<tbody class="productListContainer" style="display: relative">
										@foreach($productcategories as $productcategory)
											<tr>
												<td>{{ ucfirst($productcategory->name) }}</td>
												<td class="text-center">
													
													<a href="{{ route('productcategory.edit', ['productcategory' => $productcategory->id]) }}" class="btn btn-sm btn-info">
														<i class="fa fa-edit"></i>
													</a>
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
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						{{ $productcategories->links() }}
					</div>
				</div>
			</div>
		@endif
	</div>
@endsection