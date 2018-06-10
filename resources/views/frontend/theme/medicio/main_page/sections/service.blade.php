<div class="row">
  <div class="col-sm-6 hidden-xs">
    <div class="wow fadeInUp" data-wow-delay="0.2s">
      <img src="{{ asset('frontend/medicio/img/product/img-1.png') }}" class="img-responsive img-service" alt="" />
    </div>
  </div>
  <div class="col-sm-6">
    @foreach($services as $key => $service)
      @if($key % 2 == 0)
        <div class="row">
      @endif
        <div class="col-sm-6 col-md-6">
          <div class="wow fadeInRight" data-wow-delay="0.1s">
            <div class="service-box">
              <div class="row">
                <div class="col-sm-3">
                  <div class="service-icon">
                    <span class="fa fa-{{ $service->icon }} fa-3x"></span>
                  </div>  
                </div>
                <div class="col-xs-9">
                  <div class="service-desc">
                    <h5 class="h-light">{{ $service->name }}</h5>
                    <p>{{ $service->short_desc }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @if($key % 2 == 1)  
        </div>
      @endif
    @endforeach
  </div>
</div>