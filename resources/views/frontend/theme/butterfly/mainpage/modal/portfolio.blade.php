<!-- Portfolio Modal -->
<div class="home-modal modal fade" id="modal-{{ $project->slug }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>{{ ucfirst($project->name) }}</h2>
                            <br>
                            <br>
                            <br>
                            <div class="row">
                                {!! $project->description !!}
                            </div>
                                                        
                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>