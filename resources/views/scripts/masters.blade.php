<script>
    $("#saveMaster,#updateMaster").click(function(){ 
        
      var course_name = $("#master_course_name").val();
      var college_name = $("#master_college_name").val();
      var university = $("#master_university_name").val();
      var state = $("#master_state").val();
      var passing_year = $("#master_passing_year").val();
      var percentage = $("#master_percentage").val();
      var from = $("#master_from").val();
      var master_id=$("#master_id").val();
      var to=$("#master_to").val();
      var college_address=$("#master_college_adrs").val();
      var spcialization=$("#master_specialization").val();

      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-master')}}",
        data:{
          'course_name':course_name,
          'college_name': college_name,
          'university': university,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'from': from,
          'to': to,
          'master_id': master_id,
          'college_address': college_address,
          'spcialization': spcialization,
        }, 
        success:function(data){ 
            console.log(data);
          $("#master_course_updated").html(data[0].course_name);
          $("#master_course_fresh").hide();
          $("#master_college_updated").html(data[0].college);
          $("#master_college_fresh").hide();
          $("#master_university_updated").html(data[0].university);
          $("#master_university_fresh").hide();
          $("#master_state_updated").html(data[1]);
          $("#master_state_fresh").hide();
          $("#master_percentage_updated").html(data[0].percentage);
          $("#master_percentage_fresh").hide();
          $("#master_from_updated").html(data[0].from);
          $("#master_from_fresh").hide();
          $("#master_to_updated").html(data[0].to);
          $("#master_to_fresh").hide();
          $("#master_passing_year_updated").html(data[0].passing_year);
          $("#master_passing_year_fresh").hide();
          $("#master_college_address_updated").html(data[0].college_address);
          $("#master_college_address_fresh").hide();
          $("#master_specialization_updated").html(data[0].specialization);
          $("#master_specialization_fresh").hide();
          $.growl.notice({ message: "Done !" });
        }
      });
    }); 
</script>