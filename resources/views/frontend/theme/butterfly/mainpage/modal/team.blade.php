@if($setting->themesetting->menus()->where('name', 'team')->first()->show)
  @foreach($users as $key => $user)  
    @if($user->detail->display)  
      <div class="modal" id="{{ 'description' . $user->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="modal-title">{{ $user->name }}</h3>
            </div>
            <div class="modal-body">
              <div class="text-center m-b-30">
                <img src="{{ asset($user->images()->wherePivot('option', 1)->first()->thumbnail->location) }}" alt="" class="m-b-25" style="border-radius: 50%;">
                  <h3>{{ $user->detail->title }}</h3>
              </div>
              <div class="text-justify">
                @if(!empty($user->detail->location))
                  <div class="form-group">
                    <label for="">Location:</label>
                    <p>{{ $user->detail->location }}</p>
                  </div>
                @endif
                @if(!empty($user->detail->education))
                  <div class="form-group">
                    <label for="">Education Background:</label>
                    <p>{{ $user->detail->education }}</p>
                  </div>
                @endif
                @if(!empty($user->detail->experience))
                  <div class="form-group">
                    <label for="">Working Experiences:</label>
                    <p>{{ $user->detail->experience }}</p>
                  </div>
                @endif
                @if(!empty($user->detail->description))
                  <div class="form-group">
                    <label for="">Description:</label>
                    <p>{{ $user->detail->description }}</p>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    @endif
  @endforeach
@endif