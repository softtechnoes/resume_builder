<script>
    $("#saveHighSchool,#updateHighSchool").click(function(){ 
      var school_name = $("#school_name").val();
      var board = $("#board").val();
      var state = $("#state").val();
      var passing_year = $("#passing_year").val();
      var percentage = $("#percentage").val();
      var school_address = $("#school_address").val();
      var high_school_id=$("#high_school_id").val();
      var board_id=$("#board").val();
      var state_id=$("#state").val();
      // console.log(school_name+board+state+passing_year+school_address+percentage);
      $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
      });
      $.ajax({
        type:"GET",
        url:"{{url('add-high-school')}}",
        data:{
          'school_name': school_name,
          'board': board,
          'state': state,
          'passing_year': passing_year,
          'percentage': percentage,
          'school_address': school_address,
          'high_school_id': high_school_id,
          'board_id': board_id,
          'state_id': state_id,
        }, 
        success:function(data){ 
          console.log(data);
          $("#school_updated").html(data[0].school_name);
          $("#school_fresh").hide();
          $("#board_updated").html(data[1]);
          $("#board_fresh").hide();
          $("#state_updated").html(data[2]);
          $("#state_fresh").hide();
          $("#percentage_updated").html(data[0].percentage);
          $("#percentage_fresh").hide();
          $("#passing_year_updated").html(data[0].passing_year);
          $("#passing_year_fresh").hide();
          $("#school_address_updated").html(data[0].school_address);
          $("#school_address_fresh").hide();
          // $("#success").modal('show');
          $.growl.notice({ message: "The kitten is cute!" });
        }
      });
    }); 
</script>