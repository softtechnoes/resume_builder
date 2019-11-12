<script>
    $("#saveIntermediate,#updateIntermediate").click(function(){ 
        
      var school_name = $("#inter_school_name").val();
      var board = $("#inter_board").val();
      var state = $("#inter_state").val();
      var passing_year = $("#inter_passing_year").val();
      var percentage = $("#inter_percentage").val();
      var school_address = $("#inter_school_address").val();
      var intermediate_id=$("#intermediate_id").val();
      var board_id=$("#inter_board").val();
      var state_id=$("#inter_state").val();
      console.log(passing_year);
      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-intermediate')}}",
        data:{
          'school_name': school_name,
          'board': board,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'school_address': school_address,
          'intermediate_id': intermediate_id,
          'board_id': board_id,
          'state_id': state_id,
        }, 
        success:function(data){ 
          console.log(data);
          $("#inter_school_updated").html(data[0].school_name);
          $("#inter_school_fresh").hide();
          $("#inter_board_updated").html(data[1]);
          $("#inter_board_fresh").hide();
          $("#inter_state_updated").html(data[2]);
          $("#inter_state_fresh").hide();
          $("#inter_percentage_updated").html(data[0].percentage);
          $("#inter_percentage_fresh").hide();
          $("#inter_passing_year_updated").html(data[0].passing_year);
          $("#inter_passing_year_fresh").hide();
          $("#inter_school_address_updated").html(data[0].school_address);
          $("#inter_school_address_fresh").hide();
          $.growl.notice({ message: "Done !" });
        }
      });
    }); 
</script>