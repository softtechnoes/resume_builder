  <!-- Edit High School -->
  @if(count($high_school)!=0)
  <div class="modal fade" id="editHighSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title text-center" id="exampleModalLabel">Add High School Details</h5>
        </div>
        <div class="modal-body"> 
          <div class="row">
            <div class="col-md-4">School Name</div>
            <div class="col-md-8"> 
              <div class="input-group">
              <input type="text" placeholder="School Name" id="school_name" class="form-control" value="{{ $high_school[0]['school_name'] }}">
              <input type="hidden" id="high_school_id" value="{{ $high_school[0]['id'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-book"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
          <div class="col-md-4">Board</div>
              <div class="col-md-8"> 
                <select class="form-control select2" style="width:100%" id="board">
                  @foreach ($boards as $board)
                    <option value='{{$board->id}}' 
                      @if($board->id==$high_school[0]['board_name']) 
                      {{'selected'}} 
                      @endif 
                      >{{$board->board_name}}</option>
                  @endforeach
                </select>
              </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">State</div>
            <div class="col-md-8"> 
              <select class="form-control select2" style="width:100%" id="state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}' @if($state->id==$high_school[0]['state']) 
                    {{'selected'}} 
                    @endif >{{$state->name}}</option>
                @endforeach
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">Passing Year</div>
            <div class="col-md-8"> 
              <div class="input-group ui calendar" id="example8">
                <input type="text" class="form-control" id="passing_year" placeholder="Passing Year" value="{{ $high_school[0]['passing_year'] }}">
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
                <input type="number" placeholder="Percentage" id="percentage" class="form-control" value="{{ $high_school[0]['percentage'] }}">
                
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-percent"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">School Address</div>
            <div class="col-md-8"> 
              <div class="input-group">
                <input type="text" placeholder="School Address" id="school_address" class="form-control" value="{{ $high_school[0]['school_address'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="left-side">
            <button type="button" id="updateHighSchool" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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
    <div class="modal fade" id="addHighSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add High School Details</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">School Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" id="school_name" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Board</div>
                  <div class="col-md-8"> 
                    <select class="form-control select2" style="width:100%" id="board">
                      <option>Select Board</option>
                      @foreach ($boards as $board)
                        <option value='{{$board->id}}'>{{$board->board_name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">State</div>
                <div class="col-md-8"> 
                  <select class="form-control select2" style="width:100%" id="state">
                    <option selected>Select State</option>
                    @foreach ($states_stable as $state)
                      <option value='{{$state->id}}'>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Passing Year</div>
                <div class="col-md-8"> 
                  <div class="input-group ui calendar" id="example8">
                    {{-- <div class="ui calendar" id="example8" > --}}
                      {{-- <div class="ui input right icon"> --}}
                        {{-- <i class="calendar icon"></i> --}}
                        <input type="text" class="form-control" id="passing_year" placeholder="Passing Year">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                      {{-- </div> --}}
                    {{-- </div> --}}
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Percentage</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="Percentage" id="percentage" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-percent"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">School Address</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Address" id="school_address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" id="saveHighSchool" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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
