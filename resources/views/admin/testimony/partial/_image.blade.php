<div class="row infoContainer {{ !count($images) < 1 ? 'hidden' : ''}}">
	<div class="col-sm-12">
		<div class="alert alert-info">
			<div class="text-center">
				<h1>There is no image</h1>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="imageDiv {{ count($images) < 1 ? 'hidden' : '' }}" style="display: relative">
			<div class="loaderHookImage">
				
			</div>
			<div class="imageContainer">
				@if(count($images) > 0)
					@foreach($images as $image)
						<div class="col-sm-2 col-xs-6">
							<div class="thumbnail">
								<a href="javascript:" class="imageLink" data-id="{{ $image->id }}" data-location="{{ asset($image->thumbnail->location) }}" data-name="{{ $image->name }}">
									<img src="{{ asset($image->thumbnail->location) }}" title="{{ $image->name }}" class="img-responsive">
								</a>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="text-center"> 
			 {{ $images->links() }}
		</div>
	</div>
</div>
	