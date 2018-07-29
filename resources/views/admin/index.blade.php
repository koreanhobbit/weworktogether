@extends('admin.layouts.navs')

@section('page_heading','Dashboard')

@section('section')
    <!-- /.row -->
    <div class="col-sm-12">
        <div class="row">
            <div class="col-lg-12">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Responsive Timeline')
                    @slot('panelBody')
                        @if($errors->has('message'))
                            <div class="alert alert-danger">
                                {{ 'Please check your response, It was failed to process!' }}
                            </div>
                        @endif
                        @if(count($messages) < 1)
                            <div class="alert alert-info">
                                <h1 class="text-center">There is no message!</h1>
                            </div>
                        @else
                            <ul class="timeline">
                                @foreach($messages as $key => $message)
                                    @if($key % 2 == 0)
                                        <li>
                                            <div class="timeline-badge"><a href="javascript:" data-toggle="modal" data-target="#modal{{ $message->id }}"><i class="fa {{ $message->messagedetail->status == 0 ? 'fa-envelope' : 'fa-check' }}"></i></a>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">{{ ucfirst($message->subject) }}</h4>
                                                    <p>
                                                        <small class="text-muted"><i class="fa fa-clock-o"></i> {{ $message->created_at->diffForHumans() }}
                                                        </small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body m-b-20">
                                                    <p>{{ ucfirst($message->message) }}</p>
                                                </div>
                                                <div class="timeline-heading">
                                                    <p>
                                                        <small class="text-muted"><i class="fa fa-user"></i>&nbsp;{{ ucfirst($message->name) }} 
                                                        </small>&nbsp;&nbsp;&nbsp;<span><small class="text-muted"><i class="fa fa-envelope"></i>&nbsp;{{ $message->email }}</small></span> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @elseif($key % 2 == 1) 
                                        <li class="timeline-inverted">
                                            <div class="timeline-badge"><a href="javascript:" data-toggle="modal" data-target="#modal{{ $message->id }}"><i class="fa {{ $message->messagedetail->status == 0 ? 'fa-envelope' : 'fa-check' }}"></i></a>
                                            </div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h4 class="timeline-title">{{ ucfirst($message->subject) }}</h4>
                                                    <p>
                                                        <small class="text-muted"><i class="fa fa-clock-o"></i> {{ $message->created_at->diffForHumans() }}
                                                        </small>
                                                    </p>
                                                </div>
                                                <div class="timeline-body m-b-20">
                                                    <p>{{ ucfirst($message->message) }}</p>
                                                </div>
                                                <div class="timeline-heading">
                                                    <p>
                                                        <small class="text-muted"><i class="fa fa-user"></i>&nbsp;{{ ucfirst($message->name) }} 
                                                        </small>&nbsp;&nbsp;&nbsp;<span><small class="text-muted"><i class="fa fa-envelope"></i>&nbsp;{{ $message->email }}</small></span> 
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-lg-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->
    
    @foreach($messages as $message)
        {{-- modal for replying message --}}
        <div class="home-modal modal fade" id="{{ 'modal' . $message->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <!-- Project Details Go Here -->
                                    @component('admin.widgets.panel')
                                        @slot('class', 'info')
                                        @slot('panelTitle', 'Response Message')
                                        @slot('panelBody')
                                            <form action="{{ route('response.update', ['contact' => $message->id]) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                                <div class="form-group">

                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="{{ $message->email }}" disabled>
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <input type="hidden" name="recipient" id="recipient" value="{{ $message->email }}">
                                                    </div>
                                                </div>
                                                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                                                    <div class="input-group">
                                                       <textarea name="message" id="message" class="form-control" rows="10" {{ $message->messagedetail->status == 1 ? 'disabled' : '' }} >{{ $message->messagedetail->status == 1 ? $message->messagedetail->response : old('message') }}</textarea>
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-comment"></i>
                                                        </div>
                                                    </div>
                                                    @if($errors->has('message'))
                                                        <div class="help-block">
                                                            <span>
                                                                <strong>
                                                                    {{ $errors->first('message') }}
                                                                </strong>
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $message->messagedetail->status == 1 ? 'hidden' : '' }} ">
                                                    <div class="pull-right">
                                                        <button type="submit" class="btn btn-sm btn-primary">Send Response</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @endslot
                                    @endcomponent
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection