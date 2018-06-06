@extends('frontend.theme.medicio.layouts.master')

@section('body')
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container navigation">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="{{ route('mainpage.index') }}">
                    <img src="{{ !empty($setting->logoImage()) ? asset($setting->logoImage()->location) : asset('images/astrologo.png') }}" title="{{ !empty($setting->logoImage()) ? $setting->logoImage()->name : 'Astro Logo' }}" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('mainpage.index') }}">Home</a></li>
            <li class="active"><a href="#other">@yield('otherpage_title')</a></li>
            <li><a href="#about">About Us</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    @yield('section')
    @include('frontend.theme.medicio.layouts.footer')
@endsection