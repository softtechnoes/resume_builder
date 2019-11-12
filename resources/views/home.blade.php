@extends('master')
@section('title')
{{Auth::user()->name}}
@stop

@section('content')
  @push('css')
    <style>
      input[type=number]::-webkit-inner-spin-button, 
      input[type=number]::-webkit-outer-spin-button { 
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          margin: 0; 
      }
    </style>
    <style>
      
      </style>
  @endpush
    <div class="page-header page-header-small" style="background-image: url('../assets/img/sections/rodrigo-ardilha.jpg');">
      <div class="filter"></div>
    </div>
    <div class="wrapper">
      <div class="profile-content section">
        <div class="container">
          <div class="row">
            <div class="profile-picture">
              <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new img-no-padding">
                  <img src="../assets/img/faces/joe-gardner-2.jpg" alt="...">
                </div>
                <div class="name">
                  <h4 class="title text-center">{{Auth::user()->name}}
                    <br />
                    <small>{{Auth::user()->job}}</small>
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
              <p>{!! Auth::user()->about !!} </p>
              <br />
              <button class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</button>
              <button class="btn btn-outline-default btn-round" id="start"><i class="fa fa-cog"></i> start</button>
            </div>
          </div>
          <br/>
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#about" role="tab">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#education" role="tab">Education</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#skills" role="tab">Skills</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#experience" role="tab">Experience</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content">
            @include('tab.profile')
            @include('tab.about')
            @include('tab.education')
            @include('tab.skills')
            @include('tab.experience')
          </div>
        </div>
      </div>
    </div>
    @include('models.highSchool')
    @include('models.intermediate')
    @include('models.graduation')
    @include('models.masters')
    @include('models.warning')
    @include('models.success')
@endsection

@push('scripts')
  @include('scripts.highSchool')
  @include('scripts.intermediate')
  @include('scripts.graduation')
  @include('scripts.masters')
  <script>
      $("#addAbout").click(function(){
        var about = $("#about").val();
        console.log(about);
        $.ajaxSetup({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
    
        $.ajax({
          type:"GET",
          url:"{{url('add-about')}}",
          data:{
            'about': about,
          }, 
        
          success:function(res){ 
            $("#descriptionModal").hide();
          }
        });
      }); 
  </script>
  <script>
  $("#editAbout").click(function(){
      $('#descriptionModal').show();
  });
  $("#editAboutClose").click(function(){
      $('#descriptionModal').hide();
  });
  $("#addAboutModal").click(function(){
      $('#userinfoModal').show();
  });
  $("#addaboutModalClose").click(function(){
      $('#userinfoModal').hide();
  });
  $("#addProffessionalSkill").click(function(){
      $('#professionalSkill').show();
  });
  $("#addProffessionalSkillClose").click(function(){
      $('#professionalSkill').hide();
  });

  var percentage_old = $('#percentage').val();
  $('#percentage').change(function(){
    var percentage = $('#percentage').val();
    console.log(percentage);
    if(percentage>100){
      $("#warning").modal('show');
      $('#percentage').val(percentage_old);
  }
  });
  </script>

  <script>
  if (location.hash) {
  $('a[href=\'' + location.hash + '\']').tab('show');
}
var activeTab = localStorage.getItem('activeTab');
if (activeTab) {
  $('a[href="' + activeTab + '"]').tab('show');
}

$('body').on('click', 'a[data-toggle=\'tab\']', function (e) {
  e.preventDefault()
  var tab_name = this.getAttribute('href')
  if (history.pushState) {
    history.pushState(null, null, tab_name)
  }
  else {
    location.hash = tab_name
  }
  localStorage.setItem('activeTab', tab_name)

  $(this).tab('show');
  return false;
});
$(window).on('popstate', function () {
  var anchor = location.hash ||
    $('a[data-toggle=\'tab\']').first().attr('href');
  $('a[href=\'' + anchor + '\']').tab('show');
});
</script>
@stack('js')
@endpush
