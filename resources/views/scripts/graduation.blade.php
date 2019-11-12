<script>
    $("#saveGraduation,#updateGraduation").click(function(){ 
        
      var course_name = $("#grad_course_name").val();
      var college_name = $("#grad_college_name").val();
      var university = $("#grad_university_name").val();
      var state = $("#grad_state").val();
      var passing_year = $("#grad_passing_year").val();
      var percentage = $("#grad_percentage").val();
      var from = $("#grad_from").val();
      var grad_id=$("#grad_id").val();
      var to=$("#grad_to").val();
      var college_address=$("#grad_college_adrs").val();
      var spcialization=$("#grad_specialization").val();

      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-graduation')}}",
        data:{
          'course_name':course_name,
          'college_name': college_name,
          'university': university,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'from': from,
          'to': to,
          'grad_id': grad_id,
          'college_address': college_address,
          'spcialization': spcialization,
        }, 
        success:function(data){ 
          $("#grad_course_updated").html(data[0].course_name);
          $("#grad_course_fresh").hide();
          $("#grad_college_updated").html(data[0].college);
          $("#grad_college_fresh").hide();
          $("#grad_university_updated").html(data[0].university);
          $("#grad_university_fresh").hide();
          $("#grad_state_updated").html(data[1]);
          $("#grad_state_fresh").hide();
          $("#grad_percentage_updated").html(data[0].percentage);
          $("#grad_percentage_fresh").hide();
          $("#grad_from_updated").html(data[0].from);
          $("#grad_from_fresh").hide();
          $("#grad_to_updated").html(data[0].to);
          $("#grad_to_fresh").hide();
          $("#grad_passing_year_updated").html(data[0].passing_year);
          $("#grad_passing_year_fresh").hide();
          $("#grad_college_address_updated").html(data[0].college_address);
          $("#grad_college_address_fresh").hide();
          $("#grad_specialization_updated").html(data[0].specialization);
          $("#grad_specialization_fresh").hide();
          $.growl.notice({ message: "Done !" });
        }
      });
    }); 
</script>