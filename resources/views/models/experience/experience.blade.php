@push('css')
  <style>
    .modal { overflow-y: auto }
  </style>
@endpush 
<!-- Edit Experience -->
@if($experience->count()!=0)
    <div class="modal fade" id="editExperienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="text" placeholder="Company Name" id="diploma_course_name" class="form-control" >
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
                            <input type="text" placeholder="Role" id="diploma_college_name" class="form-control">
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
                        <input type="text" placeholder="City" class="form-control" id="diploma_university_name">
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
                            <input type="text" placeholder="Sallery" class="form-control" id="diploma_university_name">
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
                            <input type="date" class="form-control" id="diploma_from" >
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
                            <input type="date" placeholder="State" class="form-control" id="diploma_to" >
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
                                    <textarea id="" class="form-control" placeholder="Description will be gone here......"></textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-laptop"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                </div>
                <div class="modal-footer">
                    <div class="left-side">
                    <button type="button" id="UpdateExperience" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @else
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
                    <input type="text" placeholder="Company Name" id="diploma_course_name" class="form-control" >
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
                        <input type="text" placeholder="Role" id="diploma_college_name" class="form-control">
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
                    <input type="text" placeholder="City" class="form-control" id="diploma_university_name">
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
                        <input type="text" placeholder="Sallery" class="form-control" id="diploma_university_name">
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
                        <input type="date" class="form-control" id="diploma_from" >
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
                        <input type="date" placeholder="State" class="form-control" id="diploma_to" >
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
                                <textarea id="" class="form-control" placeholder="Description will be gone here......"></textarea>
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
 @endif
 @push('scripts')

 @endpush