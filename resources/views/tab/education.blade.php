<div class="tab-pane text-center" id="education" role="tabpanel">
    <h3 class="text-muted">Education</h3>
    <!-- Section Education -->
    <div class="section experience scrollspy" id="experience-section">
      <!-- Title -->
      <div class="row">
          <div class="col s12 m12 l12">
              {{-- <h5 class="grey-text text-darken-2 left-align">Education</h5> --}}
          </div>
      </div>
      <!-- Education Items Items -->
      <div class="row">
        <div class="col-md-6">
          <div class="card" data-color="orange" data-background="color">
            <div class="card-body text-center">
              <h3 class="card-category">
                {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                <i class='fa fa-book'></i> High School
              </h3>
              <h5 class="card-title">
                <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
              </h5>
              @if(count($high_school)!=0)
                <p class="card-description">
                    <table class="table table-hover info_table">
                      <tr>
                        <td>School Name</td>
                        <td><span id="school_updated"></span><span id="school_fresh">{{ $high_school[0]['school_name'] }}</span></td>
                      </tr>
                      <tr>
                          <td>Board</td>
                          <?php 
                          $board_id=$high_school[0]['board_name'];
                          $board=App\EducationBoards::where('id',$board_id)->get()->toArray();
                          ?>
                          
                          <td><span id="board_updated"></span><span id=
                            board_fresh>{{ $board[0]['board_name'] }}</span></td>
                      </tr>
                      <tr>
                          <td>State</td>
                          <?php 
                          $state_id=$high_school[0]['state'];
                          $state_name=App\State::where('id',$state_id)->get()->toArray();
                          ?>
                          <td><span id="state_updated"></span><span id="state_fresh">{{ $state_name[0]['name'] }}</span></td>
                      </tr>
                      <tr>
                        
                        <td>Percentage</td>
                        <td><span id="percentage_updated"></span><span id="percentage_fresh">{{ $high_school[0]['percentage'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Passing Year</td>
                        <td><span id="passing_year_updated"></span><span id="passing_year_fresh">{{ $high_school[0]['passing_year'] }}</span></td>
                      </tr>
                      <tr>
                        <td>School Address</td>
                        <td><span id="school_address_updated"></span><span id="school_address_fresh">{{ $high_school[0]['school_address'] }}</span></td>
                      </tr>
                    </table>
                </p>
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editHighSchool">
                      <i class="fa fa-edit"></i> Edit</button> 
                </div>
              @else
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addHighSchool">
                      <i class="fa fa-plus"></i> Add High School</button> 
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" data-color="purple" data-background="color">
            <div class="card-body text-center">
              <h3 class="card-category">
                {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                <i class='fa fa-book'></i> Intermediate
              </h3>
              <h5 class="card-title">
                <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
              </h5>
              @if(count($intermediate)!=0)
                <p class="card-description">
                    <table class="table table-hover info_table">
                      <tr>
                        <td>School Name</td>
                        <td><span id="inter_school_updated"></span><span id="inter_school_fresh">{{ $intermediate[0]['school_name'] }}</span></td>
                      </tr>
                      <tr>
                          <td>Board</td>
                          <?php 
                          $board_id=$intermediate[0]['board_name'];
                          $board=App\EducationBoards::where('id',$board_id)->get()->toArray();
                          ?>
                          
                          <td><span id="inter_board_updated"></span><span id=
                            board_fresh>{{ $board[0]['board_name'] }}</span></td>
                      </tr>
                      <tr>
                          <td>State</td>
                          <?php 
                          $state_id=$intermediate[0]['state'];
                          $state_name=App\State::where('id',$state_id)->get()->toArray();
                          ?>
                          <td><span id="inter_state_updated"></span><span id="inter_state_fresh">{{ $state_name[0]['name'] }}</span></td>
                      </tr>
                      <tr>
                        
                        <td>Percentage</td>
                        <td><span id="inter_percentage_updated"></span><span id="inter_percentage_fresh">{{ $intermediate[0]['percentage'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Passing Year</td>
                        <td><span id="inter_passing_year_updated"></span><span id="inter_passing_year_fresh">{{ $intermediate[0]['passing_year'] }}</span></td>
                      </tr>
                      <tr>
                        <td>School Address</td>
                        <td><span id="inter_school_address_updated"></span><span id="inter_school_address_fresh">{{ $intermediate[0]['school_address'] }}</span></td>
                      </tr>
                    </table>
                </p>
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editIntermediate">
                      <i class="fa fa-edit"></i> Edit</button> 
                </div>
              @else
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#addIntermediate"><i class="fa fa-plus"></i> Add Intermediate</button>
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>

      <!-- College Items -->
      <div class="row">
          <div class="col-md-6">
            <div class="card" data-color="purple" data-background="color">
              <div class="card-body text-center">
                <h3 class="card-category">
                  {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                  <i class='fa fa-graduation-cap'></i> Graduation
                </h3>
                <h5 class="card-title">
                  <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                </h5>
                @if(count($graduation)!=0)
                <p class="card-description">
                    <table class="table table-hover info_table">
                      <tr>
                        <td>Course Name</td>
                        <td><span id="master_course_updated"></span><span id="master_course_fresh">{{ $graduation[0]['course_name'] }}</span></td>
                      </tr>
                      <tr>
                        <td>College Name</td>
                        <td><span id="master_college_updated"></span><span id="master_college_fresh">{{ $graduation[0]['college'] }}</span></td>
                      </tr>
                      <tr>
                          <td>University</td>
                          <td><span id="master_university_updated"></span><span id="master_university_fresh">{{ $graduation[0]['university'] }}</span></td>
                      </tr>
                      <tr>
                          <?php 
                          $state_id=$graduation[0]['state'];
                          $state_name=App\State::where('id',$state_id)->get()->toArray();
                          ?>
                          <td>State</td>
                          <td><span id="master_state_updated"></span><span id="master_state_fresh">{{ $state_name[0]['name'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Percentage</td>
                        <td><span id="master_percentage_updated"></span><span id="master_percentage_fresh">{{ $graduation[0]['percentage'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Passing Year</td>
                        <td><span id="master_passing_year_updated"></span><span id="master_passing_year_fresh">{{ $graduation[0]['passing_year'] }}</span></td>
                      </tr>
                      <tr>
                        <td>From</td>
                        <td><span id="master_from_updated"></span><span id="master_from_fresh">{{ $graduation[0]['from'] }}</span></td>
                      </tr>
                      <tr>
                        <td>To</td>
                        <td><span id="master_to_updated"></span><span id="master_to_fresh">{{ $graduation[0]['to'] }}</span></td>
                      </tr>
                      <tr>
                        <td>College Address</td>
                        <td><span id="master_college_address_updated"></span><span id="master_college_address_fresh">{{ $graduation[0]['college_address'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Specialization</td>
                        <td><span id="master_specialization_updated"></span><span id="master_specialization_fresh">{{ $graduation[0]['specialization'] }}</span></td>
                      </tr>
                    </table>
                </p>
                <div class="card-footer text-center">
                  {{-- <a href="#pablo" rel="tooltip" title="Bookmark" class="btn btn-outline-neutral btn-round btn-just-icon"><i class="fa fa-bookmark-o"></i></a> --}}
                  {{-- <a href="#pablo" class="btn btn-neutral btn-round"><i class="fa fa-edit"></i> Edit</a> --}}
                  <button type="button" class="btn btn-round btn-info" data-toggle="modal" data-target="#editGraduation">
                      <i class="fa fa-edit"></i> Edit</button> 
                </div>
                @else
                  <div class="card-footer text-center">
                    <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addGraduation"><i class="fa fa-plus"></i>Add Graduation</button>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card" data-color="orange" data-background="color">
              <div class="card-body text-center">
                <h3 class="card-category">
                  {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                  <i class='fa fa-graduation-cap'></i> Graduation
                </h3>
                <h5 class="card-title">
                  <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                </h5>
                @if(count($master)!=0)
                <p class="card-description">
                    <table class="table table-hover info_table">
                      <tr>
                        <td>Course Name</td>
                        <td><span id="master_course_updated"></span><span id="master_course_fresh">{{ $master[0]['course_name'] }}</span></td>
                      </tr>
                      <tr>
                        <td>College Name</td>
                        <td><span id="master_college_updated"></span><span id="master_college_fresh">{{ $master[0]['college'] }}</span></td>
                      </tr>
                      <tr>
                          <td>University</td>
                          <td><span id="master_university_updated"></span><span id="master_university_fresh">{{ $master[0]['university'] }}</span></td>
                      </tr>
                      <tr>
                          <?php 
                          $state_id=$master[0]['state'];
                          $state_name=App\State::where('id',$state_id)->get()->toArray();
                          ?>
                          <td>State</td>
                          <td><span id="master_state_updated"></span><span id="master_state_fresh">{{ $state_name[0]['name'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Percentage</td>
                        <td><span id="master_percentage_updated"></span><span id="master_percentage_fresh">{{ $master[0]['percentage'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Passing Year</td>
                        <td><span id="master_passing_year_updated"></span><span id="master_passing_year_fresh">{{ $master[0]['passing_year'] }}</span></td>
                      </tr>
                      <tr>
                        <td>From</td>
                        <td><span id="master_from_updated"></span><span id="master_from_fresh">{{ $master[0]['from'] }}</span></td>
                      </tr>
                      <tr>
                        <td>To</td>
                        <td><span id="master_to_updated"></span><span id="master_to_fresh">{{ $master[0]['to'] }}</span></td>
                      </tr>
                      <tr>
                        <td>College Address</td>
                        <td><span id="master_college_address_updated"></span><span id="master_college_address_fresh">{{ $master[0]['college_address'] }}</span></td>
                      </tr>
                      <tr>
                        <td>Specialization</td>
                        <td><span id="master_specialization_updated"></span><span id="master_specialization_fresh">{{ $master[0]['specialization'] }}</span></td>
                      </tr>
                    </table>
                </p>
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editMaster">
                      <i class="fa fa-edit"></i> Edit</button> 
                </div>
                @else
                  <div class="card-footer text-center">
                    <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addMaster"><i class="fa fa-plus"></i>Add Master</button>
                  </div>
                @endif
              </div>
            </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="card" data-color="orange" data-background="color">
                <div class="card-body text-center">
                  <h3 class="card-category">
                    {{-- <i class="fa fa-dribbble" aria-hidden="true"></i> --}}
                    <i class='fa fa-graduation-cap'></i> Diploma
                  </h3>
                  <h5 class="card-title">
                    <a href="#pablo">"Good Design Is as Little Design as Possible"</a>
                  </h5>
                  @if(count($diploma)!=0)
                    <p class="card-description">
                        <table class="table table-hover info_table">
                            <tr>
                              <td>Course Name</td>
                              <td>{{ $diploma[0]['course_name'] }}</td>
                            </tr>
                            <tr>
                              <td>College Name</td>
                              <td>{{ $diploma[0]['college'] }}</td>
                            </tr>
                            <tr>
                                <td>University</td>
                                <td>{{ $diploma[0]['university'] }}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{ $diploma[0]['state'] }}</td>
                            </tr>
                            <tr>
                              <td>Percentage</td>
                              <td>{{ $diploma[0]['percentage'] }}</td>
                            </tr>
                            <tr>
                              <td>Passing Year</td>
                              <td>{{ $diploma[0]['passing_year'] }}</td>
                            </tr>
                            <tr>
                              <td>From</td>
                              <td>{{ $diploma[0]['from'] }}</td>
                            </tr>
                            <tr>
                              <td>To</td>
                              <td>{{ $diploma[0]['to'] }}</td>
                            </tr>
                            <tr>
                              <td>College Address</td>
                              <td>{{ $diploma[0]['college_address'] }}</td>
                            </tr>
                            <tr>
                              <td>Specialization</td>
                              <td>{{ $diploma[0]['specialization'] }}</td>
                            </tr>
                          </table>
                    </p>
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#editDiploma"><i class="fa fa-edit"></i> Edit Diploma</button>
                    </div>
                  @else
                    <div class="card-footer text-center">
                      <button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#addDiploma"><i class="fa fa-plus"></i>Add Diploma</button>
                    </div>
                  @endif
                </div>
              </div>
            </div>
              
      </div>
    </div>
  </div>