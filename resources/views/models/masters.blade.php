@push('css')
  <style>
    .modal { overflow-y: auto }
  </style>
@endpush 
 <!-- Edit Master -->
 @if(count($master)!=0)
   <div class="modal fade" id="editMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <h5 class="modal-title text-center" id="exampleModalLabel">Edit Master</h5>
           </div>
           <div class="modal-body"> 
             <div class="row">
               <div class="col-md-4">Course Name</div>
               <div class="col-md-8"> 
                 <div class="input-group">
                   <input type="text" placeholder="College Name" id="master_course_name" class="form-control" value="{{ $master[0]['course_name'] }}">
                   <input type="hidden" id="master_id" value="{{ $master[0]['id'] }}">
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
                     <input type="text" placeholder="College Name" id="master_college_name" class="form-control" value="{{ $master[0]['college'] }}">
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
                   <input type="text" placeholder="University" class="form-control" id="master_university_name" value="{{ $master[0]['university'] }}">
                   <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-university"></i></span>
                   </div>
                 </div>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">State</div>
               <div class="col-md-8"> 
                 <select class="form-control select2" style="width:100%" id="master_state">
                  @foreach ($states_stable as $state)
                    <option value='{{$state->id}}' @if($state->id==$master[0]['state']) 
                      {{'selected'}} 
                      @endif >{{$state->name}}</option>
                  @endforeach
                </select>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">Passing Year</div>
               <div class="col-md-8"> 
                <div class="input-group ui calendar" id="master_pass">
                  <input type="text" class="form-control" id="master_passing_year" placeholder="Passing Year" value="{{ $master[0]['passing_year'] }}">
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
                   <input type="text" placeholder="Percentage" class="form-control" id="master_percentage" value="{{ $master[0]['percentage'] }}">
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
                     <input type="date" placeholder="State" class="form-control" id="master_from" value="{{ $master[0]['from'] }}">
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
                       <input type="date" placeholder="State" class="form-control" id="master_to" value="{{ $master[0]['to'] }}">
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
                   <input type="text" placeholder="College Address" class="form-control" id="master_college_adrs" value="{{ $master[0]['college_address'] }}">
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
                     <input type="text" placeholder="Specialization" class="form-control" id="master_specialization" value="{{ $master[0]['specialization'] }}">
                     <div class="input-group-append">
                       <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                     </div>
                   </div>
                 </div>
               </div><br>
           </div>
           <div class="modal-footer">
             <div class="left-side">
               <button type="button" id="updateMaster" class="btn btn-default btn-link" data-dismiss="modal">Update</button>
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
 <div class="modal fade" id="addMaster" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title text-center" id="exampleModalLabel">Add Graduation</h5>
      </div>
      <div class="modal-body"> 
        <div class="row">
          <div class="col-md-4">Course Name</div>
          <div class="col-md-8"> 
            <div class="input-group">
              <input type="text" placeholder="Course Name" id="master_course_name" class="form-control" >
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
                <input type="text" placeholder="College Name" id="master_college_name" class="form-control">
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
              <input type="text" placeholder="University" class="form-control" id="master_university_name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-university"></i></span>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">State</div>
          <div class="col-md-8"> 
              <select class="form-control select2" style="width:100%" id="master_state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}'>{{$state->name}}</option>
                @endforeach
              </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">Passing Year</div>
          <div class="col-md-8"> 
           <div class="input-group ui calendar" id="master_pass">
             <input type="text" class="form-control" id="master_passing_year" placeholder="Passing Year" >
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
              <input type="text" placeholder="Percentage" class="form-control" id="master_percentage" >
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
                <input type="date" class="form-control" id="master_from" >
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
                  <input type="date" placeholder="State" class="form-control" id="master_to" >
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
              <input type="text" placeholder="College Address" class="form-control" id="master_college_adrs" >
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
                <input type="text" placeholder="Specialization" class="form-control" id="master_specialization" >
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                </div>
              </div>
            </div>
          </div><br>
      </div>
      <div class="modal-footer">
        <div class="left-side">
          <button type="button" id="saveMaster" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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
 <script>
 var master_percentage_old = $('#master_percentage').val();
//  console.log(master_percentage_old);
  $('#master_percentage').change(function(){
    var master_percentage = $('#master_percentage').val();
    console.log(master_percentage);
    if(master_percentage>100){
      $("#warning").modal('show');
      $('#master_percentage').val(master_percentage_old);
    }
  });
  </script>
 @endpush