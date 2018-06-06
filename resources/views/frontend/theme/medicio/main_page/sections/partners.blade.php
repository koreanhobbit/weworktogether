@if($partnerController == 1)
  @if(count($setting->partners) > 0)
    <div class="row">
      @foreach($setting->partners as $partner)
        <div class="col-sm-6 col-md-3">
          <div class="partner">
            <img src="{{ asset($partner->images()->wherePivot('option', 1)->first()->medium->location) }}" alt="{{ $partner->images()->wherePivot('option', 1)->first()->name }}" style="width:250px; height:100px" />
          </div>
        </div>     
      @endforeach
    </div>
  @endif
@else
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="partner">
      <img src="{{ asset('images/partner/astrologo.png') }}" alt="" style="width:250px; height:100px"/>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="partner">
      <img src="{{ asset('images/partner/sgsc.png') }}" alt="" style="width:250px; height:100px"/>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="partner">
      <img src="{{ asset('images/partner/sgc.png') }}" alt="" style="width:250px; height:100px"/>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="partner">
      <img src="{{ asset('images/partner/babastudio.png') }}" alt="" style="width:250px; height:100px"/>
    </div>
  </div>
</div>
@endif