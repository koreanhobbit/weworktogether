@extends('frontend.theme.butterfly.layout.frame')

@section('section')
	<!--Top_content-->
		@include('frontend.theme.butterfly.mainpage.section.topsection')
	<!--Top_content-->
	
	<!--Service-->
		@include('frontend.theme.butterfly.mainpage.section.service')
	<!--Service-->

	{{-- work --}}
		@include('frontend.theme.butterfly.mainpage.section.work')
	{{-- endwork --}}

	<!-- Portfolio -->
		@include('frontend.theme.butterfly.mainpage.section.portfolio')
	<!--/Portfolio -->
	{{-- partner --}}
		@include('frontend.theme.butterfly.mainpage.section.partner')
	{{-- endpartner --}}
	{{-- logo --}}
		@include('frontend.theme.butterfly.mainpage.section.logo')
	{{-- endlogo --}}
	{{-- team --}}
		@include('frontend.theme.butterfly.mainpage.section.team')
	{{-- endteam --}}
	{{-- twitter feed --}}
		@include('frontend.theme.butterfly.mainpage.section.feed')
	{{-- end twitter feed --}}

	{{-- contact --}}
		@include('frontend.theme.butterfly.mainpage.section.contact')
	{{-- endcontact --}}

	{{-- modal --}}
		@include('frontend.theme.butterfly.mainpage.modal.businessmodel')
	{{-- endmodal --}}

	{{-- modal for team members --}}
		@include('frontend.theme.butterfly.mainpage.modal.team')
	{{-- endmodal --}}

	{{-- modal for portfolio --}}
		@foreach($projects as $project)
			@include('frontend.theme.butterfly.mainpage.modal.portfolio')
		@endforeach
	{{-- end of modal for portfolio --}}
@endsection

@section('script')
	@include('frontend.theme.butterfly.mainpage.script._index')
@endsection