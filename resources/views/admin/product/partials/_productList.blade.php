@foreach($products as $product)
	<tr>
		<td class="text-center">
			<div class="thumbnail">
				<img src="{{ count($product->images) > 0 ? asset($product->images()->first()->thumbnail->location) : asset($noImage->thumbnail->location) }}" title="{{ count($product->images) > 0 ? $product->images()->first()->thumbnail->name : $noImage->thumbnail->name }}" class="img-responsive">
			</div>
		</td>
		<td class="text-center">{{ ucfirst($product->name) }}</td>
		<td class="text-center">{{ $product->summary }}</td>
		
		<td class="text-center">
			
			<a href="{{ route('product.edit', ['product' => $product->slug]) }}" class="btn btn-sm btn-info">
				<i class="fa fa-edit"></i>
			</a>
		</td>
		<td class="text-center">
			<form action="{{ route('product.destroy', ['product' => $product->slug]) }}" method="post" class="deleteForm">
				{{ csrf_field() }}
				{{ method_field('delete') }}
				<button type="submit" class="btn btn-sm btn-danger">
					<i class="fa fa-trash-o"></i>
				</button>
			</form>
		</td>
	</tr>
@endforeach