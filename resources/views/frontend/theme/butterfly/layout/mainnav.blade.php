<header id="header_outer">
	<div class="container">
		<div class="header_section">
			<div class="logo"><a href="javascript:void(0)"><img src="{{ asset('images/astrologo.png') }}" style="height:30px; width:150px;" alt=""></a></div>
			<nav class="nav" id="nav">
				<ul class="toggle">
					<li><a href="#top_content">Home</a></li>
					<li><a href="#work_outer">Business Model</a></li>
					<li><a href="#Portfolio">Project</a></li>
					<li><a href="#networks">Networks</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
					@if(auth()->check() && auth()->user()->roles->first()->name  != 'superadministrator' && auth()->user()->roles->first()->name  != 'administrator')
						<li><a href="{{ route('user.dashboard.index', ['user' => auth()->user()->id, 'name' => auth()->user()->name]) }}">Dashboard</a></li>
					@endif
					@role('superadministrator')
						<li><a href="{{ route('manage.index') }}">Dashboard</a></li>
					@endrole

					@role('administrator')
						<li><a href="{{ route('manage.index') }}">Dashboard</a></li>
					@endrole
				</ul>
				<ul class="">
					<li><a href="#top_content">Home</a></li>
					<li><a href="#work_outer">Business Model</a></li>
					<li><a href="#Portfolio">Project</a></li>	
					<li><a href="#networks">Networks</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#contact">Contact</a></li>
					@if(auth()->check() && auth()->user()->roles->first()->name  != 'superadministrator' && auth()->user()->roles->first()->name  != 'administrator')
						<li><a href="{{ route('user.dashboard.index', ['user' => auth()->user()->id, 'name' => auth()->user()->name]) }}">Dashboard</a></li>
					@endif
					@role('superadministrator')
						<li><a href="{{ route('manage.index') }}">Dashboard</a></li>
					@endrole

					@role('administrator')
						<li><a href="{{ route('manage.index') }}">Dashboard</a></li>
					@endrole
				</ul>
			</nav>
			<a class="res-nav_click" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </div>
	</div>
</header>