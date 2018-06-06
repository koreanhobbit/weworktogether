@if($testimonyController == 1)
  <div class="row">
    <div class="testimony">
      @foreach($testimonies as $testimony)
      <div class="carousel-reviews broun-block">
        <div class="carousel-inner">
          <div class="p-l-20 p-r-20">
          <div class="block-text rel zmin">
            <small>{{ ucfirst($testimony->user->name) }}</small>
            <div class="mark"><span class="rating-input">
              @for($i=1; $i <= $testimony->rating; $i++)
                <span class="fa fa-star checked"></span>
              @endfor
              @for($i=1; $i <= 5-$testimony->rating; $i++)
                <span class="fa fa-star"></span>
              @endfor
            </span>
            </div>
            <blockquote class="blockquote" style="min-height: 200px;">
              <p>{{ ucfirst($testimony->testimony) }}</p>
            </blockquote>
            <ins class="ab zmin sprite sprite-i-triangle block"></ins>
          </div>
          <div class="person-text rel text-light">  
            <img src="{{ empty($testimony->user->images()->wherePivot('option', 1)->first()) ? asset('images/noimg_thumbnail.png') : $testimony->user->images()->wherePivot('option', 1)->first()->location }}" alt="" class="person img-circle" />
          </div>
        </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>  
@else
  <div class="row {{ count($testimonies) > 0 ? 'hidden' : '' }}">
    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
              <small>Lisa Rahayu</small>
              <div class="mark">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <blockquote class="blockquote">
                <p>Awesome services!!! With profesional local guide made us really comfortable during our visit. Good Job!</p>
              </blockquote>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel text-light">
              <img src="{{ asset('images/testimony/images/lisa.jpg') }}" alt="" class="person img-circle" />
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
              <small>Mia Sukma</small>
              <div class="mark">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <blockquote class="blockquote" style="min-height: 200px;">
                <p>Recommended!! Service keren ga mengecewakan. Jalan-jalan keluar negeri kudu pake service linkednomad.com !!!</p>
              </blockquote>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel text-light">
              <img src="{{ asset('images/testimony/images/desi.jpg') }}" alt="" class="person img-circle" />
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
              <small>Desi Novianti</small>
              <div class="mark">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <blockquote class="blockquote" style="min-height: 200px;">
                <p>Lovely People! Amazing Services! Your guys are the best!</p>
              </blockquote>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel text-light">
              <img src="{{ asset('images/testimony/images/mia.jpg') }}" alt="" class="person img-circle" />
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-md-4 col-sm-6">
            <div class="block-text rel zmin">
              <small>Dedi Wijaya</small>
              <div class="mark">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
              </div>
              <blockquote class="blockquote" style="min-height: 200px;">
                <p>Thanks for your help!! I had an amazing trip because of your guys!!</p>
              </blockquote>
              <ins class="ab zmin sprite sprite-i-triangle block"></ins>
            </div>
            <div class="person-text rel text-light">
              <img src="{{ asset('images/testimony/images/dedi.jpg') }}" alt="" class="person img-circle" />
            </div>
          </div>
        </div>


      </div>

      <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
      <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
  </div>
@endif