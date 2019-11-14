@push('css')
  <style>
    .modal { overflow-y: auto }
  </style>
@endpush 
<!-- Edit Experience -->
@if($experience->count()!=0)
@foreach ($experience as $expe)
<input type="hidden" value="{{$expe->id}}" id="exp_id">
    <div class="modal fade" id="editExperienceModal_{{$expe->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title text-center" id="exampleModalLabel">Edit Experience</h5>
                </div>
                <div class="modal-body"> 
                    <div class="row">
                    <div class="col-md-4">Company Name</div>
                    <div class="col-md-8"> 
                        <div class="input-group">
                            <input type="text" placeholder="Company Name" id="company_name_{{$expe->id}}" value="{{$expe->company}}" class="form-control" >
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                            </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="row">
                    <div class="col-md-4">Role</div>
                        <div class="col-md-8"> 
                        <div class="input-group">
                            <input type="text" placeholder="Role" id="role_{{$expe->id}}" value="{{$expe->role}}" class="form-control">
                            <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                        </div>
                        </div>
                    </div><br>
                    <div class="row">
                    <div class="col-md-4">City</div>
                    <div class="col-md-8"> 
                        <div class="input-group">
                        <input type="text" placeholder="City" class="form-control" id="city_{{$expe->id}}" value="{{$expe->city}}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                        </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">Sallery</div>
                        <div class="col-md-8"> 
                            <div class="input-group">
                            <input type="text" placeholder="Sallery" class="form-control" id="sallery_{{$expe->id}}" value="{{$expe->sallery}}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-inr"></i></span>
                            </div>
                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">From</div>
                        <div class="col-md-8"> 
                        <div class="input-group">
                            <input type="date" class="form-control" id="from_{{$expe->id}}"  value="{{$expe->from}}">
                            <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">To</div>
                        <div class="col-md-8"> 
                            <div class="input-group">
                            <input type="date" placeholder="State" class="form-control" id="to_{{$expe->id}}"  value="{{$expe->to}}">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                            </div>
                            </div>
                        </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-4">Description (Optional)</div>
                            <div class="col-md-8"> 
                                <div class="input-group">
                                    <textarea class="form-control" id="description_{{$expe->id}}" placeholder="Description will be gone here..." >{{$expe->description}}</textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" id="UpdateExperience_{{$expe->id}}" data-dismiss="modal">Save</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    
@endif
 <div class="modal fade" id="experienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title text-center" id="exampleModalLabel">Add Experience</h5>
            </div>
            <div class="modal-body"> 
                <div class="row">
                <div class="col-md-4">Company Name</div>
                <div class="col-md-8"> 
                    <div class="input-group">
                    <input type="text" placeholder="Company Name" id="company_name" class="form-control" >
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                    </div>
                    </div>
                </div>
                </div><br>
                <div class="row">
                <div class="col-md-4">Role</div>
                    <div class="col-md-8"> 
                    <div class="input-group">
                        <input type="text" placeholder="Role" id="exp_role" class="form-control">
                        <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                    </div>
                    </div>
                </div><br>
                <div class="row">
                <div class="col-md-4">City</div>
                <div class="col-md-8"> 
                    <div class="input-group">
                    <input type="text" placeholder="City" class="form-control" id="exp_city">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                    </div>
                    </div>
                </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">Sallery</div>
                    <div class="col-md-8"> 
                        <div class="input-group">
                        <input type="text" placeholder="Sallery" class="form-control" id="exp_sallery">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-inr"></i></span>
                        </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">From</div>
                    <div class="col-md-8"> 
                    <div class="input-group">
                        <input type="date" class="form-control" id="from" >
                        <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-4">To</div>
                    <div class="col-md-8"> 
                        <div class="input-group">
                        <input type="date" placeholder="State" class="form-control" id="to" >
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        </div>
                    </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">Description (Optional)</div>
                        <div class="col-md-8"> 
                            <div class="input-group">
                                <textarea class="form-control" id="exp_description" placeholder="Description will be gone here......"></textarea>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                </div>
                            </div>
                        </div>
                    </div><br>
            </div>
            <div class="modal-footer">
                <div class="left-side">
                <button type="button" id="saveExperience" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

 @push('scripts')

 @endpush