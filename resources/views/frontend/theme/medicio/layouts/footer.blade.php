<footer>
  <div class="container" id="about">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="wow fadeInDown" data-wow-delay="0.1s">
          <div class="widget">
            <h5>About</h5>
            <p class="text-justify">
              {{ strip_tags($setting->about) }}
            </p>
          </div>
        </div>
        <div class="wow fadeInDown" data-wow-delay="0.1s">
          <div class="widget">
            <h5>Information</h5>
            <ul>
              <li><a data-toggle="modal" data-target="#registermodal" style="cursor: pointer;">Signup to be a Local Guide/Provider</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & conditions</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="wow fadeInDown" data-wow-delay="0.1s">
          <div class="widget">
            <h5>{{ $setting->name }} Contact</h5>
            <p>
              For further information, contact our account representative.
            </p>
            <ul>
              <li>
                <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
						</span> Online, 24/7!
              </li>
              <li>
                <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
						</span> <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
              </li>
              <li>
                <span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
						</span>  <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="wow fadeInDown" data-wow-delay="0.1s">
          <div class="widget">
            <h5>Our location</h5>
            <p>{{ strip_tags($setting->address) }}</p>

          </div>
        </div>
        <div class="wow fadeInDown" data-wow-delay="0.1s">
          <div class="widget">
            <h5>Follow us</h5>
            <ul class="company-social">
              @foreach($setting->contacts as $contact)
                @if(!empty($contact->value))
                  <li class=" social-{{ $contact->slug }}"><a href="{{ $contact->domain . $contact->value }}" target="_blank" title="{{ $contact->name }}"><i class="fa {{ $contact->icon }}"></i></a></li>
                @endif
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="wow fadeInLeft" data-wow-delay="0.1s">
            <div class="text-left">
              <p>&copy;Copyright&nbsp; {{ date("Y") }} - {{ ucfirst($setting->name) }}. All rights reserved.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="wow fadeInRight" data-wow-delay="0.1s">
            <div class="text-right">
              <div class="credits">
                Powered by 
                <a href="https://www.astrowebstudio.com" target="_blank">Astroweb Studio</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>