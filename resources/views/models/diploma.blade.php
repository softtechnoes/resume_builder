@push('css')
  <style>
    .modal { overflow-y: auto }
  </style>
@endpush 
 <!-- Edit Master -->
 @if(count($diploma)!=0)
   <div class="modal fade" id="editDiploma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <h5 class="modal-title text-center" id="exampleModalLabel">Edit Diploma</h5>
           </div>
           <div class="modal-body"> 
             <div class="row">
               <div class="col-md-4">Course Name</div>
               <div class="col-md-8"> 
                 <div class="input-group">
                   <input type="text" placeholder="College Name" id="diploma_course_name" class="form-control" value="{{ $diploma[0]['course_name'] }}">
                   <input type="hidden" id="diploma_id" value="{{ $diploma[0]['id'] }}">
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
                     <input type="text" placeholder="College Name" id="diploma_college_name" class="form-control" value="{{ $diploma[0]['college'] }}">
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
                   <input type="text" placeholder="University" class="form-control" id="diploma_university_name" value="{{ $diploma[0]['university'] }}">
                   <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-university"></i></span>
                   </div>
                 </div>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">State</div>
               <div class="col-md-8"> 
                 <select class="form-control select2" style="width:100%" id="diploma_state">
                  @foreach ($states_stable as $state)
                    <option value='{{$state->id}}' @if($state->id==$diploma[0]['state']) 
                      {{'selected'}} 
                      @endif >{{$state->name}}</option>
                  @endforeach
                </select>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">Passing Year</div>
               <div class="col-md-8"> 
                <div class="input-group ui calendar" id="diploma_pass">
                  <input type="text" class="form-control" id="diploma_passing_year" placeholder="Passing Year" value="{{ $diploma[0]['passing_year'] }}">
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
                   <input type="text" placeholder="Percentage" class="form-control" id="diploma_percentage" value="{{ $diploma[0]['percentage'] }}">
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
                     <input type="date" placeholder="State" class="form-control" id="diploma_from" value="{{ $diploma[0]['from'] }}">
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
                       <input type="date" placeholder="State" class="form-control" id="diploma_to" value="{{ $diploma[0]['to'] }}">
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
                   <input type="text" placeholder="College Address" class="form-control" id="diploma_college_adrs" value="{{ $diploma[0]['college_address'] }}">
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
                     <input type="text" placeholder="Specialization" class="form-control" id="diploma_specialization" value="{{ $diploma[0]['specialization'] }}">
                     <div class="input-group-append">
                       <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                     </div>
                   </div>
                 </div>
               </div><br>
           </div>
           <div class="modal-footer">
             <div class="left-side">
               <button type="button" id="updateDiploma" class="btn btn-default btn-link" data-dismiss="modal">Update</button>
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
              <input type="text" placeholder="Course Name" id="diploma_course_name" class="form-control" >
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
                <input type="text" placeholder="College Name" id="diploma_college_name" class="form-control">
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
              <input type="text" placeholder="University" class="form-control" id="diploma_university_name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-university"></i></span>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">State</div>
          <div class="col-md-8"> 
              <select class="form-control select2" style="width:100%" id="diploma_state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}'>{{$state->name}}</option>
                @endforeach
              </select>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">Passing Year</div>
          <div class="col-md-8"> 
           <div class="input-group ui calendar" id="diploma_pass">
             <input type="text" class="form-control" id="diploma_passing_year" placeholder="Passing Year" >
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
              <input type="text" placeholder="Percentage" class="form-control" id="diploma_percentage" >
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
          <div class="col-md-4">College Address</div>
          <div class="col-md-8"> 
            <div class="input-group">
              <input type="text" placeholder="College Address" class="form-control" id="diploma_college_adrs" >
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
                <input type="text" placeholder="Specialization" class="form-control" id="diploma_specialization" >
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                </div>
              </div>
            </div>
          </div><br>
      </div>
      <div class="modal-footer">
        <div class="left-side">
          <button type="button" id="saveDiploma" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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
 var diploma_percentage_old = $('#diploma_percentage').val();
//  console.log(diploma_percentage_old);
  $('#diploma_percentage').change(function(){
    var diploma_percentage = $('#diploma_percentage').val();
    console.log(diploma_percentage);
    if(diploma_percentage>100){
      $("#warning").modal('show');
      $('#diploma_percentage').val(diploma_percentage_old);
    }
  });
  </script>
 @endpush