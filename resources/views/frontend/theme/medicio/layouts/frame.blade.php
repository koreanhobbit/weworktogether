@extends('frontend.theme.medicio.layouts.master')

@section('body')
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">{{ Auth::check() ? 'Hi, ' . ucfirst(Auth::user()->name) : $setting->tagline }}</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">
                @if(!Auth::check())
                  <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#loginmodal">Log in</a>
                  <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#registermodal">Sign Up</a>
                @endif
                @if(Auth::check())
                  @if(Auth::user()->hasRole('superadministrator'))
                    <a href="{{ route('manage.index') }}" class="btn btn-sm btn-primary">Dashboard</a>  
                  @elseif(Auth::user()->hasRole('customer'))
                    <a href="{{ route('customer.dashboard.index', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}" class="btn btn-sm btn-primary">Dashboard</a>  
                  @else
                  <form action="{{ route('logout') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-sm btn-primary">Log out</button>
                  </form>
                  @endif
                @endif
              </p>
            </div>
          </div>
        </div>
      </div>
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
            <li class="active"><a href="#intro">Home</a></li>
            <li><a href="#procedure">Procedure</a></li>
            <li><a href="#callaction">Service</a></li>
            {{-- <li><a href="#tour">Tour</a></li> --}}
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#partner">Partner</a></li>
            <li><a href="#about">About Us</a></li>
            {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home CTA</a></li>
                <li><a href="index-form.html">Home Form</a></li>
                <li><a href="index-video.html">Home video</a></li>
              </ul>
            </li> --}}
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    @yield('section')
    @include('frontend.theme.medicio.layouts.footer')
    {{-- INCLUDE MODALS --}}
    @yield('modals')
@endsection