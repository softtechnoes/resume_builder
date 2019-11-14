<script>
    $("#saveDiploma,#updateDiploma").click(function(){ 
        
      var course_name = $("#diploma_course_name").val();
      var college_name = $("#diploma_college_name").val();
      var university = $("#diploma_university_name").val();
      var state = $("#diploma_state").val();
      var passing_year = $("#diploma_passing_year").val();
      var percentage = $("#diploma_percentage").val();
      var from = $("#diploma_from").val();
      var diploma_id=$("#diploma_id").val();
      var to=$("#diploma_to").val();
      var college_address=$("#diploma_college_adrs").val();
      var spcialization=$("#diploma_specialization").val();

      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-diploma')}}",
        data:{
          'course_name':course_name,
          'college_name': college_name,
          'university': university,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'from': from,
          'to': to,
          'diploma_id': diploma_id,
          'college_address': college_address,
          'spcialization': spcialization,
        }, 
        success:function(data){ 
          console.log(data);
          $("#diploma_course_updated").html(data[0].course_name);
          $("#diploma_course_fresh").hide();
          $("#diploma_college_updated").html(data[0].college);
          $("#diploma_college_fresh").hide();
          $("#diploma_university_updated").html(data[0].university);
          $("#diploma_university_fresh").hide();
          $("#diploma_state_updated").html(data[1]);
          $("#diploma_state_fresh").hide();
          $("#diploma_percentage_updated").html(data[0].percentage);
          $("#diploma_percentage_fresh").hide();
          $("#diploma_from_updated").html(data[0].from);
          $("#diploma_from_fresh").hide();
          $("#diploma_to_updated").html(data[0].to);
          $("#diploma_to_fresh").hide();
          $("#diploma_passing_year_updated").html(data[0].passing_year);
          $("#diploma_passing_year_fresh").hide();
          $("#diploma_college_address_updated").html(data[0].college_address);
          $("#diploma_college_address_fresh").hide();
          $("#diploma_specialization_updated").html(data[0].specialization);
          $("#diploma_specialization_fresh").hide();
          $.growl.notice({ message: "Done !" });
        }
      });
    }); 
</script>