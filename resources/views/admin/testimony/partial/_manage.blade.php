<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">Name</th>
			</tr>
		</thead>
		<tbody>
			@if(count($users) > 0)
				@foreach($users as $key => $user)
					<tr>
						<td class="text-center">{{ $key + 1 }}</td>
						<td class="text-center">
							<a href="{{ route('testimony.create', ['user' => $user->id]) }}">
								{{ $user->name }}
							</a>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
</div>
<div class="text-center">
	{{ $users->links() }}
</div>