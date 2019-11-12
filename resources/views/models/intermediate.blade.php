<!-- Edit Intermediate -->
  @if(count($intermediate)!=0)
  <div class="modal fade" id="editIntermediate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title text-center" id="exampleModalLabel">Add Intermediate Details</h5>
        </div>
        <div class="modal-body"> 
          <div class="row">
            <div class="col-md-4">School Name</div>
            <div class="col-md-8"> 
              <div class="input-group">
              <input type="text" placeholder="School Name" id="inter_school_name" class="form-control" value="{{ $intermediate[0]['school_name'] }}">
              <input type="hidden" id="intermediate_id" value="{{ $intermediate[0]['id'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-book"></i></span>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
          <div class="col-md-4">Board</div>
              <div class="col-md-8"> 
                <select class="form-control select2" style="width:100%" id="inter_board">
                  @foreach ($boards as $board)
                    <option value='{{$board->id}}' 
                      @if($board->id==$intermediate[0]['board_name']) 
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
              <select class="form-control select2" style="width:100%" id="inter_state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}' @if($state->id==$intermediate[0]['state']) 
                    {{'selected'}} 
                    @endif >{{$state->name}}</option>
                @endforeach
              </select>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4">Passing Year</div>
            <div class="col-md-8"> 
              <div class="input-group ui calendar" id="inter">
                <input type="text" class="form-control" id="inter_passing_year" placeholder="Passing Year" value="{{ $intermediate[0]['passing_year'] }}">
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
                <input type="number" placeholder="Percentage" id="inter_percentage" class="form-control" value="{{ $intermediate[0]['percentage'] }}">
                
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
                <input type="text" placeholder="School Address" id="inter_school_address" class="form-control" value="{{ $intermediate[0]['school_address'] }}">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="left-side">
            <button type="button" id="updateIntermediate" class="btn btn-default btn-link" data-dismiss="modal">Update</button>
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
    <div class="modal fade" id="addIntermediate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title text-center" id="exampleModalLabel">Add Intermediate Details</h5>
            </div>
            <div class="modal-body"> 
              <div class="row">
                <div class="col-md-4">School Name</div>
                <div class="col-md-8"> 
                  <div class="input-group">
                    <input type="text" placeholder="School Name" id="inter_school_name" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-4">Board</div>
                  <div class="col-md-8"> 
                    <select class="form-control select2" style="width:100%" id="inter_board">
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
                  <select class="form-control select2" style="width:100%" id="inter_state">
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
                  <div class="input-group ui calendar" id="inter">
                    {{-- <div class="ui calendar" id="example8" > --}}
                      {{-- <div class="ui input right icon"> --}}
                        {{-- <i class="calendar icon"></i> --}}
                        <input type="text" class="form-control" id="inter_passing_year" placeholder="Passing Year">
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
                    <input type="text" placeholder="Percentage" id="inter_percentage" class="form-control">
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
                    <input type="text" placeholder="School Address" id="inter_school_address" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="left-side">
                <button type="button" id="saveIntermediate" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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


