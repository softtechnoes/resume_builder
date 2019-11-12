 <!-- Edit Graduation -->
 @if(count($graduation)!=0)
   <div class="modal fade" id="editGraduation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <h5 class="modal-title text-center" id="exampleModalLabel">Edit Graduation</h5>
           </div>
           <div class="modal-body"> 
             <div class="row">
               <div class="col-md-4">Course Name</div>
               <div class="col-md-8"> 
                 <div class="input-group">
                   <input type="text" placeholder="College Name" id="grad_course_name" class="form-control" value="{{ $graduation[0]['course_name'] }}">
                   <input type="hidden" id="grad_id" value="{{ $graduation[0]['id'] }}">
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
                     <input type="text" placeholder="College Name" id="grad_college_name" class="form-control" value="{{ $graduation[0]['college'] }}">
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
                   <input type="text" placeholder="University" class="form-control" id="grad_university_name" value="{{ $graduation[0]['university'] }}">
                   <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-university"></i></span>
                   </div>
                 </div>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">State</div>
               <div class="col-md-8"> 
                 {{-- <div class="input-group">
                   <input type="text" placeholder="State" class="form-control" id="grad_state" value="{{ $graduation[0]['state'] }}">
                   <div class="input-group-append">
                     <span class="input-group-text"><i class="fa fa-map"></i></span>
                   </div>
                 </div> --}}
                 <select class="form-control select2" style="width:100%" id="grad_state">
                  @foreach ($states_stable as $state)
                    <option value='{{$state->id}}' @if($state->id==$graduation[0]['state']) 
                      {{'selected'}} 
                      @endif >{{$state->name}}</option>
                  @endforeach
                </select>
               </div>
             </div><br>
             <div class="row">
               <div class="col-md-4">Passing Year</div>
               <div class="col-md-8"> 
                <div class="input-group ui calendar" id="grad_pass">
                  <input type="text" class="form-control" id="grad_passing_year" placeholder="Passing Year" value="{{ $graduation[0]['passing_year'] }}">
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
                   <input type="text" placeholder="Percentage" class="form-control" id="grad_percentage" value="{{ $graduation[0]['percentage'] }}">
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
                     <input type="date" placeholder="State" class="form-control" id="grad_from" value="{{ $graduation[0]['from'] }}">
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
                       <input type="date" placeholder="State" class="form-control" id="grad_to" value="{{ $graduation[0]['to'] }}">
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
                   <input type="text" placeholder="College Address" class="form-control" id="grad_college_adrs" value="{{ $graduation[0]['college_address'] }}">
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
                     <input type="text" placeholder="Specialization" class="form-control" id="grad_specialization" value="{{ $graduation[0]['specialization'] }}">
                     <div class="input-group-append">
                       <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                     </div>
                   </div>
                 </div>
               </div><br>
           </div>
           <div class="modal-footer">
             <div class="left-side">
               <button type="button" id="updateGraduation" class="btn btn-default btn-link" data-dismiss="modal">Update</button>
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
 <div class="modal fade" id="addGraduation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input type="text" placeholder="Course Name" id="grad_course_name" class="form-control" >
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
                <input type="text" placeholder="College Name" id="grad_college_name" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-university"></i></span>
                </div>
              </div>
              {{-- <select class="form-control select2" style="width:100%" id="grad_college_name">
                <option>Select College</option>
                @foreach ($colleges as $college)
                  <option value='{{$college->id}}'>{{$college->college_name}}</option>
                @endforeach
              </select> --}}
            </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">University</div>
          <div class="col-md-8"> 
            <div class="input-group">
              <input type="text" placeholder="University" class="form-control" id="grad_university_name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-university"></i></span>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">State</div>
          <div class="col-md-8"> 
              <select class="form-control select2" style="width:100%" id="grad_state">
                @foreach ($states_stable as $state)
                  <option value='{{$state->id}}'>{{$state->name}}</option>
                @endforeach
              </select>
            {{-- <div class="input-group">
              <input type="text" placeholder="State" class="form-control" id="grad_state" >
              <div class="input-group-append">
                <span class="input-group-text"><i class="fa fa-map"></i></span>
              </div>
            </div> --}}
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4">Passing Year</div>
          <div class="col-md-8"> 
           <div class="input-group ui calendar" id="grad_pass">
             <input type="text" class="form-control" id="grad_passing_year" placeholder="Passing Year" >
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
              <input type="text" placeholder="Percentage" class="form-control" id="grad_percentage" >
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
                <input type="date" class="form-control" id="grad_from" >
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
                  <input type="date" placeholder="State" class="form-control" id="grad_to" >
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
              <input type="text" placeholder="College Address" class="form-control" id="grad_college_adrs" >
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
                <input type="text" placeholder="Specialization" class="form-control" id="grad_specialization" >
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                </div>
              </div>
            </div>
          </div><br>
      </div>
      <div class="modal-footer">
        <div class="left-side">
          <button type="button" id="saveGraduation" class="btn btn-default btn-link" data-dismiss="modal">Save</button>
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