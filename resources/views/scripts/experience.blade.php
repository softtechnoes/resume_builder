<script>
    $("#saveExperience").click(function(){ 
        var company = $("#company_name").val();
        var role = $("#exp_role").val();
        var sallery = $("#exp_sallery").val();
        var city = $("#exp_city").val();
        var from = $("#from").val();
        var to = $("#to").val();
        var description = $("#exp_description").val();
        // console.log(school_name+board+state+passing_year+school_address+percentage);
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
        type:"GET",
        url:"{{url('add-experience')}}",
        data:{
            'company':company,
            'role': role,
            'sallery': sallery,
            'city': city,
            'from': from,
            'to': to,
            'description':description,
        }, 
        success:function(data){ 
            console.log(data);
            // $("#diploma_course_updated").html(data[0].course_name);
            // $("#diploma_course_fresh").hide();
           
            $.growl.notice({ message: "Done !" });
        }
        });
    }); 

</script>
@foreach ($experience as $expe)
<script>
$("#UpdateExperience_{{$expe->id}}").click(function(){ 
        var company = $("#company_name_{{$expe->id}}").val();
        var role = $("#role_{{$expe->id}}").val();
        var sallery = $("#sallery_{{$expe->id}}").val();
        var city = $("#city_{{$expe->id}}").val();
        var from = $("#from_{{$expe->id}}").val();
        var to = $("#to_{{$expe->id}}").val();
        var description = $("#description_{{$expe->id}}").val();
        var exp_id=$("#exp_id").val();
        
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
        $.ajax({
        type:"GET",
        url:"{{url('add-experience')}}",
        data:{
            'company':company,
            'role': role,
            'sallery': sallery,
            'city': city,
            'from': from,
            'to': to,
            'description':description,
            'exp_id':exp_id,
        }, 
        success:function(data){ 
            console.log(data);
            $("#company_show_{{$expe->id}}").html(data[0].company);
            $("#role_show_{{$expe->id}}").html(data[0].role);
            $("#sallery_show_{{$expe->id}}").html(data[0].sallery);
            $("#city_show_{{$expe->id}}").html(data[0].city);
            $("#from_show_{{$expe->id}}").html(data[0].from);
            $("#to_show_{{$expe->id}}").html(data[0].to);
            // $("#company_name_{{$expe->id}}_fresh").hide();
           
            $.growl.notice({ message: "Done !" });
        }
        });
    }); 
</script>
@endforeach