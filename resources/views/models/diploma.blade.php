  <!-- Edit Diploma -->
  @if(count($diploma)!=0)
    <div class="modal fade" id="editDiploma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Diploma</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" class="form-control" value="{{ $diploma[0]['course_name'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control" value="{{ $diploma[0]['college'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['university'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['state'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control" value="{{ $diploma[0]['passing_year'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" value="{{ $diploma[0]['percentage'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control" value="{{ $diploma[0]['from'] }}">
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
                        <input type="date" placeholder="State" class="form-control" value="{{ $diploma[0]['to'] }}">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control" value="{{ $diploma[0]['college_address'] }}">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control" value="{{ $diploma[0]['specialization'] }}">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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
    <!-- Add Diploma -->
    <div class="modal fade" id="addDiploma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add Diploma</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">Course Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Course Name" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">College Name</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="Board Name" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-university"></i></span>
                      </div>
                    </div>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">University</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-university"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="State" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Passing Year" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" class="form-control" >
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">From</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="date" placeholder="State" class="form-control">
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
                        <input type="date" placeholder="State" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div><br>
              <div class="row">
                <div class="col-md-4">College Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                  <div class="col-md-4">Specialization</div>
                  <div class="col-md-8"> 
                    <div class="input-group">
                      <input type="text" placeholder="State" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                      </div>
                    </div>
                  </div>
                </div><br>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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